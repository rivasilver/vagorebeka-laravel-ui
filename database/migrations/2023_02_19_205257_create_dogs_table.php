<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('color', 150);
            $table->boolean('purebred');
            $table->integer('age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('dogs');
    }
};
