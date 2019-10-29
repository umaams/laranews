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
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->date('post_date');
            $table->unsignedInteger('news_category_id');
            $table->text('content')->nullable();
            $table->integer('viewer_count')->default(0);
            $table->string('image_path')->nullable();
            $table->unsignedInteger('created_user_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('news_category_id')->references('id')->on('news_categories');
            $table->foreign('created_user_id')->references('id')->on('users');
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
