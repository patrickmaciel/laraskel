<?php
namespace App\Services\Validators;

class NewsletterValidator extends Validator {

  public static $rules = array(
    'email' => 'required|email|unique:newsletters',
    'name' => 'required'
  );

  public static $messages = array(
    'email.required' => 'E-mail é obrigatório',
    'email.email' => 'E-mail inválido',
    'email.unique' => 'E-mail já cadastrado em nosso sistema',
    'name.required' => 'Nome é um campo obrigatório.'
  );

}
