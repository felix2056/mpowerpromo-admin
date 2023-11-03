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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->enum("role", ["admin", "account_manager", "sales_admin", "sales_rep", "customer"])->default("customer");
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string("job_title")->nullable();
            $table->string("website")->nullable();
            $table->string("country_code")->nullable()->default("US");
            $table->string("phone_number")->nullable();
            $table->string("extension")->nullable();
            $table->decimal("sales_commission")->nullable();
            $table->decimal("sales_admin_commission")->nullable();
            $table->string("avatar")->nullable();
            $table->string("photo")->nullable();
            $table->boolean("is_active")->default(true);
            $table->boolean("is_registered")->default(false);
            $table->timestamp("last_login_at")->nullable();
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
        Schema::dropIfExists('users');
    }
};
