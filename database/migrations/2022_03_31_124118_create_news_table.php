<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->string('excerpt');
            $table->string('blog_meta_title');
            $table->string('blog_slug');
            $table->string('blog_meta_description');
            $table->string('video_url');
            $table->string('blog_tag');
            $table->string('visibility');
            $table->string('status');
            $table->string('blog_image');
            $table->string('gallery_image');
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
        Schema::dropIfExists('news');
    }
}
