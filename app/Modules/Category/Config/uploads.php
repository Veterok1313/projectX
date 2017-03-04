<?php
return [

    //file field
    'image' => [

        'path' => '/uploads/category/',

        'validator' => 'mimes:jpeg,jpg,png,gif|max:10000',

        //Model field
        'field' => 'image',

        'thumbs' => [
            [
                'path' => 'thumb/',
                'width' => 250,
                'height' => false,
            ],
        ]
    ],

    //file field
    'banner' => [

        'path' => '/uploads/category/',

        'validator' => 'mimes:jpeg,jpg,png,gif|max:10000',

        //Model field
        'field' => 'banner',

        'thumbs' => [
            [
                'path' => 'full/',
                'width' => 1206,
                'height' => false,
                'full' => true
            ],
            [
                'path' => 'thumb/',
                'width' => 250,
                'height' => false,
            ],

        ]

    ],
];