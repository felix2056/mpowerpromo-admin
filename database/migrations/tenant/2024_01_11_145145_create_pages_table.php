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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string("navigation_title");
            $table->string("meta_title")->nullable();
            $table->string("meta_description")->nullable();
            $table->string("meta_keywords")->nullable();
            $table->enum("meta_robots", ["index", "noindex", "follow", "nofollow"])->default("index");
            $table->string("static_routes")->nullable(); // ["403", "404", "500", "account", "approval", "artproof", "artproofconfirmation", "authors", "blog", "cat", "cat-facetgroup", "cat-403", "cart", "cartitemsadded", "changepassword", "checkout", "checkoutconfirmation", "configure", "configureproduct", "createaccount", "createaccountconfirmation", "custom", "designer", "event", "facetgroup", "facets", "favorites", "forgotpassword", "industry", "largequote", "largequoterequestconfirmation", "order", "organization", "orders-products", "payments", "paymentsconfirmation", "presentation", "product", "product-reviews", "products", "proof", "proofitemsadded", "proofcart", "proofcheckoutconfirmation", "proofcheckout", "review-order-product", "quickquote", "quoteitemsadded", "quotecart", "quotecheckout", "quotecheckoutconfirmation", "quoterequestconfirmation", "resetpassword", "sample", "sampleitemsadded", "samplecart", "samplecheckout", "samplecheckoutconfirmation", "signin", "signout", "sso", "supplier", "track-shipment"]
            $table->string("slug")->unique();
            $table->string("additional_slug")->nullable();
            $table->string("image")->nullable();
            $table->boolean("is_homepage")->default(false);
            $table->boolean("is_enabled")->default(false);
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
        Schema::dropIfExists('pages');
    }
};
