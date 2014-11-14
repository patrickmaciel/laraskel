<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class NewsletterValidator extends Validator {

  public static $rules = array(
    'email' => 'required|email|unique:newsletters',
    'name' => 'required',
    'active' => 'required'
  );

  public static $messages = array(
    'email.required' => 'Campo obrigatório.',
    'email.email' => 'E-mail inválido.',
    'email.unique' => 'E-mail já cadastrado.',
    'name.required' => 'Campo obrigatório',
    'active.required' => 'Campo obrigatório'
  );

}