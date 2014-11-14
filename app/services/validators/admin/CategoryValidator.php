<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class CategoryValidator extends Validator {

  public static $rules = array(
    'category_id' => 'integer',
    'image' => 'image',
    'name' => 'required'
  );

  public static $messages = array(
    'category_id.integer' => 'Categoria inválida.',
    'image.image' => 'Imagem inválida.',
    'name.required' => 'Campo obrigatório.',
    'active    .required' => 'Campo obrigatório.'
  );

}