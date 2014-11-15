<?php 
namespace Libraries;

class FormatDate {

  /**
   * format method
   * Formata uma data baseado em uma pattern informada
   *
   * @access public
   * @param String $pattern - formato da data
   * @param Date/DateTime $date - data no formato date ou datetime
   * @return String
   * @since 1.0
   * @version 1.0
   * @author Patrick Maciel
   * @todo todo
   */
  public static function format($pattern, $date)
  {
    return date($pattern, strtotime($date));
  }

}