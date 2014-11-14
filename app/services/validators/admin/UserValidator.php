<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class UserValidator extends Validator {

  public static $rules = array(
    'group_id' => 'required|numeric',
    'email' => 'required|email|unique:users',
    'password' => 'required',
    'name' => 'required',
    'last_name' => 'required',
    'active' => 'required'
  );

  public static $messages = array(
    'group_id.required' => 'Grupo é obrigatório.',
    'group_id.numeric' => 'Grupo inválido',
    'email.required' => 'E-mail é obrigatório',
    'email.email' => 'E-mail inválido',
    'email.unique' => 'Esse e-mail já foi cadastrado.',
    'password.required' => 'Senha é obrigatória.',
    'name.required' => 'Nome é obrigatório',
    'last_name.required' => 'Sobrenome é obrigatório',
    'active.required' => 'Ativo é obrigatório'
  );

}