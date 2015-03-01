<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration {

	public function up()
	{
		Schema::create('cities', function(Blueprint $table)
    {
      $table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('name', 200);
			$table->integer('state_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::table('cities', function(Blueprint $table) {
			$table->foreign('state_id')->references('id')->on('states')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('cities', function(Blueprint $table) {
			$table->dropForeign('cities_state_id_foreign');
		});

		Schema::drop('cities');
	}
}
