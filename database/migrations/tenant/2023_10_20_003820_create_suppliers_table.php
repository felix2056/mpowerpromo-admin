<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->json('distributors')->nullable();
            $table->integer('asiNumber');
            $table->string('accountNumber')->nullable();
            $table->string('psCode')->nullable();
            $table->string('psId')->nullable();
            $table->string('psPassword')->nullable();
            $table->string('website')->nullable();
            $table->boolean('isEQP')->default(false);
            $table->boolean('isActive')->default(true);
            $table->boolean('hasCred')->default(false);
            $table->string('unCaseName')->nullable();
            $table->integer('activeProducts')->default(0);
            $table->integer('productsSellableCount')->default(0);
            $table->integer('percent')->default(0);
            $table->json('endpoints')->nullable();
            $table->json('productsWithErrors')->nullable();
            $table->boolean('readyToGrab')->default(false);
            $table->string('token')->nullable();
            $table->integer('proofs')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
};
