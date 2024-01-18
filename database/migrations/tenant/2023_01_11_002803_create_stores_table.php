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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("logo")->nullable();
            $table->string("domain");
            $table->string("subdomain");
            $table->string("slug")->unique();
            $table->string("country_code");
            $table->string("country_flag");
            $table->string("phone_number")->nullable();
            $table->string("extension")->nullable();
            $table->boolean("is_active")->default(false);
            $table->enum("install_status", ["pending", "installing", "installed", "failed"])->default("pending");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
};
