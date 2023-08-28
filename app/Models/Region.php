<?php

namespace App\Models;

use App\Utils\UuidAutoGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    use HasFactory;
    use UuidAutoGenerator;
    protected $fillable = [
        'name',
        'code',
    ];

    /**
     * Get all the countries for the region.
     */
    public function countries(): HasMany
    {
        return $this->hasMany(Country::class);
    }
}
