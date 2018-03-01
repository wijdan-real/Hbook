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
            $table->increments('id');
            $table->integer('user_id');
            $table->text('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('coverimage')->default('storyimage.jpeg');
            $table->string('image1')->default('storyimage.jpeg');
            $table->string('image2')->default('storyimage.jpeg');
            $table->string('image3')->default('storyimage.jpeg');
            $table->string('image4')->default('storyimage.jpeg');
            $table->string('image5')->default('storyimage.jpeg');
            $table->string('postvedio')->default('storyimage.jpeg');
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
