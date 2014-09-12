<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('mail');
			$table->string('message');
			$table->enum('status', array('published', 'unpublished'));
			$table->varchar('spam');
			$table->integer('experiences_id')->unsigned()->nullable();
			$table->foreign('experiences_id')->reference('id')->on('experiences')->onDelete('SET NULL');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments');
	}

}
