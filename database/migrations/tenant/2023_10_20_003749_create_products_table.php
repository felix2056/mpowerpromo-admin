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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('supplier_id')->unsigned();
            $table->string('supplierCode');
            $table->string('productId');
            $table->string('imgUrl')->nullable();
            $table->string('imgUrlSmall')->nullable();
            $table->string('category')->nullable();
            $table->boolean('isCloseout')->default(false);
            $table->string('primaryMaterial')->nullable();
            $table->string('productName');
            $table->string('description');
            $table->integer('minQuantity')->default(1);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('slug')->unique();
            $table->string('source')->nullable()->default('PromoStandards');
            $table->timestamp('grabbedAt')->nullable();
            $table->integer('timeGrabSpent')->default(0);
            $table->integer('total_sales')->default(0);
            $table->decimal('costMin', 8, 2)->default(0);
            $table->string('productRating')->nullable();
            $table->string('discountCode')->nullable();
            $table->string('originDiscountCode')->nullable();
            $table->integer('indexId')->nullable();
            $table->string('inventoryStatus')->nullable();
            $table->integer('inventoryStatusRate')->default(0);
            $table->integer('rank_error')->nullable();
            $table->json('issues')->nullable();
            $table->json('decorationProducts')->nullable();
            $table->integer('partsWithoutShippingPackages')->default(0);
            $table->integer('partsWithoutDimension')->default(0);
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
        Schema::dropIfExists('products');
    }
};
