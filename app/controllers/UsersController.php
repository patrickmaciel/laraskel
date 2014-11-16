<?php

use Validators\LoginValidator;

class UsersController extends BaseController {

  /**
   * getLogin method
   *
   * @access public
   * @return Response
   * @since 1.0
   * @version 1.0
   * @author Patrick Maciel
   */
  public function login()
  {
    return View::make('users.login')
      ->with('title', 'Login');
  }

  /**
   * postLogin method
   *
   * @access public
   * @return Response
   * @since 1.0
   * @version 1.0
   * @author Patrick Maciel
   */
  public function verify()
  {
    $validation = new LoginValidator();
    if ($validation->passes()) {

      $credentials = array(
        "email" => Input::get("email"),
        "password" => Input::get("password")
      );

      if (Auth::attempt($credentials)) {

        Session::flash('success', 'Login efetuado com sucesso');
        return Redirect::route('admin');

      } else {

        Session::flash('error', 'Usuário e/ou senha inválidos');
        return Redirect::back()
          ->withInput();

      }

    } else {

      return View::make('user.login')
        ->with('title', 'Login')
        ->withInput()
        ->withErrors($validation->errors);

    }
  }

  /**
   * getLogout method
   *
   * @access public
   * @return Response
   * @since 1.0
   * @version 1.0
   * @author Patrick Maciel
   */
  public function logout()
  {
    Auth::logout();
    return Redirect::to('/');
  }

}
