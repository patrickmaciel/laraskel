<?php
namespace App\Services\Validators;

class ContactValidator extends Validator {
  
  public static $rules = array(
    'full_name' => 'required',
    'phone'     => 'min:8',
    'celullar'  => 'min:8',
    'email'     => 'email',
    'message'   => 'required'
  );

  public static $messages = array(
    'full_name.required' => 'Nome é obrigatório',
    'phone.min'          => 'Telefone deve ter no mínimo :size caracteres',
    'celullar.min'       => 'Celular deve ter no mínimo :size caracteres',
    'email.email'        => 'E-mail inválido',
    'message.required'   => 'Mensagem é obrigatória'
  );

}