<?php

namespace App\Filament\Admin2\Resources\Users\Pages;

use App\Filament\Admin2\Resources\Users\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
