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
            $newUser = \App\Mongo\User::create(
                [
                    'username' => $user->username,
                    'emails' => [
                        'address' => $user->email,
                        'verified' => true
                    ],
                    'profile' => [
                        'firstName' => $user->first_name,
                        'lastName' => $user->last_name,
                        'phone' => $user->phone,
                        'college' => $user->profile->college,
                        'bio' => $user->profile->bio
                    ],
                    'services' => [
                        'password' => [
                            'bcrypt' => $user->password
                        ]
                    ],
                    'createdAt' => new MongoDate($user->created_at->getTimestamp())
                ]
            );

            // Store ID for reference
            $userIds[$user->id] = new MongoId($newUser->id);
        }

        $this->info('Migrated ' . count($userIds) . ' users');

        /* Events */
        $eventIds = [];

        $this->info('Starting migration of events...');

        foreach (CalendarEvent::all() as $event) {
            // Insert into Mongo
            $eventFields = [
                'title' => $event->title,
                'description' => $event->description,
                'eventLocation' => $event->event_location,
                'meetingLocation' => $event->meeting_location,
                'startTime' => new MongoDate($event->start_time->getTimestamp()),
                'endTime' => new MongoDate($event->end_time->getTimestamp()),
                'openTime' => !empty($event->open_time) ? new MongoDate($event->open_time->getTimestamp()) : null,
                'closeTime' => new MongoDate($event->close_time->getTimestamp()),
                'createdBy' => $userIds[$event->creator_id],
                'createdAt' => new MongoDate($event->created_at->getTimestamp())
            ];

            if(!isset($event->open_time))
                unset($eventFields['openTime']);

            $newEvent = \App\Mongo\CalendarEvent::create($eventFields);

            $eventIds[$event->id] = new MongoId($newEvent->id);
        }

        $this->info('Migrated ' . count($eventIds) . ' events');


        /* Registrations */
        $this->info('Starting migration of event registrations...');
        $regCount = 0;
        foreach (EventRegistration::all() as $reg) {
            $roles = [];

            if($reg->photographer_status)
                $roles[] = 'photographer';
            if($reg->writer_status)
                $roles[] = 'writer';
            if($reg->driver_status)
                $roles[] = 'driver';

            $newReg = [
                'user' => $userIds[$reg->user_id],
                'event' => $eventIds[$reg->event_id]
            ];

            if(!empty($roles))
                $newReg['roles'] = $roles;

            $newReg['createdAt'] = new MongoDate($reg->created_at->getTimestamp());

            \App\Mongo\EventRegistration::create($newReg);

            $regCount++;
        }

        $this->info('Migrated ' . $regCount . ' event registrations');

        $this->info('Starting migration of guest event registrations...');
        $regCount = 0;
        foreach (GuestRegistration::all() as $reg) {
            $newReg = [
                'guest' => [
                    'name' => $reg->first_name . ' ' . $reg->last_name,
                    'phone' => $reg->phone
                ],
                'event' => $eventIds[$reg->event_id],
                'createdAt' => new MongoDate($reg->created_at->getTimestamp())
            ];

            \App\Mongo\EventRegistration::create($newReg);

            $regCount++;
        }

        $this->info('Migrated ' . $regCount . ' guest event registrations');


        /* Posts */
        $this->info('Starting migration of posts...');

        $postCount = 0;

        foreach(Post::with(['author', 'category'])->get() as $post){
            \App\Mongo\Post::create(
                [
                    'title' => $post->title,
                    'body' => $post->content,
                    'category' => $post->category->name,
                    'createdBy' => $userIds[$post->author->id],
                    'createdAt' => new MongoDate($post->created_at->getTimestamp())
                ]
            );

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
