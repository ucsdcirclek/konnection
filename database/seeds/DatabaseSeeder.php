<?php

use Illuminate\Database\Seeder;

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
        $this->call('CalendarEventTypesTableSeeder');
        $this->call('EventsTableSeeder');
        $this->call('EventRegistrationsTableSeeder');
        $this->call('EventCategoriesTableSeeder');
        $this->call('EventTagsTableSeeder');
        $this->call('PostCategoriesTableSeeder');
        $this->call('PostsTableSeeder');
        //$this->call('CerfsTableSeeder');
        //$this->call('ActivityLogTableSeeder');
        //$this->call('KiwanisAttendeesTableSeeder');
    }

}
