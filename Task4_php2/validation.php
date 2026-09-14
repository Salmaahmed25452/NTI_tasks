<?php

$validates = [

    'username' => [
        'filters' => FILTER_VALIDATE_REGEXP,

        'my_options' => [
            'options' => [
                'regexp' => '/^[A-Z][a-z]{3,8}$/'
            ]
        ],

        'error' => 'The Name start with Upper and length between 4 and 9'
    ],


    'password' => [
        'filters' => FILTER_VALIDATE_REGEXP,

        'my_options' => [
            'options' => [
                'regexp' => '/^[0-9a-z]{3,8}$/'
            ]
        ],

        'error' => 'The password and length between 3 and 8'
    ],


    'email' => [
        'filters' => FILTER_VALIDATE_EMAIL,

        'my_options' => [],

        'error' => 'Invalid Email'
    ],


    'phone' => [
        'filters' => FILTER_VALIDATE_REGEXP,

        'my_options' => [
        'options' => [
        'regexp' => '/^[0-9]{11}$/'
            ]
        ],

        'error' => 'Invalid Phone Number'
    ],


    'facebook' => [
        'filters' => FILTER_VALIDATE_URL,

        'my_options' => [],

        'error' => 'Invalid Facebook URL'
    ],


    'twitter' => [
        'filters' => FILTER_VALIDATE_URL,

        'my_options' => [],

        'error' => 'Invalid Twitter URL'
    ],


    'instagram' => [
        'filters' => FILTER_VALIDATE_URL,

        'my_options' => [],

        'error' => 'Invalid Instagram URL'
    ]

];

?>