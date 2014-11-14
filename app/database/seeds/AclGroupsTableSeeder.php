<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class AclGroupsTableSeeder extends Seeder {

	public function run()
	{
		if (Schema::hasTable('acl_groups')) {

			DB::table('acl_groups')->truncate();

			$acl_groups = [
				[
					'id' => 1,
					'name' => 'Administrador',
					'description' => 'Permissão total no sistema'
				],
				[
					'id' => 2,
					'name' => 'Funcionário Senior',
					'description' => 'Não tem acesso ao módulo de pagamentos e liberações de anúncios'
				],
				[
					'id' => 3,
					'name' => 'Funcionário Junior',
					'description' => 'Não pode excluir nada e não tem acesso ao módulo de pagamentos e liberações de anúncios'
				],
				[
					'id' => 4,
					'name' => 'Cliente Pessoa Física',
					'description' => 'Acesso ao Painel da Pessoa Física'
				],
				[
					'id' => 5,
					'name' => 'Cliente Pessoa Jurídica',
					'description' => 'Acesso ao Painel da Pessoa Jurídica'
				]
			];

			DB::table('acl_groups')->insert($acl_groups);

		}
	}

}
