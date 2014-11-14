<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class PageImageValidator extends Validator {

  public static $rules = array(
    'page_id' => 'required|integer',
    'name' => 'image'
  );

  public static $messages = array(
    'page_id.required' => 'Campo obrigatório.',
    'page_id.integer' => 'Página inválida.',
    'name.image' => 'Imagem inválida.'
  );

}