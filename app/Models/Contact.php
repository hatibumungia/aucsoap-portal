<?php

namespace App\Models;

use App\Utils\UuidAutoGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Contact extends Model
{
    use HasFactory;
    use UuidAutoGenerator;
    protected $fillable = [
        'country_id',
        'organisation_legal_name',
        'official_acronym',
        'state_or_country',
        'postfix_or_zip',
        'city',
        'street',
        'postal_address',
        'telephone_number',
        'mobile_number',
        'fax_number',
        'email_address',
        'organisation_website',
        'organisation_registration_number',
        'allow_editing'
    ];
    public function country(): BelongsToMany
    {
        return $this->belongsToMany(Country::class);
    }
}
