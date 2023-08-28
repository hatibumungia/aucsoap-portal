<?php

namespace App\Models;

use App\Utils\UuidAutoGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SubCategory extends Model
{
    use HasFactory;
    use UuidAutoGenerator;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class,'area_of_expertises');
    }
}
