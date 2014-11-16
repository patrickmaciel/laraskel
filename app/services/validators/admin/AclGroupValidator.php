<?php
namespace Validators\Admin;
use Validators\Validator;

class AclGroupValidator extends Validator {

  public static $rules = array(
    'name' => 'required|max:120',
    'description' => 'required|max:255'
  );

  public static $messages = array(
    'name.required' => 'Nome é obrigatório',
    'name.max' => 'Nome deve conter no máximo :max caracteres',
    'description.required' => 'Descrição é obrigatória',
    'description.max' => 'Descrição deve conter no máximo :max caracteres'
  );

}
