<?php

namespace App\Utils;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasPermissionsTrait
{
    public function givePermissionsTo(... $permissions): static
    {

        $permissions = $this->getAllPermissions($permissions);
        if($permissions === null) {
            return $this;
        }
        $this->permissions()->saveMany($permissions);
        return $this;
    }

    public function withdrawPermissionsTo( ... $permissions ): static
    {

        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;

    }

    public function refreshPermissions( ... $permissions ): \App\Models\User
    {

        $this->permissions()->detach();
        return $this->givePermissionsTo($permissions);
    }

    public function hasPermissionTo($permission): bool
    {

        return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);
    }

    public function hasPermissionThroughRole($permission): bool
    {

        foreach ($permission->roles as $role){
            if($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole( ... $roles ): bool
    {

        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }
        return false;
    }

    public function roles(): BelongsToMany
    {

        return $this->belongsToMany(Role::class,'users_roles');

    }
    public function permissions(): BelongsToMany
    {

        return $this->belongsToMany(Permission::class,'users_permissions');

    }
    protected function hasPermission($permission) {

        return (bool) $this->permissions->where('slug', $permission->slug)->count();
    }

    protected function getAllPermissions(array $permissions) {

        return Permission::whereIn('slug',$permissions)->get();

    }

}
