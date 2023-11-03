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
        Schema::create('company_presentations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("company_id")->unsigned();
            $table->bigInteger("presentation_id")->unsigned();
            $table->timestamps();

            $table->foreign("company_id")->references("id")->on("companies")->onDelete("cascade");
            $table->foreign("presentation_id")->references("id")->on("presentations")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_presentations');
    }
};
