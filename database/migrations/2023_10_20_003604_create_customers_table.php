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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned()->nullable();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("email")->unique();
            $table->string("password");
            $table->string("job_title")->nullable();
            $table->string("slug")->unique();
            $table->string("quickbooks_id")->nullable();
            $table->enum("rank", ["A", "B", "C", "D", "E", "F"])->nullable();
            $table->boolean("is_active")->default(true);
            $table->boolean("is_test")->default(false);
            $table->string("address")->nullable();
            $table->string("country")->nullable();
            $table->string("street1")->nullable();
            $table->string("street2")->nullable();
            $table->string("city")->nullable();
            $table->string("state")->nullable();
            $table->string("zip")->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("user_id")->references("id")->on("users")->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
