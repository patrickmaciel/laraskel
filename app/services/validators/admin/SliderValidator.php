<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class SliderValidator extends Validator {

  public static $rules = array(
    'image' => 'image',
    'title' => 'required'
  );

  public static $messages = array(
    'image.image' => 'Imagem inválida.',
    'title.required' => 'Campo obrigatório.'
  );

}