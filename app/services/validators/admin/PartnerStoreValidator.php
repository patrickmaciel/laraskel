<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class PartnerStoreValidator extends Validator {
  
  public static $rules = array(
    'neighborhood_id' => 'required|integer',
    'name' => 'required|min:2',
    'description' => 'required'
  );

  public static $messages = array(
    'name.required' => 'Nome é obrigatório.',
    'name.min' => 'Nome deve ter no mínimo :min caracteres.',
    'description.required' => 'Descrição é obrigatória.',
    'neighborhood_id.required' => 'Bairro é obrigatório.',
    'neighborhood_id.integer' => 'Bairro inválido'
  );
  
}