<?php

return [
    'name' => 'Chugunova\'s site',
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
        ],
        'post_tag' => [
            'list' => \App\Sharp\EmbeddedEntityLists\ListPostTag::class,
            'form' => \App\Sharp\Tag\FormTag::class,
        ],
        'photo' => [
            'list' => \App\Sharp\Photo\ListPhoto::class,
            'form' => \App\Sharp\Photo\FormPhoto::class,
            'show' => \App\Sharp\Photo\ShowPhoto::class,
        ],
        'service' => [
            'list' => \App\Sharp\Service\ListService::class,
            'form' => \App\Sharp\Service\FormService::class,
            'show' => \App\Sharp\Service\ShowService::class,
        ],
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
        ],
        [
            'label' => 'Photos',
            'icon' => 'fa-superpowers',
            'entity' => 'photo'
        ],
        [
            'label' => 'Services',
            'icon' => 'fa-superpowers',
            'entity' => 'service'
        ]
    ],
    'uploads' => [
        'thumbnails_disk' => env('FILESYSTEM_DRIVER', 'local'),
        'tmp_dir' => env('SHARP_UPLOADS_TMP_DIR', 'tmp'),
        'thumbnails_dir' => env('SHARP_UPLOADS_THUMBS_DIR', 'thumbnails'),
    ]
];
