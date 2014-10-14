<?php

class UserTransformer extends League\Fractal\TransformerAbstract
{

    public function transform(User $user)
    {
        return array(
            'id' => (int)$user->id,
            'username' => $user->username,
            'avatar_url' => $user->avatar_url
        );
    }

}