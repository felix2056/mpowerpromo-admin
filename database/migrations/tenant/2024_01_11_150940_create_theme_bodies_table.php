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
        Schema::create('theme_bodies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("theme_id")->unsigned();
            $table->string("body_background_color")->nullable();
            $table->string("body_text_color")->nullable();
            $table->timestamps();

            $table->foreign("theme_id")->references("id")->on("themes")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('theme_bodies');
    }
};
