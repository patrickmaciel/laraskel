<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class NeighborhoodValidator extends Validator {

  public static $rules = array(
    'name' => 'required|min:2',
    'city_id' => 'required|not_in:0',
  );

  public static $messages = array(
    'name.required' => 'Nome é obrigatório.',
    'name.min' => 'Nome deve conter no mínimo :min caracteres.',
    'city_id.required' => 'Cidade é obrigatória.',
    'city_id.not_in' => 'Cidade é obrigatória.'
  );

}