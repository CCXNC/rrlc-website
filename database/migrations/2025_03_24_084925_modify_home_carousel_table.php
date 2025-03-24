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
        Schema::table('home_carousel', function (Blueprint $table) {
            $table->dropColumn('created_by'); // Remove the created_by column
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade'); // Add user_id
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_carousel', function (Blueprint $table) {
            $table->string('created_by')->nullable(); // Re-add the created_by column
            $table->dropForeign(['user_id']); // Drop foreign key
            $table->dropColumn('user_id'); // Remove user_id column
        });
    }
};