<?php

namespace App\Models;

use App\Utils\UuidAutoGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationStatus extends Model
{
    use HasFactory;
    use UuidAutoGenerator;

    protected $fillable = [
        'name',
        'slug',
    ];
}
