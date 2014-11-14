<?php
namespace App\Services\Validators;
use App\Services\Validators\Validator;

class PromotionalValidator extends Validator {

  public static $rules = array(
    'email' => 'required|email|unique:users',
    'name' => 'required',
    'last_name' => 'required'
  );

  public static $messages = array(
    'email.required' => 'E-mail é obrigatório',
    'email.email' => 'E-mail inválido',
    'email.unique' => 'Esse e-mail já foi cadastrado.',
    'name.required' => 'Nome é obrigatório',
    'last_name.required' => 'Sobrenome é obrigatório'
  );

}