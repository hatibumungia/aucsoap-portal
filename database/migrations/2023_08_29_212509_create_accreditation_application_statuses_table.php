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
        Schema::create('accreditation_application_statuses', function (Blueprint $table) {
            $table->uuid('application_status_id');
            $table->uuid('accreditation_application_id');
            $table->timestamps();
            $table->primary(['application_status_id', 'accreditation_application_id'], 'accreditation_application_statuses_application_status_id_primary');
            $table->foreign('application_status_id', 'accreditation_application_statuses_application_id_foreign')->references('id')->on('application_statuses');
            $table->foreign('accreditation_application_id', 'accreditation_application_statuses_accreditation_id_foreign')->references('id')->on('accreditation_applications');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accreditation_application_statuses');
    }
};
