<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class StateValidator extends Validator {

  public static $rules = array(
    'name' => 'required|min:2',
    'abbr' => 'required|min:2'
  );

  public static $messages = array(
    'name.required' => 'Nome é obrigatório.',
    'name.min' => 'Nome deve ter no mínimo :min caracteres.',
    'abbr.required' => 'Abrevição é obrigatória.',
    'abbr.min' => 'Abrevição deve ter no mínimo :min caracteres.'
  );

}