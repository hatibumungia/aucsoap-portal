<?php

namespace App\Models;

use App\Utils\UuidAutoGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;
    use UuidAutoGenerator;

    protected $fillable = [
        'name',
        'slug',
    ];
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class,'roles_permissions');
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'users_roles');
    }
}
