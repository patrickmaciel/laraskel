<?php
namespace App\Services\Image;

use WideImage\WideImage;
// use Config, File, Log;

class Upload {

  /**
   * upload method
   * Upload de uma única imagem
   *
   * @access public
   * @param UploadFile $image
   * @return String
   * @since 1.0
   * @version 1.0
   * @author Patrick Maciel
   * @todo Adaptar para fazer múltiplo upload futuramente
   */
  public static function save($image, $configs, $old = null, $date = null)
  {

    if ($image != null) {
      if ($date == null) {
        $date = date('Y/m/d', time());
      } else {
        $date = date('Y/m/d', strtotime($date));
      }

      $public_path = str_replace('\\', '/', public_path());
      $destinationPath = 'uploads/' . $configs['folder'] . '/' . $date . '/';

      $imagename = $image->getClientOriginalName();
      $imagename = sha1($imagename . time());
      $extension =$image->getClientOriginalExtension();
      $imagename.= ".$extension";

      if (!is_dir($public_path . '/' . $destinationPath)) {
        mkdir($public_path . '/' . $destinationPath, 0777, true);
      }

      // Old upload method (simple)
      // $uploadSuccess = $image->move($destinationPath, $imagename);

      if (in_array($extension, array('jpg', 'jpeg', 'gif', 'JPEG', 'GIF', 'JPG'))) {
        $compression_quality = 90;
      } else {
        $compression_quality = 9;
      }

      // Validando o formato da imagem
      $img_accept = array('gif', 'png', 'jpg', 'jpeg', 'gd', 'gd2', 'wbmp', 'xbm', 'xpm', 'GIF', 'PNG', 'JPG', 'JPEG', 'GD', 'GD2', 'WBMP', 'XBM', 'XPM');

      if(isset($extension) && ($extension != null) && in_array($extension, $img_accept)) {

        if (isset($configs['original']) AND $configs['original']) {

          $wide = WideImage::load($image->getPathname());
          $wide->saveToFile($destinationPath . $imagename, $compression_quality);

        } else {

          if (isset($configs['sizes'])) {
            foreach ($configs['sizes'] as $key => $size) {

              $wide = WideImage::load($image->getPathname());

              if ($key == 'resize') {
                $transform    = $wide->resize($size['width'], $size['height'], $size['fit']);
              } else {
                $transform    = $wide->resize($size['width'], $size['height'], $size['fit'])->crop('center', 'center', $size['width'], $size['height']);
              }

              $transform->saveToFile($destinationPath . $key . '_' . $imagename, $compression_quality);

            }
          } else {
            $wide = WideImage::load($image->getPathname());           
            $wide->saveToFile($destinationPath . $key . '_' . $imagename, $compression_quality);
          }

        }

        if ($old != null) {
          static::deleteImage($image, $configs['folder'], $date);
        }

        return $imagename;

      } else {

        return false;

      }
    } else {

      // Se há uma imagem já cadastrada, mantém ela.
      if ($old != null) {
        return $old;
      }

      return null;
    }


  }

  /**
   * saveCustom method
   * Upload de uma única imagem
   *
   * @access public
   * @param UploadFile $image
   * @return String
   * @since 1.0
   * @version 1.0
   * @author Patrick Maciel
   * @todo Adaptar para fazer múltiplo upload futuramente
   */
  public static function saveCustom($image, $configs, $old = null, $date = null)
  {

    if ($image != null) {
      if ($date == null) {
        $date = date('Y/m/d', time());
      } else {
        $date = date('Y/m/d', strtotime($date));
      }

      $public_path = str_replace('\\', '/', public_path());
      $destinationPath = 'uploads/' . $configs['folder'] . '/' . $date . '/';

      $imagename = $image->getClientOriginalName();
      $imagename = sha1($imagename . time());
      $extension =$image->getClientOriginalExtension();
      $imagename.= ".$extension";

      if (!is_dir($public_path . '/' . $destinationPath)) {
        mkdir($public_path . '/' . $destinationPath, 0777, true);
      }

      // Old upload method (simple)
      // $uploadSuccess = $image->move($destinationPath, $imagename);

      if (in_array($extension, array('jpg', 'jpeg', 'gif', 'JPEG', 'GIF', 'JPG'))) {
        $compression_quality = 75;
      } else {
        $compression_quality = 8;
      }

      // Validando o formato da imagem
      $img_accept = array('gif', 'png', 'jpg', 'jpeg', 'gd', 'gd2', 'wbmp', 'xbm', 'xpm', 'GIF', 'PNG', 'JPG', 'JPEG', 'GD', 'GD2', 'WBMP', 'XBM', 'XPM');

      if(isset($extension) && ($extension != null) && in_array($extension, $img_accept)) {

        $wide = WideImage::load($image->getPathname());

        // Original
        $wide->saveToFile($destinationPath . 'original_' . $imagename, $compression_quality);

        // Resize
        $transform    = $wide->resize($configs['crop']['width'], $configs['crop']['height'], $configs['crop']['fit']);
        $transform->saveToFile($destinationPath . 'resize_' . $imagename, $compression_quality);

        // Crop
        $transform    = $wide->resize($configs['crop']['width'], $configs['crop']['height'], $configs['crop']['fit'])->crop('center', 'center', $configs['crop']['width'], $configs['crop']['height']);
        $transform->saveToFile($destinationPath . 'crop_' . $imagename, $compression_quality);

        // Thumb
        $transform    = $wide->resize($configs['thumb']['width'], $configs['thumb']['height'], $configs['thumb']['fit'])->crop('center', 'center', $configs['thumb']['width'], $configs['thumb']['height']);
        $transform->saveToFile($destinationPath . 'thumb_' . $imagename, $compression_quality);

        if ($old != null) {
          static::deleteImage($image, $configs['folder'], $date);
        }

        // echo $resized->output('jpg', 70);
        // echo $croped->output('jpg', 70);
        // echo $thumbed->output('jpg', 70);

        return $imagename;

      } else {

        return false;

      }
    } else {

      // Se há uma imagem já cadastrada, mantém ela.
      if ($old != null) {
        return $old;
      }

      return null;
    }


  }

  /**
   * deleteImage method
   * Deleta uma imagem, seguindo as convenções atuais
   *
   * @access public
   * @param String $image name
   * @param String $folder
   * @param Datetime $created_at
   * @return void
   * @since 1.0
   * @version 1.0
   * @author Patrick Maciel
   */
  public static function deleteImage($image, $folder, $created_at)
  {

    $date = date('Y/m/d', strtotime($created_at));

    $public_path = str_replace('\\', '/', public_path());
    $destinationPath = 'uploads/' . $folder . '/' . $date . '/';

    if (file_exists($public_path . '/' . $destinationPath . "resize_" . $image)) {
      unlink($public_path . '/' . $destinationPath . "resize_" . $image);
    }

    if (file_exists($public_path . '/' . $destinationPath . "crop_" . $image)) {
      unlink($public_path . '/' . $destinationPath . "crop_" . $image);
    }

    if (file_exists($public_path . '/' . $destinationPath . "thumb_" . $image)) {
      unlink($public_path . '/' . $destinationPath . "thumb_" . $image);
    }

    return true;

  }

  /**
   * Upload a file
   * @param  File     $file       Symfony File
   * @param  String   $old        old file
   * @return boolean             
   */
  public static function file($file, $old = null)
  {
    $destinationPath = public_path() . '/uploads/land_pages/files/';
    $filename        = '';

    $file            = $file;
    $filename        = str_random(6) . '_' . $file->getClientOriginalName();
    $uploadSuccess   = $file->move($destinationPath, $filename);

    if (isset($old)) {
      self::deleteFile($old);
    }

    if ($uploadSuccess) {
      return $filename;
    }

    return false;
  }

  /**
   * Delete the uploaded file
   * @param  File     $file       Symfony File
   * @return boolean             
   */
  public static function deleteFile($file)
  {
    return \File::delete(public_path() . '/uploads/land_pages/files/' . $file);
  }

}
