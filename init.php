<?php

/* This is a init file which should be required on every other file to be
   sure that one will be able to use composer tools... (e.g. logger, csv)
*/
require_once __DIR__.'/vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

// Create the logger
$logger = new Logger('my_logger');
// Now add some handlers
$logger->pushHandler(new StreamHandler(__DIR__.'/my_app.log', Logger::DEBUG));
$logger->pushHandler(new FirePHPHandler());

// You can now use your logger
$logger->addInfo('My logger is now ready');


//DOC : https://github.com/thephpleague/csv/blob/master/docs/index.md
use League\Csv\Reader;
//use League\Csv\Writer;

$reader = Reader::createFromPath(__DIR__.'/data.csv');
foreach ($reader as $index => $row) {
    //do something meaningful here with $row !!
    //$row is an array where each item represent a CSV data cell
    //$index is the CSV row index
    var_dump($row);
}
