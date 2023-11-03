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
        Schema::create('store_urls', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("store_id")->unsigned();
            $table->string("url");
            $table->timestamps();

            $table->foreign("store_id")->references("id")->on("stores")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_urls');
    }
};
