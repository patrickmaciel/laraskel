<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class ProfessionalValidator extends Validator {

  public static $rules = array(
    'user_id' => 'required|integer',
    'profession_id' => 'required|integer',
    'neighborhood_id' => 'required|integer',
    'name' => 'required|min:2'
  );

  public static $messages = array(
    'user_id.required' => 'Usuário é obrigatório.',
    'user_id.integer' => 'Usuário inválido.',
    'profession_id.required' => 'Profissão é obrigatória.',
    'profession_id.integer' => 'Profissão inválida.',
    'neighborhood_id.required' => 'Bairro é obrigatório.',
    'neighborhood_id.integer' => 'Bairro inválido.',
    'name.required' => 'Nome é obrigatório.',
    'name.min' => 'Nome deve conter no mínimo :min caracteres.'
  );

}