<?php

class ActivityTransformer extends League\Fractal\TransformerAbstract
{

    public function transform(Activity $activity)
    {
        return array(
            'id' => (int)$activity->id,
            'user_id' => (int)$activity->user_id,
            'event_id' => (int)$activity->event_id,
            'service_hours' => (float)$activity->service_hours,
            'admin_hours' => (float)$activity->admin_hours,
            'social_hours' => (float)$activity->social_hours,
            'close_time' => $activity->close_time,
            'created_at' => $activity->created_at,
            'updated_at' => $activity->updated_at
        );
    }

}
