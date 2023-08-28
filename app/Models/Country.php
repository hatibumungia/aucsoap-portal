<?php

namespace App\Models;

use App\Utils\UuidAutoGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Country extends Model
{
    use HasFactory;
    use UuidAutoGenerator;
    protected $fillable = [
        'name',
        'code',
        'region_id'
    ];

    /**
     * Get the country that wrote the organization.
     */
    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
}
