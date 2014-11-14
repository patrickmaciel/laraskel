<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class TelephoneOperatorValidator extends Validator {
  
  public static $rules = array(
    'name' => 'required|min:2',
    'description' => 'required'
  );

  public static $messages = array(
    'name.required' => 'Nome é obrigatório.',
    'name.min' => 'Nome deve ter no mínimo :min caracteres.',
    'description.required' => 'Descrição é obrigatória.'
  );
  
}