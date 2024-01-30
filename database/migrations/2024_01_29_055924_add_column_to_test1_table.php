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
        Schema::table('tests1', function (Blueprint $table) {
            $table->string('email')->unique()->after('nama');
            $table->date('tanggal_lahir')->after('alamat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tests1', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('tanggal_lahir');
        });
    }
};
