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
        Schema::create('customer_assignments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("customer_id")->unsigned();
            $table->bigInteger("account_manager")->unsigned();
            $table->bigInteger("sales_admin")->unsigned();
            $table->bigInteger("source_user")->unsigned();
            $table->timestamps();

            $table->foreign("customer_id")->references("id")->on("customers")->onDelete("cascade");
            $table->foreign("account_manager")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("sales_admin")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("source_user")->references("id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_assignments');
    }
};
