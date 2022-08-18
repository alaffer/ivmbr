<?php

use App\Filament\Resources\RoleResource;
use App\Filament\Resources\UserResource;

return [
    'exclude' => [
        UserResource::class,
        RoleResource::class,
    ]
];
