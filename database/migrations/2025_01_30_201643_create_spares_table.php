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
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('message');

            // Important Fields
            $table->string('category');                     // For Catogeries
            $table->string('part_number');                  // For Part No
            $table->string('english_name');                 // For E Name
            $table->string('myanmar_name');                 // For M Name
            $table->integer('price');                       // For Price as integer
            $table->integer('stock_quantity');             // For B-100 Stock
            $table->string('movement_level');              // For Movement Level
            $table->string('photo')->nullable();           // For Photo URL/link
            $table->string('category_type');               // For Category
            $table->string('price_range')->nullable();     // For Price Range


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
