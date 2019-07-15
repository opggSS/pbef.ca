<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('meta_title')->nullable();
            $table->string('slug')->nullable();
            $table->string('category')->nullable();
            $table->longtext('description');
            $table->string('image');
            $table->string('featured_img');
            $table->string('video')->nullable();
            $table->datetime('posted_at');
            $table->datetime('edited_at')->nullable();
            $table->boolean('status')->default(1) ;
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
