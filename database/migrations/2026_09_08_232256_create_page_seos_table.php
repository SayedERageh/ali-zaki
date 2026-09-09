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
       Schema::create('page_seos', function (Blueprint $table) {
    $table->id();

    $table->string('page_key')->unique();

    $table->string('title_ar')->nullable();
    $table->string('title_en')->nullable();

    $table->text('description_ar')->nullable();
    $table->text('description_en')->nullable();

    $table->text('keywords_ar')->nullable();
    $table->text('keywords_en')->nullable();

    $table->string('og_title_ar')->nullable();
    $table->string('og_title_en')->nullable();

    $table->text('og_description_ar')->nullable();
    $table->text('og_description_en')->nullable();

    $table->string('og_image')->nullable();

    $table->string('canonical_url')->nullable();

    $table->boolean('index')->default(true);
    $table->boolean('follow')->default(true);

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_seos');
    }
};
