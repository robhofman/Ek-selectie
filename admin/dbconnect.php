<?php
/**
 * Created by PhpStorm.
 * User: 8570p
 * Date: 23/02/2016
 * Time: 10:04
 */


$host = "10.81.0.4";
$username = "sql_1004";
$pass = "wYfVRdGr";
$dbname = "goudenduivels_sporza_be";

$db = new mysqli($host, $username, $pass, $dbname);

if (mysqli_connect_errno()) {
    die ('Could not open a mysql connection: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
}

echo "connectione";

?>