<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('company_settings', function (Blueprint $table) {

            $table->string('facebook')->nullable()->after('whatsapp');
            $table->string('instagram')->nullable()->after('facebook');
            $table->string('tiktok')->nullable()->after('instagram');

            $table->string('phone_1')->nullable()->after('tiktok');
            $table->string('phone_2')->nullable()->after('phone_1');
            $table->string('phone_3')->nullable()->after('phone_2');
            $table->string('phone_4')->nullable()->after('phone_3');

            $table->string('website_name')->nullable()->after('email');

            $table->string('qr_code')->nullable()->after('logo');
        });
    }

    public function down(): void
    {
        Schema::table('company_settings', function (Blueprint $table) {
            $table->dropColumn([
                'facebook',
                'instagram',
                'tiktok',
                'phone_1',
                'phone_2',
                'phone_3',
                'phone_4',
                'website_name',
                'qr_code',
            ]);
        });
    }
};