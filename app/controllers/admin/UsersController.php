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
    $users = User::all();

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

      if ($user->save) {
        $user->groups()->sync($user['group_id']);

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

}
