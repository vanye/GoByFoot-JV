<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('experiences', function(Blueprint $table)
		{
			$table->string('title');
			$table->string('comment');
			$table->enum('status', array('published', 'unpublished'));
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
		Schema::table('experiences', function(Blueprint $table)
		{
			$table->dropColumn('title');
			$table->dropColumn('comment');
			$table->dropColumn('status');
			$table->dropColumn('created_at');
			$table->dropColumn('updated_at');
			
		});
	}

}
