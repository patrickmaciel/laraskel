<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class ProfessionalPhoneValidator extends Validator {

  public static $rules = array(
    'phone'                 => 'required|min:8',
    'telephone_operator_id' => 'required|integer'
  );

  public static $messages = array(
    'phone.required'                 => 'Telefone obrigatório.',
    'phone.min'                      => 'Telefone deve ter no mínimo :min caracteres.',
    'telephone_operator_id.required' => 'Operadora do Telefone é obrigatória.',
    'telephone_operator_id.integer'  => 'Operadora do Telefone inválida.'
  );

}