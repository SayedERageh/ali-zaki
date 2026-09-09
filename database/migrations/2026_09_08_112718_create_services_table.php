<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->string('title_ar');
            $table->string('title_en');

            $table->string('slug')->unique();

            $table->text('short_description_ar')->nullable();
            $table->text('short_description_en')->nullable();

            $table->longText('description_ar')->nullable();
            $table->longText('description_en')->nullable();

            $table->string('image')->nullable();
            $table->string('icon')->nullable();

            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};