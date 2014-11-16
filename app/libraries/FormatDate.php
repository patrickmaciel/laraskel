<?php
namespace Libraries;

use DateTime;

class FormatDate {

  /**
   * format method
   * Formata uma data baseado em uma pattern informada
   *
   * @access public
   * @param String $format - formato da data
   * @param Date/DateTime $date - data no formato date ou datetime
   * @return String
   * @since 1.0
   * @version 1.0
   * @author Patrick Maciel
   * @todo todo
   */
  public static function format($format, $date)
  {
    $d = DateTime::createFromFormat($format, $date);
    if ($d && $d->format($format) == $date) {
      return date($format, strtotime($date));
    }

    return '-';
  }

}
