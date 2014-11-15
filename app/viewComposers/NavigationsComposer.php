<?php 
class NavigationsComposer {
  
  /**
   * compose method
   * Renderiza o menu do header
   *
   * @access public
   * @param Array $view
   * @return Page
   * @since 1.0
   * @version 1.0
   * @author Patrick Maciel
   */
  public static function compose($view)
  {
    $pages = Page::getNavigation();
    $view->with('pages', $pages);

  }
}