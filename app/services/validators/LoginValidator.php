<?php
namespace App\Services\Validators;

class LoginValidator extends Validator {

  public static $rules = array(
    'email' => 'required|email',
    'password' => 'required'
  );

  public static $messages = array(
    'email.required' => 'E-mail é obrigatório',
    'email.email' => 'E-mail inválido',
    'email.unique' => 'Já existe um cadastro com este e-mail',
    'password.required' => 'Senha é obrigatória.'
  );

}
