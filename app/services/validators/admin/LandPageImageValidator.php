<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class LandPageImageValidator extends Validator {

  public static $rules = array(
    'land_page_id' => 'required|integer',
    'name' => 'image'
  );

  public static $messages = array(
    'land_page_id.required' => 'Campo obrigatório.',
    'land_page_id.integer' => 'Página inválida.',
    'name.image' => 'Imagem inválida.'
  );

}