<?php 
class CategoryComposer {
  
  /**
   * compose method
   * Busca as categorias para a sidebar do front-end
   *
   * @access public
   * @param Array $view
   * @return Category
   * @since 1.0
   * @version 1.0
   * @author Patrick Maciel
   */
  public static function compose($view)
  {
    $categories = Category::getNavigation();
    $view->with('categories', $categories);

  }
}