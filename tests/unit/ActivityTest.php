<?php

/**
 * Tests for the Activity model
 */
class ActivityTest extends \Codeception\TestCase\Test
{

    use Codeception\Specify;

   /**
    * @var \UnitTester
    */
    protected $tester;

    protected $user_id;

    protected function _before()
    {
        $this->user_id = $this->tester->haveRecord('users', array(
                'username'  => 'unittest1',
                'email'     => 'test@test.com',
                'confirmed' => 1
            ));
    }

    protected function _after()
    {
    }

    // tests
    public function testValidation()
    {
        $this->specify("User ID must be provided", function() {
                $activity = new Activity;
                $activity->user_id = null;
                verify_not($activity->validate());
            });

        $this->specify("User ID must exist", function() {
                $activity = new Activity;
                $activity->user_id = -120;
                verify_not($activity->validate());
            });

        $this->specify("User ID is ok", function() {
                $activity = new Activity;
                $activity->user_id = $this->user_id;
                verify_that($activity->validate());
            });
    }

    public function testSaveAndDelete()
    {
        $activity_id = null;

        $this->specify("Successful save", function() use (&$activity_id) {
                $activity = new Activity;
                $activity->user_id = $this->user_id;
                $activity->service_hours = 12.0;
                $activity->admin_hours = 12.0;
                $activity->social_hours = 12.0;
                $activity->mileage = 12.0;
                verify_that($activity->save());
                $this->tester->seeRecord('activity_log', array(
                        'id' => $activity->id
                    ));
                $activity_id = $activity->id;
            });

        $this->specify("Successful delete", function() use ($activity_id) {
                verify_that($activity_id);
                $activity = Activity::find($activity_id);
                verify_that($activity->delete());
            });
    }



}