<?php
namespace Libraries;

class Field {

  /**
   * active method
   * Retorna se o status (boolean) corresponde a 
   * ativo ou inativo
   *
   * @access public
   * @param Boolean $active - status (true/false/1/0)
   * @return String
   * @since 1.0
   * @version 1.0
   * @author Patrick Maciel
   */
  public static function active($active)
  {
    if ($active) {
      return 'Sim';
    }

    return 'Não';
  }
}