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
        Schema::create('accreditation_application_remarks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('accreditation_application_id');
            $table->text('remark');
            $table->timestamps();
            $table->foreign('accreditation_application_id', 'accreditation_application_remarks_acc_application_id_foreign')->references('id')->on('accreditation_applications');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accreditation_application_remarks');
    }
};
