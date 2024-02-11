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
        Schema::create('supplier_contact_phones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('supplier_contact_id')->unsigned();
            $table->string('slug');
            $table->string('source');
            $table->string('countryCode');
            $table->string('phoneNumber');
            $table->string('extension')->nullable();
            $table->timestamps();

            $table->foreign('supplier_contact_id')->references('id')->on('supplier_contacts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier_contact_phones');
    }
};
