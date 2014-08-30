<?php

return array(
    /**
     * Transforms username and password into the appropriate fields for Auth::attempt
     *
     * Can also include additional conditions eg: 'active' => true
     */

    'format_credentials' => function ($username, $password) {
            $field = filter_var($username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

            return array(
                $field => $username,
                'password' => $password
            );
        }
);