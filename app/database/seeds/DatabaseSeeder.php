<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->call('AclGroupsTableSeeder');
		$this->call('AclPermissionsTableSeeder');
		$this->call('AclUserGroupsTableSeeder');
		$this->call('AclGroupPermissionsTableSeeder');
	}

}
