<?php

return [
    "name" => "Saturn",
    "custom_url_segment" => "admin",
    "entities" => [
        "spaceship" => [
            "list" => \App\Sharp\SpaceshipSharpList::class,
            "form" => \App\Sharp\SpaceshipSharpForm::class,
            "show" => \App\Sharp\SpaceshipSharpShow::class,
            "validator" => \App\Sharp\SpaceshipSharpValidator::class,
//            "policy" => \App\Sharp\Policies\SpaceshipPolicy::class
        ]
    ],
    "auth" => [
        "login_attribute" => "login",
        "password_attribute" => "pwd",
        "display_attribute" => "name",
    ]
];
