<?php

use Illuminate\Database\Seeder;

use App\EventCategory;

class EventCategoriesTableSeeder extends Seeder {

    public function run() {

        $categories = array(
            array(
                'Service',
                'Any service events that receives service hours should be tagged as Community Service (CO), but depending on the nature of the service event, the event can be tagged with the other Service tags (CA, CS, DSI, ISI).'
            ),
            array(
                'Leadership',
                'Any event related to the operation of the club should be tagged as Administrative (AD). Examples of administrative events include but are not limited to attending meetings (e.g. general meetings, board meetings, committee meetings, Kiwanis meetings), tabling, and workshops.'
            ),
            array(
                'Fellowship',
                'Any event in which club members are socially interacting with one another should be tagged as Social (SE). A social event promotes the morale of members so it is usually tagged as Membership Development & Education (MD); however, remember that although all SE events are MD-tagged, not all MD events are SE-tagged (e.g. workshops).'
            ),
            array(
                'Miscellaneous',
                'Miscellaneous tags are supplementary. Remember that all events have to fall in one of the tags in the Service, Leadership, or Fellowship categories before getting a supplementary miscellaneous tag.'
            )
        );

        foreach($categories as $category) {
            EventCategory::create(
                array(
                    'name' => $category[0],
                    'description' => $category[1]
                )
            );
        }
    }
}
