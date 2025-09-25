<?php

declare(strict_types=1);

namespace Modules\Test\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Modules\Test\Models\ProductoTest;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductoTestPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:ProductoTest');
    }

    public function view(AuthUser $authUser, ProductoTest $productoTest): bool
    {
        return $authUser->can('View:ProductoTest');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:ProductoTest');
    }

    public function update(AuthUser $authUser, ProductoTest $productoTest): bool
    {
        return $authUser->can('Update:ProductoTest');
    }

    public function delete(AuthUser $authUser, ProductoTest $productoTest): bool
    {
        return $authUser->can('Delete:ProductoTest');
    }

    public function restore(AuthUser $authUser, ProductoTest $productoTest): bool
    {
        return $authUser->can('Restore:ProductoTest');
    }

    public function forceDelete(AuthUser $authUser, ProductoTest $productoTest): bool
    {
        return $authUser->can('ForceDelete:ProductoTest');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:ProductoTest');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:ProductoTest');
    }

    public function replicate(AuthUser $authUser, ProductoTest $productoTest): bool
    {
        return $authUser->can('Replicate:ProductoTest');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:ProductoTest');
    }

}