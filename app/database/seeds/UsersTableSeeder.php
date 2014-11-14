<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		if (Schema::hasTable('users')) {

			DB::table('users')->truncate();

			$users = [
				[
					'id' => 1,
					'email' => 'admin@admin.com.br',
					'password' => Hash::make('#nimdA@2014')
				],
				[
					'id' => 2,
					'email' => 'senior@admin.com.br',
					'password' => Hash::make('#nimdA@2014')
				],
				[
					'id' => 3,
					'email' => 'junior@admin.com.br',
					'password' => Hash::make('#nimdA@2014')
				],
				[
					'id' => 4,
					'email' => 'individual@admin.com.br',
					'password' => Hash::make('#nimdA@2014')
				],
				[
					'id' => 5,
					'email' => 'entities@admin.com.br',
					'password' => Hash::make('#nimdA@2014')
				]
			];

			DB::table('users')->insert($users);

		}
	}

}
