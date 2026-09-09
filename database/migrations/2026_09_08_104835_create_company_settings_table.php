<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('company_settings', function (Blueprint $table) {
            $table->id();

            // Company information
            $table->string('company_name_ar');
            $table->string('company_name_en');

            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();

            // Logo
            $table->string('logo')->nullable();

            // About
            $table->text('about_ar')->nullable();
            $table->text('about_en')->nullable();

            // Vision
            $table->text('vision_ar')->nullable();
            $table->text('vision_en')->nullable();

            // Mission
            $table->text('mission_ar')->nullable();
            $table->text('mission_en')->nullable();

            // Commitment
            $table->text('commitment_ar')->nullable();
            $table->text('commitment_en')->nullable();

            // Address
            $table->text('address_ar')->nullable();
            $table->text('address_en')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_settings');
    }
};