<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class AclGroupPermissionsTableSeeder extends Seeder {

	public function run()
	{
		if (Schema::hasTable('acl_group_permissions')) {

			DB::table('acl_group_permissions')->truncate();

			$acl_group_permissions = [
				// Admin
				['permission_id' => 1,'group_id' => 1],
				['permission_id' => 2,'group_id' => 1],
				['permission_id' => 3,'group_id' => 1],
				['permission_id' => 4,'group_id' => 1],
				['permission_id' => 5,'group_id' => 1],
				['permission_id' => 6,'group_id' => 1],

				// Senior
				['permission_id' => 1,'group_id' => 2],
				['permission_id' => 3,'group_id' => 2],
				['permission_id' => 4,'group_id' => 2],
				['permission_id' => 5,'group_id' => 2],
				['permission_id' => 6,'group_id' => 2],

				// Junior
				['permission_id' => 1,'group_id' => 3],
				['permission_id' => 4,'group_id' => 3],
				['permission_id' => 5,'group_id' => 3],
				['permission_id' => 6,'group_id' => 3],

				// Customer
				['permission_id' => 5,'group_id' => 4],

				// Company
				['permission_id' => 6,'group_id' => 5]
			];

			DB::table('acl_group_permissions')->insert($acl_group_permissions);

		}
	}

}
