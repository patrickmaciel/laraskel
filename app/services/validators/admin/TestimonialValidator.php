<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class TestimonialValidator extends Validator {
  
  public static $rules = array(
    'user_id' => 'required|integer',
    'description' => 'required'
  );

  public static $messages = array(
    'user_id.required' => 'Usuário é obrigatório',
    'user_id.integer' => 'Usuário inválido',
    'description.required' => 'Descrição é obrigatória.'
  );
  
}