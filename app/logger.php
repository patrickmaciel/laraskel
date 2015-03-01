<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/* ----------------------------------------------------------------------------
| Database logger
| -----------------------------------------------------------------------------
*/
if (Config::get('app.debug')) {
  Event::listen('illuminate.query', function($query, $bindings, $time, $name) {

    $data = compact('bindings', 'time', 'name');

    // Format binding data for sql insertion
    foreach ($bindings as $i => $binding) {
      if ($binding instanceof \DateTime) {
        $bindings[$i] = $binding->format('\'Y-m-d H:i:s\'');
      } else if (is_string($binding)) {
        $bindings[$i] = "'$binding'";
      }
    }

    // Insert bindings into query
    $query = str_replace(array('%', '?'), array('%%', '%s'), $query);
    $query = vsprintf($query, $bindings);
    $log = new Logger('sql');
    // $log->pushHandler(new StreamHandler(storage_path().'/logs/sql-' . date('Y-m-d') . '.log', Logger::INFO));
    $log->pushHandler(new StreamHandler(storage_path().'/logs/query.log', Logger::INFO));

    // add records to the log
    $log->addInfo($query, $data);
  });
}
