<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name', 255)->default('')->change();
            $table->string('last_name', 255)->default('')->change();
            $table->string('phone_number', 15)->nullable()->default('')->change();
            $table->date('birthdate')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name', 255)->nullable(false)->change();
            $table->string('last_name', 255)->nullable(false)->change();
            $table->string('phone_number', 15)->nullable(false)->change();
            $table->date('birthdate')->nullable(false)->change();
        });
    }
};
