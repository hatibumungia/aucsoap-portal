<?php

namespace App\Models;

use App\Utils\UuidAutoGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CsoClassification extends Model
{
    use HasFactory;
    use UuidAutoGenerator;

    protected $fillable = [
        'name',
        'code',
    ];


    /**
     * Get the organization associated with the user.
     */
    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }
}
