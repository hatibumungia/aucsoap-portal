<?php

namespace App\Models;

use App\Utils\UuidAutoGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    use HasFactory;
    use UuidAutoGenerator;

    protected $fillable = [
        'name',
        'slug',
    ];
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class,'roles_permissions');
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'users_permissions');
    }
}
