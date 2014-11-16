<?php
namespace Admin;

use BaseController;
use View;
use Input;
use User;
use Session;
use Hash;
use AclGroup;
use Redirect;
use Validators\Admin\UserValidator;

/**
 * Class UsersController
 *
 * @package Admin
 * @author Patrick Maciel <patrickmaciel.info@gmail.com>
 */
class UsersController extends BaseController {

  /**
   * List all users
   * @return mixed
   */
  public function index()
  {
    $users = User::paginate(20);

    return View::make('admin.users.index', compact('users'))
      ->with('title', 'Usuários');
  }

  /**
   * Form for create a new user
   * @return mixed
   */
  public function create()
  {
    $groups = AclGroup::getList(true);

    return View::make('admin.users.create', compact('groups'))
      ->with('title', 'Novo Usuário');
  }

  /**
   * Store a new user
   * @return mixed
   */
  public function store()
  {
    $validator = new UserValidator;
    if ($validator->passes()) {

      $user = new User;
      $user->email = Input::get('email');
      $user->password = Hash::make(Input::get('password'));

      if ($user->save()) {
        if (Input::has('group_id')) {
          $user->groups()->sync(Input::get('group_id'));
        }

        Session::flash('success', 'Usuário salvo com sucesso');
        return Redirect::route('admin.users.index');
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
   * Show and user by id
   * @param  integer $id User id
   * @return mixed
   */
  public function show($id)
  {
    $user = User::findOrFail($id);

    return View::make('admin.users.show', compact('user'))
      ->with('title', 'Visualizando usuário: ' . $user->email);
  }

  /**
   * Show form for edit an user
   * @param  integer $id User id
   * @return mixed
   */
  public function edit($id)
  {
    $user = User::getById($id);
    $groups = AclGroup::getList(true);

    return View::make('admin.users.edit', compact('user', 'groups'))
      ->with('title', 'Editar usuário: ' . $user->email);
  }

  /**
   * Update an user by id
   * @return mixed
   */
  public function update($id)
  {
    $validator = new UserValidator;
    if (Input::get('email') == Input::get('old_email')) {
      UserValidator::$rules['email'] = 'required|email';
    } else {
      UserValidator::$rules['email'] = 'required|email|unique:users,email,' . Input::get('id');
    }

    if ($validator->passes()) {

      $user = User::find($id);
      if (empty($user)) {
        Session::flash('info', 'O Usuário requisitado não existe');
        return Redirect::back()
          ->withInput();
      }

      $user->email = Input::get('email');

      if (!empty(Input::get('password'))) {
        $user->password = Hash::make(Input::get('password'));
      }

      if ($user->save()) {
        if (Input::has('group_id')) {
          $user->groups()->sync(Input::get('group_id'));
        }

        Session::flash('success', 'Usuário atualizado com sucesso');
        return Redirect::route('admin.users.index');
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
   * Delete an user by id
   * @param  integer $id User id
   * @return mixed
   */
  public function destroy($id)
  {
    $user = User::findOrFail($id);

    if ($user->delete()) {
      Session::flash('success', 'Usuário excluído com sucesso');
      return Redirect::back();
    }

    Session::flash('error', 'Ocorreu um erro ao excluir o usuário');
    return Redirect::back();
  }

}
