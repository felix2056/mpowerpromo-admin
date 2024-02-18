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
        Schema::create('google_product_categories', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->string("slug")->unique();
            $table->string("description")->nullable();
            $table->enum("type", ["product", "blog", "page", "post", "event", "news", "gallery", "video", "audio", "document", "file", "other"])->default("product");
            $table->bigInteger("parent_id")->unsigned()->nullable();
            $table->bigInteger("child_id")->unsigned()->nullable();
            $table->json('related_categories')->nullable();
            $table->string('googleShoppingID')->nullable();
            $table->string('googleShoppingName')->nullable();
            $table->boolean('isGlobal')->default(true);
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
        Schema::dropIfExists('google_product_categories');
    }
};
