<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class CityValidator extends Validator {

  public static $rules = array(
    'state_id' => 'required|integer',
    'name' => 'required|min:2'
  );

  public static $messages = array(
    'name.required' => 'Nome é obrigatório.',
    'name.min' => 'Nome deve conter no mínimo :min caracteres.',
    'state_id.required' => 'Estado é obrigatório.',
    'state_id.integer' => 'Estado inválido.'
  );

}