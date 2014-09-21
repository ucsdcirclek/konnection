<?php

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('EntrustSeeder');
        $this->call('UsersTableSeeder');
        $this->call('ActivityLogTableSeeder');
        $this->call('EventTagsTableSeeder');
        $this->call('EventsTableSeeder');
        $this->call('EventRegistrationsTableSeeder');
    }

}
