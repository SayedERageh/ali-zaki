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
       Schema::create('site_settings', function (Blueprint $table) {
    $table->id();

    $table->string('site_name')->nullable();

    $table->string('primary_color')->default('#55bce8');
    $table->string('primary_dark_color')->default('#168dcc');

    $table->string('secondary_color')->default('#061a2b');
    $table->string('secondary_dark_color')->default('#0b2b43');

    $table->string('light_blue_color')->default('#dff4fc');
    $table->string('light_color')->default('#f5f8fa');

    $table->string('white_color')->default('#ffffff');

    $table->string('text_color')->default('#182b3a');
    $table->string('muted_color')->default('#71808d');

    $table->string('border_color')->default('#dfe7ec');

    $table->string('logo')->nullable();
    $table->string('favicon')->nullable();

    $table->text('site_description')->nullable();

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
