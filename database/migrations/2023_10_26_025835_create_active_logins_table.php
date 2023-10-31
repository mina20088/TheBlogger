<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('active_logins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(indexName: 'FK_ACTIVE_LOGINS_USER_ID' )->onDelete('cascade');
            $table->string('session_id');
            $table->dateTime('logout')->nullable();
            $table->string('ip_address');
            $table->text('user_agent');
            $table->boolean('status')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('active_logins');
    }
};
