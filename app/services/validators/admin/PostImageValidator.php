<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class PostImageValidator extends Validator {

  public static $rules = array(
    'post_id' => 'required|integer',
    'name' => 'image'
  );

  public static $messages = array(
    'post_id.required' => 'Campo obrigatório.',
    'post_id.integer' => 'Post inválido.',
    'name.image' => 'Imagem inválida.'
  );

}