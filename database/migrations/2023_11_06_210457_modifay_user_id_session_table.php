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
        Schema::table('sessions', function (Blueprint $table) {
            Schema::withoutForeignKeyConstraints(function ()use($table){
                $table->dropColumn('user_id');
            });
        });

        Schema::table('sessions', function (Blueprint $table) {


            $table->foreignId('user_id')
                ->nullable()
                ->after('id')
                ->constrained(indexName: 'FK_SESSIONS_USER_ID')
                ->cascadeOnDelete()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sessions', function (Blueprint $table) {
            Schema::withoutForeignKeyConstraints(function ()use($table){
                $table->dropForeign('FK_SESSIONS_USER_ID');
            });

        });
        Schema::table('sessions',function(Blueprint $table){
            $table
                ->foreignId('user_id')
                ->nullable()
                ->index()
                ->change();
        });
    }
};
