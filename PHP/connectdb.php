<?php
/**
 * Created by PhpStorm.
 * User: 8570p
 * Date: 17/02/2016
 * Time: 22:20
 */


$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>