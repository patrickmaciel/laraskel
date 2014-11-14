<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class LandPageValidator extends Validator {

  public static $rules = array(
    'image' => 'image',
    'title' => 'required'
    // 'description' => 'required'
  );

  public static $messages = array(
    'image.image' => 'Imagem inválida.',
    'title.required' => 'Campo obrigatório.'
    // 'description.required' => 'Campo obrigatório.'
  );

}