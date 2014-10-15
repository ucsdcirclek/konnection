<?php

class UserTransformer extends League\Fractal\TransformerAbstract
{

    public function transform(User $user)
    {
        return array(
            'id' => (int)$user->id,
            'username' => $user->username,
            'avatar_thumb' => $user->avatar->url('thumb'),
            'avatar_medium' => $user->avatar->url('medium'),
            'avatar' => $user->avatar->url()
        );
    }

}