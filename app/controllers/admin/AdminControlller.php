<?php
namespace Admin;

use BaseController;
use View;

/**
 * Class AdminController
 *
 * @author Patrick Maciel <patrickmaciel.info@gmail.com>
 * @package admin
 */
class AdminController extends BaseController
{

  /**
   * Admin Dashboard first page
   *
   * @version 1.0
   * @since 1.0
   * @return mixed
   */
  public function dashboard()
  {
    return View::make('admin.admin.dashboard')
      ->with('title', 'Painel');
  }

  public function reports()
  {
    return 'reports';
  }

  public function payments()
  {
    return 'payments';
  }

  public function destroy()
  {
    return 'destroy';
  }

  public function individuals()
  {
    return 'individuals';
  }

  public function entities()
  {
    return 'entities';
  }

  public function denied()
  {
    return 'denied';
  }

}
