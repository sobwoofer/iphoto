<?php

return [
    'name' => 'Saturn',
    'custom_url_segment' => 'admin',
    'entities' => [
        'tag' => [
            'list' => \App\Sharp\Tag\ListTag::class,
            'form' => \App\Sharp\Tag\FormTag::class,
            'show' => \App\Sharp\Tag\ShowTag::class,
//            'validator' => \App\Sharp\SpaceshipSharpValidator::class,
//            'policy' => \App\Sharp\Policies\SpaceshipPolicy::class
        ],
        'post' => [
            'list' => \App\Sharp\Post\ListPost::class,
            'form' => \App\Sharp\Post\FormPost::class,
            'show' => \App\Sharp\Post\ShowPost::class,
//            'validator' => \App\Sharp\SpaceshipSharpValidator::class,
//            'policy' => \App\Sharp\Policies\SpaceshipPolicy::class
        ],
        'post_tag' => [
            'list' => \App\Sharp\EmbeddedEntityLists\ListPostTag::class,
            'form' => \App\Sharp\Tag\FormTag::class,
        ]
    ],
    'auth' => [
        'login_attribute' => 'email',
        'password_attribute' => 'password',
        'display_attribute' => 'name',
    ],
    'menu' => [
        [
            'label' => 'Post',
            'icon' => 'fa-superpowers',
            'entity' => 'post'
        ],
        [
            'label' => 'Tag',
            'icon' => 'fa-superpowers',
            'entity' => 'tag'
        ]
    ],
    'uploads' => [
        'thumbnails_disk' => env('FILESYSTEM_DRIVER', 'local'),
        'tmp_dir' => env('SHARP_UPLOADS_TMP_DIR', 'tmp'),
        'thumbnails_dir' => env('SHARP_UPLOADS_THUMBS_DIR', 'thumbnails'),
    ]
];
