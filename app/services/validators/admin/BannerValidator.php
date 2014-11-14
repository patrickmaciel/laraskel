<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class BannerValidator extends Validator {

  public static $rules = array(
    'banner_type_id' => 'required|integer',
    'user_id' => 'required|integer',
    'name' => 'required|min:2',
    'image' => 'required|image'
  );

  public static $messages = array(
    'banner_type_id.required' => 'Tipo do Banner é obrigatório.',
    'banner_type_id.integer' => 'Tipo do Banner inválido.',
    'user_id.required' => 'Usuário é obrigatório.',
    'user_id.integer' => 'Usuário inválido.',
    'name.required' => 'Nome é obrigatório.',
    'name.min' => 'Nome deve ter no mínimo :min caracteres.',
    'image.required' => 'Imagem do Banner é obrigatória.',
    'image.image' => 'Imagem inválida.'
  );

}
