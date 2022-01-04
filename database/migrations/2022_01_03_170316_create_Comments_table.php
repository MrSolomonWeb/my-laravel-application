<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('Comments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('subject', 255);
			$table->text('body');

            $table->Integer('article_id')->unsigned();
            $table->foreign('article_id')->references('id')->on('articles')
                ->onDelete('cascade');
//			$table->bigInteger('article_id')->unsigned();

		});
	}

	public function down()
	{
		Schema::drop('Comments');
	}
}
