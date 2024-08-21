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
        Schema::table('inv_items', function (Blueprint $table) {
            $table->string('code')->unique()->after('name'); // Add a unique code column
            $table->text('description')->nullable()->after('code'); // Add a nullable description column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inv_items', function (Blueprint $table) {
            $table->dropColumn('code');
            $table->dropColumn('description');
        });
    }
};
