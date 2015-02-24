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

        // Users
        // Fetch all users
        $users = User::all();
        $userIds = [];

        foreach ($users as $user) {
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
                        'phone' => $user->phone
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
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array(
            array('example', InputArgument::REQUIRED, 'An example argument.'),
        );
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array(
            array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
        );
    }

}
