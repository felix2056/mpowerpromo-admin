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
        Schema::create('store_themes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("store_id")->unsigned();
            $table->bigInteger("theme_id")->unsigned();
            $table->string("slug")->unique();
            $table->boolean("is_published")->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("store_id")->references("id")->on("stores")->onDelete("cascade");
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
        Schema::dropIfExists('store_themes');
    }
};
