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
        Schema::create('page_redirects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("page_id")->unsigned();
            $table->string("url");
            $table->timestamps();

            $table->foreign("page_id")->references("id")->on("pages")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_redirects');
    }
};
