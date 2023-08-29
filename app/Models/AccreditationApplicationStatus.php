<?php

namespace App\Models;

use App\Utils\UuidGetString;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccreditationApplicationStatus extends Model
{
    use HasFactory;
    use UuidGetString;

    protected $fillable = [
        'application_status_id',
        'accreditation_application_id',
    ];
}
