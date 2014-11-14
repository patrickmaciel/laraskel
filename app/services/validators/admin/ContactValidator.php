<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class ContactValidator extends Validator {

  public static $rules = array(
    'full_name' => 'required|max:80',
    'subject' => 'required|max:120',
    'message' => 'required',
    'answered' => 'required',
    'active' => 'required'
  );

  public static $messages = array(
    'full_name.required' => 'Campo obrigatório.',
    'full_name.max' => 'O número máximo de caracteres é :max.',
    'subject.required' => 'Campo obrigatório.',
    'subject.max' => 'O número máximo de caracteres é :max.',
    'message.required' => 'Campo obrigatório.',
    'answered.required' => 'Campo obrigatório.',
    'active.required' => 'Campo obrigatório.'
  );

}