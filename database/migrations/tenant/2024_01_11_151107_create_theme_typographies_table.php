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
        Schema::create('theme_typographies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("theme_id")->unsigned();
            $table->string("font_family_san_serif")->nullable();
            $table->string("font_family_monospace")->nullable();
            $table->string("font_family_base")->nullable();
            $table->string("headings_font_family")->nullable();
            $table->string("headings_font_weight")->nullable();
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
        Schema::dropIfExists('theme_typographies');
    }
};
