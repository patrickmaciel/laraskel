<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class PostValidator extends Validator {

  public static $rules = array(
    'post_type_id' => 'required|integer',
    'slug' => 'unique:posts',
    'image' => 'image',
    'title' => 'required',
    'description' => 'required'
  );

  public static $messages = array(
    'post_type_id.required' => 'Tipo de Post é obrigatório',
    'slug.unique' => 'Título de Post já existente.',
    'image.image' => 'Imagem inválida.',
    'title.required' => 'Campo obrigatório.',
    'description.required' => 'Campo obrigatório.'
  );

}