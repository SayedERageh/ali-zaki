<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('core_values', function (Blueprint $table) {
            $table->id();

            $table->string('title_ar');
            $table->string('title_en');

            $table->text('description_ar')->nullable();
            $table->text('description_en')->nullable();

            $table->string('icon')->nullable();

            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('core_values');
    }
};