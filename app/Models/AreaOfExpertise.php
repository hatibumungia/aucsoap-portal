<?php

namespace App\Models;

use App\Utils\UuidGetString;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaOfExpertise extends Model
{
    use HasFactory;
    use UuidGetString;

    protected $fillable = [
        'category_id',
        'sub_category_id',
    ];
}
