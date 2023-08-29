<?php

namespace App\Models;

use App\Utils\UuidAutoGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPersonDetail extends Model
{
    use HasFactory;
    use UuidAutoGenerator;

    protected $fillable = [
        'accreditation_application_id',
        'contact_person_level',
        'first_name',
        'last_name',
        'functional_title',
        'department',
        'telephone',
        'fax',
        'mobile',
        'whatsapp_number',
        'email',
        'allow_editing'
    ];
}
