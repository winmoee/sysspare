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
        Schema::create('spares', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('message')->nullable();

            // Important Fields
            $table->string('category')->nullable();         // For Categories
            $table->string('part_number')->nullable();      // For Part No
            $table->string('english_name')->nullable();     // For E Name
            $table->string('myanmar_name')->nullable();     // For M Name
            $table->integer('price')->nullable();           // For Price as integer
            $table->integer('stock_quantity')->nullable();  // For B-100 Stock
            $table->string('movement_level')->nullable();   // For Movement Level
            $table->string('photo')->nullable();            // For Photo URL/link
            $table->string('category_type')->nullable();    // For Category
            $table->string('price_range')->nullable();      // For Price Range

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spares');
    }
};