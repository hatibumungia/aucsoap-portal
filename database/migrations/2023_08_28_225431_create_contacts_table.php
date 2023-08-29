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
        Schema::create('contacts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('country_id');
            $table->uuid('accreditation_application_id');
            $table->string('organisation_legal_name')->nullable();
            $table->string('official_acronym')->unique();
            $table->string('state_or_country');
            $table->string('postfix_or_zip');
            $table->string('city');
            $table->string('street');
            $table->string('postal_address');
            $table->string('telephone_number');
            $table->string('mobile_number');
            $table->string('fax_number')->nullable();
            $table->string('email_address');
            $table->string('organisation_website');
            $table->string('organisation_registration_number')->unique();
            $table->boolean('allow_editing')->default(false);
            $table->timestamps();
            $table->foreign('accreditation_application_id')->references('id')->on('accreditation_applications');
            $table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
