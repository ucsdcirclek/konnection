<?php

use Illuminate\Database\Seeder;
use App\EventType;

class CalendarEventTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = array(
            array(
                'Service',
                'Description of club service event type.'
            ),
            array(
                'Social',
                'Description of club social event type'
            ),
            array(
                'Committee',
                'Description of committee event type'
            ),
            array(
                'Kiwanis',
                'Description of Kiwanis event type'
            ),
            array(
                'Fundraising',
                'Description of fundraising event type'
            ),
            array(
                'Division/District',
                'Description of division/district event type'
            )
        );

        foreach($types as $type) {
            EventType::create(
                array(
                    'name' => $type[0],
                    'description' => $type[1]
                )
            );
        }
    }
}
