<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagsTable extends Migration {

	public function up()
	{
		Schema::create('Tags', function(Blueprint $table) {
			$table->increments('id');
			$table->softDeletes();
			$table->string('label', 255)->unique();
		});
	}

	public function down()
	{
		Schema::drop('Tags');
	}
}
