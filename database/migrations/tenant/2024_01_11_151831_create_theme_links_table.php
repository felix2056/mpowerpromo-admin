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
        Schema::create('theme_links', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("theme_id")->unsigned();
            $table->enum("link_decorations", ["none", "underline", "overline", "line-through"])->default("none");
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
        Schema::dropIfExists('theme_links');
    }
};
