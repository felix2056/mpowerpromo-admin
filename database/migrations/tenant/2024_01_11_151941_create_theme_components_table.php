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
        Schema::create('theme_components', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("theme_id")->unsigned();
            $table->string("border_width")->nullable()->default("1px");
            $table->string("border_radius")->nullable()->default(".25rem");
            $table->string("border_radius_sm")->nullable()->default(".2rem");
            $table->string("border_radius_lg")->nullable()->default(".3rem");
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
        Schema::dropIfExists('theme_components');
    }
};
