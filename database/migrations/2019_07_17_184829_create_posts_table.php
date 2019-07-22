<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('category_id');
            $table->string('user_id')->nullable();
            $table->text('content');
            $table->string('meta_title')->nullable();
            $table->string('slug');
            $table->string('tag')->nullable();
            $table->string('keywords')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('image_title')->nullable();
            $table->string('image_alt')->nullable();
            $table->string('featured_img')->nullable();
            $table->string('featured_img_title')->nullable();
            $table->string('featured_img_alt')->nullable();
            $table->string('video')->nullable();
            $table->datetime('published_at')->nullable();
            $table->boolean('is_published')->default(1);
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
        Schema::dropIfExists('posts');
    }
}
