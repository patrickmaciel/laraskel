<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class PostTypeValidator extends Validator {

  public static $rules = array(
    'name' => 'required'
  );

  public static $messages = array(
    'name.required' => 'Campo obrigatório.'
  );

}