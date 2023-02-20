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
        Schema::create('sandwiches', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->integer('number_of_toppings');
            $table->string('toppings');
            $table->boolean('vegetarian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sandwiches');
    }
};
