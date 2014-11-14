<?php
namespace App\Services\Validators\Admin;
use App\Services\Validators\Validator;

class ProfessionalQuestionAnswerValidator extends Validator {
  
  public static $rules = array(
    'answer' => 'required|min:2',
    'user_id' => 'required|integer',
    'professional_question_id' => 'required|integer'
  );

  public static $messages = array(
    'answer.required' => 'Resposta é obrigatória.',
    'answer.min' => 'Resposta deve ter no mínimo :min caracteres.',
    'user_id.required' => 'Usuário é obrigatório.',
    'user_id.integer' => 'Usuário inválido.',
    'professional_question_id.required' => 'Questão do Profissional é obrigatória.',
    'professional_question_id.integer' => 'Questão do Profissional inválida.'
  );
  
}