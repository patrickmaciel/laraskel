<?php
namespace Libraries;

use Illuminate\Support\Facades\HTML;
use Illuminate\Support\Facades\URL;

class Image
{

  /**
   * lightbox2 method
   * Gera o link com a imagem para o lightbox 2
   *
   * @access public
   * @param String $name of image
   * @param String $prefix
   * @param Datetime $created_at
   * @return void
   * @since 1.0
   * @version 1.0
   * @author Patrick Maciel
   */
  public static function lightbox2($name, $prefix, $folder, $created_at, $gallery = null, $imgProperties = array(), $linkProperties = array())
  {
    $url  = URL::to('/uploads/' . $folder . date('/Y/m/d/', strtotime($created_at)) . 'resize_' . $name);
    $img  = HTML::image('/uploads/' . $folder . date('/Y/m/d/', strtotime($created_at)) . $prefix . '_' . $name, $name, $imgProperties);

    if ($gallery != null) {
      $link = HTML::link($url, '::replace::', array_merge($linkProperties, array('data-lightbox' => $gallery)));
    } else {
      $link = HTML::link($url, '::replace::', array_merge($linkProperties, array('data-lightbox' => $name)));
    }

    return str_replace('::replace::', $img, $link);
  }

  /**
   * lightbox2_original method
   * Gera o link com a imagem original para o lightbox 2
   *
   * @access public
   * @param String $name of image
   * @param Datetime $created_at
   * @param String $folder pasta onde a imagem está
   * @param Array $imgProperties propriedades da imagem
   * @param Array $gallery propriedades da galeria (lightbox)
   * @param Array $linkProperties propriedades do link
   * @return void
   * @since 1.1
   * @version 1.0
   * @author Patrick Maciel <patrickmaciel.info@gmail.com>
   */
  public static function lightbox2_original($name, $folder, $created_at, $gallery = null, $imgProperties = array(), $linkProperties = array())
  {
    $url = URL::to('/uploads/' . $folder . date('/Y/m/d/', strtotime($created_at)) . $name);
    $img = HTML::image('/uploads/' . $folder . date('/Y/m/d/', strtotime($created_at)) . $name, $name, $imgProperties);

    if ($gallery != null) {
      $link = HTML::link($url, '::replace::', array_merge($linkProperties, array('data-lightbox' => $gallery)));
    } else {
      $link = HTML::link($url, '::replace::', array_merge($linkProperties, array('data-lightbox' => $name)));
    }

    return str_replace('::replace::', $img, $link);
  }

  /**
   * thumbLink method
   * Gera thumbs com links específicos sem lighbox
   *
   * @access public
   * @param String $name of image
   * @param String $prefix
   * @param Datetime $created_at
   * @return void
   * @since 1.0
   * @version 1.0
   * @author Patrick Maciel
   */
  public static function thumbLink($route, $name, $folder, $created_at, $imgProperties = array(), $linkProperties = array())
  {

    if ($route == null) {

      $img = HTML::image('/uploads/' . $folder . date('/Y/m/d/', strtotime($created_at)) . 'thumb_' . $name, $name, $imgProperties);

      return $img;

    }

    $url = URL::to($route);
    $img = HTML::image('/uploads/' . $folder . date('/Y/m/d/', strtotime($created_at)) . 'thumb_' . $name, $name, $imgProperties);

    $link = HTML::link($url, '::replace::', array_merge($linkProperties));

    return str_replace('::replace::', $img, $link);

  }

  /**
   * load method
   * Carrega qualquer imagem
   *
   * @access public
   * @param String $name of image
   * @param String $prefix
   * @param Datetime $created_at
   * @return void
   * @since 1.0
   * @version 1.0
   * @author Patrick Maciel
   */
  public static function load($prefix = 'thumb', $name, $folder, $created_at, $imgProperties = array())
  {

    return HTML::image('/uploads/' . $folder . date('/Y/m/d/', strtotime($created_at)) . $prefix . '_' . $name, $name, $imgProperties);

  }

  /**
   * url method
   * Retorna a URL da imagem
   *
   * @access public
   * @param String $name of image
   * @param String $prefix
   * @param Datetime $created_at
   * @return void
   * @since 1.0
   * @version 1.0
   * @author Patrick Maciel
   */
  public static function url($prefix = 'thumb', $name, $folder, $created_at, $imgProperties = array())
  {
    if ($prefix == "") {
      return '/uploads/' . $folder . date('/Y/m/d/', strtotime($created_at)) . $name;
    }

    return '/uploads/' . $folder . date('/Y/m/d/', strtotime($created_at)) . $prefix . '_' . $name;

  }

}
