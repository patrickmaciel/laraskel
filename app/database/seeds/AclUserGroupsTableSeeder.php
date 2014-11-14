<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class AclUserGroupsTableSeeder extends Seeder {

	public function run()
	{
		if (Schema::hasTable('acl_user_groups')) {

			DB::table('acl_user_groups')->truncate();

			$acl_user_groups = [
				[
					'user_id' => 1,
					'group_id' => 1
				],
				[
					'user_id' => 2,
					'group_id' => 2
				],
				[
					'user_id' => 3,
					'group_id' => 3
				],
				[
					'user_id' => 4,
					'group_id' => 4
				],
				[
					'user_id' => 5,
					'group_id' => 5
				]
			];

			DB::table('acl_user_groups')->insert($acl_user_groups);

		}
	}

}
