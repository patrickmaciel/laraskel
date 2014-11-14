<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class ProfessionalQuestionValidator extends Validator {
  
  public static $rules = array(
    'title' => 'required|min:2',
    'type' => 'required'
  );

  public static $messages = array(
    'title.required' => 'Título é obrigatório.',
    'title.min' => 'Título deve ter no mínimo :min caracteres.',
    'type.required' => 'Tipo é obrigatório.'
  );
  
}