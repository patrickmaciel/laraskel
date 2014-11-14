<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class PageValidator extends Validator {

  public static $rules = array(
    'page_id' => 'integer',
    'slug' => 'unique:pages',
    'image' => 'image',
    'title' => 'required',
    'description' => 'required'
  );

  public static $messages = array(
    'slug.unique' => 'Título de página já existente.',
    'page.image' => 'Página inválida.',
    'image.image' => 'Imagem inválida.',
    'title.required' => 'Campo obrigatório.',
    'description.required' => 'Campo obrigatório.'
  );

}