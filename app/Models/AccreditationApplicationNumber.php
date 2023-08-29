<?php

namespace App\Models;

use App\Utils\UuidAutoGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccreditationApplicationNumber extends Model
{
    use HasFactory;
    use UuidAutoGenerator;

    protected $fillable = [
        'accreditation_application_id',
        'accreditation_number',
    ];

    public function accreditationApplication(): BelongsTo
    {
        return $this->belongsTo(AccreditationApplication::class);
    }
}
