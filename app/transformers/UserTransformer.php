<?php

class UserTransformer extends League\Fractal\TransformerAbstract
{

    public function transform(User $user)
    {
        return array(
            'id' => (int)$user->id,
            'username' => $user->username,
            'email' => $user->email,
            'confirmation_code' => $user->confirmation_code,
            'confirmed' => (bool)$user->confirmed,
            'created_at' => $user->created_at,
            'updated_at' => $user->updated_at
        );
    }

}