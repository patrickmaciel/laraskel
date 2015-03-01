<?php

/**
 * Return days between two dates
 * @param $date
 * @return int
 */
function days_between_dates($date)
{
    if (empty($date) or ($date == '0000-00-00')) {
        return 0;
    }

    $date1 = new DateTime();
    $date2 = new DateTime($date);

    return $date2->diff($date1)->format("%a");
}

function url_fix($url)
{
    return str_replace('http://', '', strtolower(trim($url)));
}

function dump($var, $label = 'dump')
{
    echo "<strong>{$label}</strong><pre>";
    var_dump($var);
    echo '</pre>';
}
