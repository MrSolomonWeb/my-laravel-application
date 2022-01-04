<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	public function up()
	{
		Schema::create('Articles', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title', 255)->unique();
			$table->string('slug', 255)->unique();
			$table->string('img', 255);
			$table->text('body');
		});
	}

	public function down()
	{
		Schema::drop('Articles');
	}
}