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
        $mongo = DB::getMongoClient()->konnection;

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
                    'createdAt' => $user->created_at
                ]
            );

            // Store ID for reference
            $userIds[$user->id] = $newUser->id;
        }

        $this->info('Migrated ' . count($userIds) . ' users');

//        /* Events */
//        $eventIds = [];
//
//        $this->info('Starting migration of events...');
//
//        foreach (CalendarEvent::with(['registrations', 'guests'])->get() as $event) {
//            /* Registrations */
//            $registrations = [];
//            foreach ($event->registrations as $reg) {
//                $registrations[] = [
//                    'user' => $reg->user_id,
//                    'chair' => (bool)$reg->chair_status,
//                    'photographer' => (bool)$reg->photographer_status,
//                    'writer' => (bool)$reg->writer_status,
//                    'driver' => (bool)$reg->driver_status,
//                    'createdAt' => $reg->created_at
//                ];
//            }
//
//            foreach ($event->guests as $reg) {
//                $registrations[] = [
//                    'user' => [
//                        'name' => $reg->first_name . ' ' . $reg->last_name,
//                        'phone' => $reg->phone
//                    ],
//                    'createdAt' => $reg->created_at
//                ];
//            }
//
//            $this->info('Migrated ' . count($registrations) . ' registrations');
//
//            // Insert into Mongo
//            $newEvent = \App\Mongo\CalendarEvent::create(
//                [
//                    'title' => $event->title,
//                    'description' => $event->description,
//                    'eventLocation' => $event->event_location,
//                    'meetingLocation' => $event->meeting_location,
//                    'startTime' => $event->start_time,
//                    'endTime' => $event->end_time,
//                    'openTime' => $event->open_time,
//                    'closeTime' => $event->close_time,
//                    'createdBy' => $userIds[$event->creator_id],
//                    'registrations' => $registrations,
//                    'createdAt' => $event->created_at
//                ]
//            );
//
//            $eventIds[$event->id] = $newEvent->id;
//        }
//
//        $this->info('Migrated ' . count($eventIds) . ' events');
//
//
//        /* Posts */
//        $this->info('Starting migration of posts...');
//
//        $postCount = 0;
//
//        foreach(Post::with(['author', 'category'])->get() as $post){
//            \App\Mongo\Post::create(
//                [
//                    'title' => $post->title,
//                    'body' => $post->content,
//                    'category' => $post->category->name,
//                    'createdAt' => $post->created_at
//                ]
//            );
//
//            $postCount++;
//        }
//
//        $this->info('Migrated ' . $postCount . ' posts');


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
