<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticleTagTable extends Migration {

	public function up()
	{
        Schema::create('article_tag', function (Blueprint $table) {
//            $table->id();
            $table->Integer('article_id')->unsigned();
            $table->Integer('tag_id')->unsigned();
            $table->foreign('article_id')->references('id')->on('articles')
                ->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')
                ->onDelete('cascade');

//            $table->foreignId('article_id')->constrained()->onDelete('cascade');
//            $table->foreignId('tag_id')->constrained()->onDelete('cascade');

        });
	}

	public function down()
	{
		Schema::drop('article_tag');

	}
}
