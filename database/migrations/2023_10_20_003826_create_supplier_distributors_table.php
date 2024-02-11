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
        Schema::create('supplier_distributors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('supplier_id')->unsigned();
            // $table->bigInteger('distributor_id')->unsigned();
            $table->string('slug');
            $table->boolean('isListPrice')->default(true);
            $table->integer('rebate')->default(0);
            $table->json('SupplierContacts')->nullable();
            $table->json('SupplierAddresses')->nullable();
            $table->json('SupplierNotes')->nullable();
            $table->boolean('digitalProofNotRequired')->default(false);
            $table->timestamps();

            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            // $table->foreign('distributor_id')->references('id')->on('distributors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier_distributors');
    }
};
