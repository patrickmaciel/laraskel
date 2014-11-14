<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class AclPermissionsTableSeeder extends Seeder {

	public function run()
	{
		if (Schema::hasTable('acl_permissions')) {

			DB::table('acl_permissions')->truncate();

			$acl_permissions = [
				[
					'id' => 1,
					'ident' => 'admin',
					'description' => 'Permissão total no sistema'
				],
				[
					'id' => 2,
					'ident' => 'admin.reports',
					'description' => 'Relatórios'
				],
				[
					'id' => 3,
					'ident' => 'admin.payments',
					'description' => 'Painel de pagamentos'
				],
				[
					'id' => 4,
					'ident' => 'admin.users.destroy',
					'description' => 'Excluir pagamentos'
				],
				[
					'id' => 5,
					'ident' => 'panel.individuals',
					'description' => 'Painel da Pessoa Física'
				],
				[
					'id' => 6,
					'ident' => 'panel.entities',
					'description' => 'Painel da Pessoa Jurídica'
				]
			];

			DB::table('acl_permissions')->insert($acl_permissions);

		}
	}

}
