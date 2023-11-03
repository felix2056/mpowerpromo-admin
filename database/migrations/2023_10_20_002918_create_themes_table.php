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
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("directory")->nullable();
            $table->string("version")->default("1.0.0");
            $table->string("author")->nullable();
            $table->string("author_url")->nullable();
            $table->text("description")->nullable();
            $table->string("screenshot")->nullable();
            $table->string("preview_url")->nullable();
            $table->string("download_url")->nullable();
            $table->decimal("price", 10, 2)->default(0.00);
            $table->enum("currency", ["USD", "EUR", "GBP", "NGN"])->default("USD");
            $table->enum("status", ["active", "inactive"])->default("inactive");
            $table->boolean("is_default")->default(false);
            $table->string("license")->nullable();
            $table->string("license_key")->nullable();
            $table->string("license_type")->nullable();
            $table->string("license_expires_at")->nullable();
            $table->string("license_validity")->nullable();
            $table->string("license_activation")->nullable();
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
        Schema::dropIfExists('themes');
    }
};
