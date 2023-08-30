<?php

namespace App\Models;

use App\Utils\UuidAutoGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AccreditationApplication extends Model
{
    use HasFactory;
    use UuidAutoGenerator;

    protected $fillable = [
        'type_of_application_id',
        'application_status_id',
        'scope_of_operation_id',
        'cso_classification_id',
        'cso_registration_number',
        'cso_registration_date',
        'registration_expiring_date',
        'cso_years_of_experience',
        'accreditation_date',
        'cso_accreditation_number',
        'accreditation_expiring_date',
        'application_letter',
        'registration_or_acknowledgement_certificate',
        'certified_articles_of_association',
        'bylaws',
        'statutes_or_constitution_detailing_the_mandate',
        'scope_and_governing_structure_or_organisational_profile',
        'annual_income_and_expenditure_statement',
        'names_of_all_donors_and_other_funding_sources_last_two_years',
        'evidence_of_competency_in_thematic_areas',
        'other_relevant_documents',
        'allow_editing',
    ];

    /**
     * Get the user that owns the Organization.
     */
    public function typeOfApplication(): BelongsTo
    {
        return $this->belongsTo(TypeOfApplication::class);
    }

    /**
     * Get the user that owns the Organization.
     */
    public function csoClassification(): BelongsTo
    {
        return $this->belongsTo(CsoClassification::class);
    }

    /**
     * Get the user that owns the Organization.
     */
    public function officialLanguage(): BelongsTo
    {
        return $this->belongsTo(OfficialLanguage::class);
    }

    /**
     * Get the user that owns the Organization.
     */
    public function applicationStatus(): BelongsTo
    {
        return $this->belongsTo(ApplicationStatus::class);
    }

    public function applicationStatuses(): BelongsToMany
    {
        return $this->belongsToMany(ApplicationStatus::class,'accreditation_application_statuses');
    }

    /**
     * Get the user that owns the Organization.
     */
    public function accreditationApplicationRemarks(): HasMany
    {
        return $this->hasMany(AccreditationApplicationRemark::class);
    }
    /**
     * Get the organization associated with the user.
     */
    public function accreditationApplicationNumber(): HasOne
    {
        return $this->hasOne(AccreditationApplicationNumber::class);
    }
}
