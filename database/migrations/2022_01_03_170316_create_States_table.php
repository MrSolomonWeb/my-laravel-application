<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatesTable extends Migration {

	public function up()
	{
		Schema::create('States', function(Blueprint $table) {
			$table->increments('id');
			$table->softDeletes();
			$table->bigInteger('views')->unsigned();
			$table->bigInteger('likes')->unsigned();
//			$table->bigInteger('article_id')->unsigned();
//            $table->foreignId('article_id')->constrained()->onDelete('cascade');
            $table->Integer('article_id')->unsigned();
            $table->foreign('article_id')->references('id')->on('articles')
                ->onDelete('cascade');


		});
	}

	public function down()
	{
		Schema::drop('States');
	}
}
