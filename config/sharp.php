<?php

return [
    'name' => 'Chugunova\'s site',
    'custom_url_segment' => 'admin',
    'entities' => [
        'tag' => [
            'list' => \App\Sharp\Entities\Tag\ListTag::class,
            'form' => \App\Sharp\Entities\Tag\FormTag::class,
            'show' => \App\Sharp\Entities\Tag\ShowTag::class,
//            'validator' => \App\Sharp\Entities\SpaceshipSharpValidator::class,
//            'policy' => \App\Sharp\Entities\Policies\SpaceshipPolicy::class
        ],
        'post' => [
            'list' => \App\Sharp\Entities\Post\ListPost::class,
            'form' => \App\Sharp\Entities\Post\FormPost::class,
            'show' => \App\Sharp\Entities\Post\ShowPost::class,
        ],
//        'post_tag' => [
//            'list' => \App\Sharp\EmbeddedEntityLists\ListPostTag::class,
//            'form' => \App\Sharp\Entities\Tag\FormTag::class,
//        ],
        'photo' => [
            'list' => \App\Sharp\Entities\Photo\ListPhoto::class,
            'form' => \App\Sharp\Entities\Photo\FormPhoto::class,
            'show' => \App\Sharp\Entities\Photo\ShowPhoto::class,
        ],
        'service' => [
            'list' => \App\Sharp\Entities\Service\ListService::class,
            'form' => \App\Sharp\Entities\Service\FormService::class,
            'show' => \App\Sharp\Entities\Service\ShowService::class,
        ],
        'order' => [
            'list' => \App\Sharp\Entities\Order\ListOrder::class,
            'form' => \App\Sharp\Entities\Order\FormOrder::class,
            'show' => \App\Sharp\Entities\Order\ShowOrder::class,
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
        ],
        [
            'label' => 'Orders',
            'icon' => 'fa-superpowers',
            'entity' => 'order'
        ]
    ],
    'uploads' => [
        'thumbnails_disk' => env('FILESYSTEM_DRIVER', 'local'),
        'tmp_dir' => env('SHARP_UPLOADS_TMP_DIR', 'tmp'),
        'thumbnails_dir' => env('SHARP_UPLOADS_THUMBS_DIR', 'thumbnails'),
    ]
];
