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
        Schema::create('announcement_bars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("theme_id")->unsigned();
            $table->string("color_scheme")->default("light");
            $table->boolean("show_separator_line")->default(true);
            $table->boolean("show_social_media_icons")->default(true);
            $table->boolean("auto_rotate_announcements")->default(false);
            $table->integer("auto_rotate_announcements_interval")->default(5);
            $table->boolean("enable_country_selection")->default(false);
            $table->boolean("enable_language_selection")->default(false);
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("youtube")->nullable();
            $table->string("tiktok")->nullable();
            $table->string("twitter")->nullable();
            $table->string("pinterest")->nullable();
            $table->string("snapchat")->nullable();
            $table->string("tumblr")->nullable();
            $table->string("vimeo")->nullable();
            $table->text("custom_css")->nullable();
            $table->timestamps();

            $table->foreign("theme_id")->references("id")->on("store_themes")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announcement_bars');
    }
};
