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
        Schema::create('old_passwords', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(indexName: 'FK_USER_ID_OLD_PASSWORD_TABLE');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('old_passwords');
    }
};
