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
        Schema::create('presentations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("store_id")->unsigned();
            $table->string("logo")->nullable();
            $table->string("name")->unique();
            $table->boolean("is_template")->default(false);
            $table->boolean("is_public")->default(false);
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
        Schema::dropIfExists('presentations');
    }
};
