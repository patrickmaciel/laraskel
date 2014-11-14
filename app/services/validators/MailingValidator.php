<?php
namespace App\Services\Validators;

class MailingValidator extends Validator {

  public static $rules = array(
    'email' => 'required|email',
    'name' => 'required',
    'born_date' => 'required|date_format:"d/m/Y"',
    'phone' => 'required'
  );

  public static $messages = array(
    'email.required' => 'E-mail é obrigatório',
    'email.email' => 'E-mail inválido',
    'name.required' => 'Nome é obrigatório',
    'born_date.required' => 'Data de Nascimento é obrigatória',
    'born_date.date_format()' => 'Data de Nascimento inválida',
    'phone.required' => 'Telefone é obrigatório'
  );

}
