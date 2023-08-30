<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accreditation_applications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('type_of_application_id');
            $table->uuid('scope_of_operation_id');
            $table->uuid('official_language_id');
            $table->uuid('cso_classification_id');
            $table->uuid('application_status_id');
            $table->string('cso_registration_number');
            $table->date('cso_registration_date');
            $table->date('registration_expiring_date');
            $table->tinyInteger('cso_years_of_experience');
            $table->date('accreditation_date');
            $table->string('cso_accreditation_number')->nullable();
            $table->date('accreditation_expiring_date')->nullable();
            $table->string('application_letter')->unique();
            $table->string('registration_or_acknowledgement_certificate')->unique('accreditation_app_registration_or_acknowledgement_certificate');
            $table->string('certified_articles_of_association')->unique('accreditation_app_certified_articles_of_association');
            $table->string('bylaws')->unique()->unique();
            $table->string('statutes_or_constitution_detailing_the_mandate')->unique('accreditation_app_statutes_or_constitution_detailing_the_mandate');
            $table->string('scope_and_governing_structure_or_organisational_profile')->unique('app_scope_and_governing_structure_or_organisational_profile');
            $table->string('annual_income_and_expenditure_statement')->unique('accreditation_app_annual_income_and_expenditure_statement');
            $table->string('names_of_all_donors_and_other_funding_sources_last_two_years')->unique('app_names_of_all_donors_and_other_funding_sources_last_two_years');
            $table->string('evidence_of_competency_in_thematic_areas')->unique('accreditation_app_evidence_of_competency_in_thematic_areas');
            $table->string('other_relevant_documents')->unique();
            $table->boolean('allow_editing')->default(false);
            $table->timestamps();
            $table->foreign('scope_of_operation_id')->references('id')->on('scope_of_operations');
            $table->foreign('type_of_application_id')->references('id')->on('type_of_applications');
            $table->foreign('application_status_id')->references('id')->on('application_statuses');
            $table->foreign('official_language_id')->references('id')->on('official_languages');
            $table->foreign('cso_classification_id')->references('id')->on('cso_classifications');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accreditation_applications');
    }
};
