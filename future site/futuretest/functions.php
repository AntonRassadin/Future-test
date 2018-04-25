<?php
$dbhost  = 'localhost';   
$dbname  = 'comments';  
$dbuser  = 'future';   
$dbpass  = 'password';

$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connection->connect_error) die($connection->connect_error);

function queryMysql($query)
{
    global $connection;
    $result = $connection->query($query);
    if (!$result) die($connection->error);
    return $result;
}

function sanitizeString($var)
{
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $connection->real_escape_string($var);
}


?>   