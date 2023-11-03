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
        Schema::create('announcement_blocks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("component_id")->unsigned();
            $table->string("text");
            $table->string("link")->nullable();
            $table->enum("align", ["left", "center", "right"])->default("center");
            $table->integer("position")->default(0);
            $table->timestamps();

            $table->foreign("component_id")->references("id")->on("announcement_bars")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announcement_blocks');
    }
};
