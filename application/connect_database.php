<?php
$access_database = [
    'host' => 'localhost',
    'user' => 'phpmyadmin',
    'passwd' => 'B!gBrather02',
    'dbase' => ''
];

$connection = new mysqli($access_database['host'], $access_database['user'], $access_database['passwd'], $access_database['dbase']);

if($connection->connect_error){
    die($connection->connect_error);
}
