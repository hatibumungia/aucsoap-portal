<?php

namespace App\Models;

use App\Utils\UuidAutoGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccreditationApplicationRemark extends Model
{
    use HasFactory;
    use UuidAutoGenerator;

    protected $fillable = [
        'accreditation_application_id',
        'remark',
    ];
}
