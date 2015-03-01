<?php

class StatesCountriesTableSeeder extends Seeder {

    public function run()
    {
    	// Pais
    	DB::table('countries')->insert(
		    array('id' => 1, 'name' => 'Brasil', 'abbr' => 'BR')
		);

		// Estados
		DB::unprepared("INSERT INTO states (id, name, abbr, country_id, created_at, updated_at) VALUES
		(1, 'Acre', 'AC', 1, NOW() ,NOW() ),
		(2, 'Alagoas', 'AL', 1, NOW() ,NOW() ),
		(3, 'Amazonas', 'AM', 1, NOW() ,NOW() ),
		(4, 'Amapá', 'AP', 1, NOW() ,NOW() ),
		(5, 'Bahia', 'BA', 1, NOW() ,NOW() ),
		(6, 'Ceará', 'CE', 1, NOW() ,NOW() ),
		(7, 'Distrito Federal', 'DF', 1, NOW() ,NOW() ),
		(8, 'Espírito Santo', 'ES', 1, NOW() ,NOW() ),
		(9, 'Goiás', 'GO', 1, NOW() ,NOW() ),
		(10, 'Maranhão', 'MA', 1, NOW() ,NOW() ),
		(11, 'Minas Gerais', 'MG', 1, NOW() ,NOW() ),
		(12, 'Mato Grosso do Sul', 'MS', 1, NOW() ,NOW() ),
		(13, 'Mato Grosso', 'MT', 1, NOW() ,NOW() ),
		(14, 'Pará', 'PA', 1, NOW() ,NOW() ),
		(15, 'Paraíba', 'PB', 1, NOW() ,NOW() ),
		(16, 'Pernambuco', 'PE', 1, NOW() ,NOW() ),
		(17, 'Piauí', 'PI', 1, NOW() ,NOW() ),
		(18, 'Paraná', 'PR', 1, NOW() ,NOW() ),
		(19, 'Rio de Janeiro', 'RJ', 1, NOW() ,NOW() ),
		(20, 'Rio Grande do Norte', 'RN', 1, NOW() ,NOW() ),
		(21, 'Rondônia', 'RO', 1, NOW() ,NOW() ),
		(22, 'Roraima', 'RR', 1, NOW() ,NOW() ),
		(23, 'Rio Grande do Sul', 'RS', 1, NOW() ,NOW() ),
		(24, 'Santa Catarina', 'SC', 1, NOW() ,NOW() ),
		(25, 'Sergipe', 'SE', 1, NOW() ,NOW() ),
		(26, 'São Paulo', 'SP', 1, NOW() ,NOW() ),
		(27, 'Tocantins', 'TO', 1, NOW() ,NOW())");

		$this->command->info('Estados cadastrados!');
	}
}
