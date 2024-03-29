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
        Schema::create('link_tags', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("head_tag_id")->unsigned();
            $table->string("href")->nullable();
            $table->string("rel")->nullable();
            $table->string("description")->nullable();
            $table->text("content")->nullable();
            $table->boolean("is_external",)->default(true);
            $table->boolean("is_inline",)->default(false);
            $table->boolean("is_bootstrap")->default(false);
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
        Schema::dropIfExists('link_tags');
    }
};
