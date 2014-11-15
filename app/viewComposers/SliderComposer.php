<?php 
class SliderComposer {
  
  /**
   * compose method
   * Busca o slider da home
   *
   * @access public
   * @param Array $view
   * @return Slider
   * @since 1.0
   * @version 1.0
   * @author Patrick Maciel
   */
  public static function compose($view)
  {
    $slider = Slider::getActive(false, false);
    $view->with('slider', $slider);

  }
}