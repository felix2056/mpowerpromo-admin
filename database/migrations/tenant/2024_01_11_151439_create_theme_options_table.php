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
        Schema::create('theme_options', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("theme_id")->unsigned();
            $table->boolean("enable_rounded")->default(true);
            $table->boolean("enable_responsive_font_sizes")->default(true);
            $table->boolean("enable_shadows")->default(false);
            $table->boolean("enable_gradients")->default(false);
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
        Schema::dropIfExists('theme_options');
    }
};
