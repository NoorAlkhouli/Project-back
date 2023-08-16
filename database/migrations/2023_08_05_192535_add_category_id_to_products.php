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
        Schema::table('products', function (Blueprint $table) {
            // Add the category_id column as an unsigned big integer
            $table->unsignedBigInteger('category_id')->nullable();

            // Create a foreign key constraint to link to the categories table
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {

            // Drop the foreign key constraint
            $table->dropForeign(['category_id']);

            // Drop the category_id column
            $table->dropColumn('category_id');
        });
        
    }
};
