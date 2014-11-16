<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndividualsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('individuals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('cpf', 14)->index();
			$table->string('photo', 255)->nullable();
			$table->string('name', 120)->index();
			$table->string('gender', 1);
			$table->date('birthdate');
			$table->string('address', 80)->nullable();
			$table->string('address_number', 20)->nullable();
			$table->string('address_neighborhood', 40)->nullable();
			$table->string('address_complement', 80)->nullable();
			$table->string('address_city', 40)->nullable();
			$table->string('address_state', 40)->nullable();
			$table->boolean('active')->default(1);
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
		Schema::drop('individuals');
	}

}
