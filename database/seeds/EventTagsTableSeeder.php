<?php

use Illuminate\Database\Seeder;

use App\EventTag;

class EventTagsTableSeeder extends Seeder
{

    public function run()
    {
        $tags = array(
            array(
                1,
                'Community Service',
                'CO',
                'Any service event recieves this tag. Each member must do at least 60 minutes of work to count. This includes round trip travel time. Service planning  recieves an Administrative tag as well.'
            ),
            array(
                1,
                'Campus Service',
                'CA',
                'Service organized/completed by home campus.'
            ),
            array(
                1,
                'Continuing Service',
                'CS',
                'Participation in the same project with another organization that occured once a month for at least two additional months previously. On the third month an event becomes continuing. It continues to count as long as it continues to occurs at least once a month.'
            ),
            array(
                1,
                'District Service Initiative',
                'DSI',
                'For the 2016-2017 year, an event that falls under the "Serve to Conserve" Definition.'
            ),
            array(
                1,
                'International Service Initiative',
                'ISI',
                'The International Service Initiative is "Focusing on the Future: Children." This is any event helping children under 18. (Usually involves direct service).'
            ),
            array(
                2,
                'Administrative',
                'AD',
                'Administrative hours include, but are not limited to tabling, calling coordinators for events. Attending general meetings, Committee meetings & Kiwanis meetings are administrative, so all have the AD Tag. Service-based committees (ex: Single Service Committee) are both CO & AD.'
            ),
            array(
                3,
                'Social',
                'SE',
                'A social promotes the moral of members and is for all events that do not fall under Administrative and Community Service.'
            ),
            array(
                4,
                'Membership Development & Education',
                'MD',
                'Event that develops membership recruitment growth, retention & education. Ex: Workshops, tabling, recruitment fairs, education sessions. NOT ALL SOCIAL EVENTS ARE MD. Only Family, MD&E, retreats, and socials with leadership aspects count as both Social and MD.'
            ),
            array(
                4,
                'Fundraising',
                'FR',
                'Event that raises money for a cause either for charity or for administrative purposes.'
            ),
            array(
                4,
                'Circle K',
                'CK',
                'Event with 2 members from your CKI Club and another 2 from another CKI Club present. Also counts as AD if less than two members are present.'
            ),
            array(
                4,
                'Kiwanis Family',
                'KF',
                'Event with 2 members from your CKI Club & 2 from another Kiwanis Family Club excluding CKI.'
            ),
            array(
                4,
                'Interclub',
                'IN',
                'An interclub is any event hosted by another Kiwanis Family club, including Circle K. If your club has 50 members or less, at least TWO members from your home club and at least TWO members present from another Kiwanis Family club. If your club has 51-90 members, at least THREE members from your home club and at least TWO members from another Kiwanis Family club. If your club has 91 members or more, at least FOUR members from your home club and at least TWO members present from another Kiwanis Family club. The host club may mark the interclub (IN) tag if the hosted event is a community service project.
'
            ),
            array(
                4,
                'Webinar',
                'WB',
                'Event hosted by a District Board Officer presented via online webinar. These events only receive the Webinar (WB) tag and Administrative (AD) tag.'
            ),
            array(
                4,
                'Divisional Event',
                'DV',
                'Event hosted by and for the Division (usually Lt. Governor).'
            ),
            array(
                4,
                'District Event',
                'DE',
                'Event hosted by the District.'
            ),
            array(
                4,
                'International Event',
                'IE',
                'Event hosted by Circle K International. Usually only LSSP & ICON.'
            ),
            array(
                4,
                'Club Hosted',
                'HE',
                'Event hosted by home club. Any event not hosted by another Kiwanis Family Club/Circle K.'
            ),
        );

        foreach ($tags as $tag) {
            EventTag::create(
                array(
                    'category_id' => $tag[0],
                    'name' => $tag[1],
                    'abbreviation' => $tag[2],
                    'description' => $tag[3]
                )
            );
        }
    }
}