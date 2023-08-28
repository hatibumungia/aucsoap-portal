<?php

namespace App\Models;

use App\Utils\UuidAutoGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;
    use UuidAutoGenerator;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function subCategories(): BelongsToMany
    {
        return $this->belongsToMany(SubCategory::class,'area_of_expertises');
    }
}
