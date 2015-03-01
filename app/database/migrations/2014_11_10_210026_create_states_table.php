<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatesTable extends Migration {

	public function up()
	{
		Schema::create('states', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 150);
			$table->string('abbr', 2);
			$table->integer('country_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('states', function($table)
		{
		    $table->foreign('country_id')->references('id')->on('countries');
		});
	}

	public function down()
	{
		Schema::table('states', function($table)
		{
		    $table->dropForeign('states_country_id_foreign');
		});

		Schema::drop('states');
	}
}
