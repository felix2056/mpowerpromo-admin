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
        Schema::create('meta_tags', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("head_tag_id")->unsigned();
            $table->string("name");
            $table->string("description")->nullable();
            $table->string("content")->nullable();
            $table->string("property")->nullable();
            $table->string("hid")->nullable();
            $table->string("http_equiv")->nullable();
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
        Schema::dropIfExists('meta_tags');
    }
};
