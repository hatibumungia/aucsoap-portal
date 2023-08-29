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
        Schema::create('contact_person_details', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('accreditation_application_id');
            $table->string('contact_person_level');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('functional_title');
            $table->string('department');
            $table->string('telephone')->unique();
            $table->string('fax')->unique()->nullable();
            $table->string('mobile')->unique();
            $table->string('whatsapp_number')->unique();
            $table->string('email')->unique();
            $table->boolean('allow_editing')->default(false);
            $table->foreign('accreditation_application_id')->references('id')->on('accreditation_applications');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_person_details');
    }
};
