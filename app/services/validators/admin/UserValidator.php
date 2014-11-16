<?php
namespace Validators\Admin;
use Validators\Validator;

class UserValidator extends Validator {

  public static $rules = array(
    'group_id' => 'required',
    'email' => 'required|email|unique:users',
    'password' => 'sometimes|required'
  );

  public static $messages = array(
    'group_id.required' => 'Grupo é obrigatório.',
    'email.required' => 'E-mail é obrigatório',
    'email.email' => 'E-mail inválido',
    'email.unique' => 'Esse e-mail já foi cadastrado.',
    'password.required' => 'Senha é obrigatória.'
  );

}
