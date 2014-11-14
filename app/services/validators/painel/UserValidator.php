<?php
namespace App\Services\Validators\Painel;
use App\Services\Validators\Validator;

class UserValidator extends Validator {

  public static $rules = array(
    'email' => 'required|email|unique:users',
    'password' => 'required',
    'name' => 'required',
    'last_name' => 'required'
  );

  public static $messages = array(
    'email.required' => 'E-mail é obrigatório',
    'email.email' => 'E-mail inválido',
    'email.unique' => 'Esse e-mail já foi cadastrado.',
    'password.required' => 'Senha é obrigatória.',
    'name.required' => 'Nome é obrigatório',
    'last_name.required' => 'Sobrenome é obrigatório'
  );

}