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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_type_id')->unsigned();
            $table->string("name")->unique();
            $table->string("slug")->unique();
            $table->string("description")->nullable();
            $table->enum("type", ["product", "blog", "page", "post", "event", "news", "gallery", "video", "audio", "document", "file", "other"])->default("product");
            $table->bigInteger("parent_id")->unsigned()->nullable();
            $table->bigInteger("child_id")->unsigned()->nullable();
            $table->json('related_categories')->nullable();
            $table->string('googleShoppingID')->nullable();
            $table->string('googleShoppingName')->nullable();
            $table->boolean('isGlobal')->default(false);
            $table->timestamps();

            $table->foreign('category_type_id')->references('id')->on('category_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
