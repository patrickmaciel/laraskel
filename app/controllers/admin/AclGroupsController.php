<?php
namespace Admin;

use BaseController;
use View;
use Input;
use Session;
use AclGroup;
use Redirect;
use Validators\Admin\AclGroupValidator;

/**
 * Class AclGroupsController
 *
 * @package Admin
 * @author Patrick Maciel <patrickmaciel.info@gmail.com>
 */
class AclGroupsController extends BaseController {

  /**
   * List all acl_groups
   * @return mixed
   */
  public function index()
  {
    $acl_groups = AclGroup::paginate(20);

    return View::make('admin.acl_groups.index', compact('acl_groups'))
      ->with('title', 'Grupos');
  }

  /**
   * Form for create a new acl_group
   * @return mixed
   */
  public function create()
  {
    return View::make('admin.acl_groups.create')
      ->with('title', 'Novo Grupo');
  }

  /**
   * Store a new acl_group
   * @return mixed
   */
  public function store()
  {
    $validator = new AclGroupValidator;
    if ($validator->passes()) {

      $acl_group = new AclGroup;
      $acl_group->name = Input::get('name');
      $acl_group->description = Input::get('description');
      $acl_group->active = Input::get('active');

      if ($acl_group->save()) {
        if (Input::has('group_id')) {
          $acl_group->groups()->sync(Input::get('group_id'));
        }

        Session::flash('success', 'Grupo salvo com sucesso');
        return Redirect::route('admin.acl_groups.index');
      }

      Session::flash('danger', 'Ocorreu um erro ao salvar o usuário');
      return Redirect::back()
        ->withInput();
    }

    Session::flash('warning', 'Ocorreram errors de validação');
    return Redirect::back()
      ->withInput()
      ->withErrors($validator->errors);
  }

  /**
   * Show and acl_group by id
   * @param  integer $id AclGroup id
   * @return mixed
   */
  public function show($id)
  {
    $acl_group = AclGroup::findOrFail($id);

    return View::make('admin.acl_groups.show', compact('acl_group'))
      ->with('title', 'Visualizando usuário: ' . $acl_group->name);
  }

  /**
   * Show form for edit an acl_group
   * @param  integer $id AclGroup id
   * @return mixed
   */
  public function edit($id)
  {
    $acl_group = AclGroup::getById($id);
    $groups = AclGroup::getList(true);

    return View::make('admin.acl_groups.edit', compact('acl_group', 'groups'))
      ->with('title', 'Editar usuário: ' . $acl_group->name);
  }

  /**
   * Update an acl_group by id
   * @return mixed
   */
  public function update($id)
  {
    $validator = new AclGroupValidator;
    if ($validator->passes()) {

      $acl_group = AclGroup::find($id);
      if (empty($acl_group)) {
        Session::flash('info', 'O Grupo requisitado não existe');
        return Redirect::back()
          ->withInput();
      }

      $acl_group->name = Input::get('name');
      $acl_group->description = Input::get('description');
      $acl_group->active = Input::get('active');

      if ($acl_group->save()) {
        if (Input::has('group_id')) {
          $acl_group->groups()->sync(Input::get('group_id'));
        }

        Session::flash('success', 'Grupo atualizado com sucesso');
        return Redirect::route('admin.acl_groups.index');
      }

      Session::flash('danger', 'Ocorreu um erro ao atualizar o usuário');
      return Redirect::back()
        ->withInput();
    }

    Session::flash('warning', 'Ocorreram errors de validação');
    return Redirect::back()
      ->withInput()
      ->withErrors($validator->errors);
  }

  /**
   * Delete an acl_group by id
   * @param  integer $id AclGroup id
   * @return mixed
   */
  public function destroy($id)
  {
    $acl_group = AclGroup::findOrFail($id);

    if ($acl_group->delete()) {
      Session::flash('success', 'Grupo excluído com sucesso');
      return Redirect::back();
    }

    Session::flash('error', 'Ocorreu um erro ao excluir o usuário');
    return Redirect::back();
  }

}
