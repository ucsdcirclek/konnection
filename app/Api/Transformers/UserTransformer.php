<?php

namespace App\Api\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return array(
            'id' => (int) $user->id,
            'username' => $user->username,
            'email' => $user->email,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'phone' => $user->phone,
            'confirmed' => (int) $user->confirmed,
            'created_at' => $user->created_at->toDateTimeString()
        );
    }
}
