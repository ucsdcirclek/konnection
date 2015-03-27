<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class MigrateMongo extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'migration:mongo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrates Konnection DB to MongoDB.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    private function getRandomString($length = 17)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';

        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
        }

        return $string;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        /* Users */
        $userIds = [];

        $this->info('Starting migration of users...');

        foreach (User::with('profile')->get() as $user) {
            // Insert into Mongo
            $newUser = new \App\Mongo\User;
            $newUser->_id = $this->getRandomString();
            $newUser->username = $user->username;
            $newUser->emails = [
                [
                    'address' => $user->email,
                    'verified' => true
                ]
            ];
            $newUser->profile = [
                'firstName' => $user->first_name,
                'lastName' => $user->last_name,
                'phone' => $user->phone,
                'college' => $user->profile->college,
                'bio' => $user->profile->bio
            ];
            $newUser->services = [
                'password' => [
                    'bcrypt' => str_replace("$2y$", "$2a$", $user->password)
                ]
            ];
            $newUser->createdAt = new MongoDate($user->created_at->getTimestamp());

            $newUser->save();

            // Store ID for reference
            $userIds[$user->id] = $newUser->id;
        }

        $this->info('Migrated ' . count($userIds) . ' users');

        /* Events */
        $eventIds = [];

        $this->info('Starting migration of events...');

        foreach (CalendarEvent::all() as $event) {
            // Insert into Mongo
            $newEvent = new \App\Mongo\CalendarEvent;
            $newEvent->_id = $this->getRandomString();
            $newEvent->title = $event->title;
            $newEvent->description = $event->description;
            $newEvent->eventLocation = $event->event_location;
            $newEvent->meetingLocation = $event->meeting_location;
            $newEvent->startTime = new MongoDate($event->start_time->getTimestamp());
            $newEvent->endTime = new MongoDate($event->end_time->getTimestamp());
            $newEvent->openTime = !empty($event->open_time) ? new MongoDate($event->open_time->getTimestamp()) : null;
            $newEvent->closeTime = new MongoDate($event->close_time->getTimestamp());
            $newEvent->createdBy = $userIds[$event->creator_id];
            $newEvent->createdAt = new MongoDate($event->created_at->getTimestamp());

            if (!isset($event->open_time)) {
                unset($newEvent['openTime']);
            }

            $newEvent->save();

            $eventIds[$event->id] = $newEvent->id;
        }

        $this->info('Migrated ' . count($eventIds) . ' events');


        /* Registrations */
        $this->info('Starting migration of event registrations...');
        $regCount = 0;
        foreach (EventRegistration::all() as $reg) {
            $roles = [];

            if ($reg->photographer_status) {
                $roles[] = 'photographer';
            }
            if ($reg->writer_status) {
                $roles[] = 'writer';
            }
            if ($reg->driver_status) {
                $roles[] = 'driver';
            }

            $registration = new \App\Mongo\EventRegistration;
            $registration->_id = $this->getRandomString();
            $registration->user = $userIds[$reg->user_id];
            $registration->event = $eventIds[$reg->event_id];

            if (!empty($roles)) {
                $registration->roles = $roles;
            }

            $registration->createdAt = new MongoDate($reg->created_at->getTimestamp());

            $registration->save();

            $regCount++;
        }

        $this->info('Migrated ' . $regCount . ' event registrations');

        $this->info('Starting migration of guest event registrations...');
        $regCount = 0;
        foreach (GuestRegistration::all() as $reg) {
            $registration = new \App\Mongo\EventRegistration;
            $registration->_id = $this->getRandomString();
            $registration->guest = [
                'name' => $reg->first_name . ' ' . $reg->last_name,
                'phone' => $reg->phone
            ];
            $registration->event = $eventIds[$reg->event_id];
            $registration->createdAt = new MongoDate($reg->created_at->getTimestamp());

            $registration->save();

            $regCount++;
        }

        $this->info('Migrated ' . $regCount . ' guest event registrations');


        /* Posts */
        $this->info('Starting migration of posts...');

        $postCount = 0;

        foreach (Post::with(['author', 'category'])->get() as $post) {
            $newPost = new \App\Mongo\Post;
            $newPost->_id = $this->getRandomString();
            $newPost->title = $post->title;
            $newPost->body = $post->content;
            $newPost->category = $post->category->name;
            $newPost->createdBy = $userIds[$post->author->id];
            $newPost->createdAt = new MongoDate($post->created_at->getTimestamp());

            $newPost->save();

            $postCount++;
        }

        $this->info('Migrated ' . $postCount . ' posts');


        /* Finish */
        $this->info('Finished migration');
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array();
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array();
    }

}
