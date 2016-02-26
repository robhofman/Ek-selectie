<?php
/**
 * Created by PhpStorm.
 * User: 8570p
 * Date: 26/02/2016
 * Time: 14:49
 */

include 'opendb.php';

$sql = "UPDATE selectiemaker_inzendingen SET totaal=0";
if ($conn->query($sql) === TRUE) { echo "Totaal aantal inzendingen gereset \n"; } else { echo "Error updating record: " . $conn->error; }


$sql2 = "UPDATE selectiemaker_spelers SET aantal=0";
if ($conn->query($sql2) === TRUE) { echo "Alle spelers gereset \n"; } else { echo "Error updating record: " . $conn->error; }


?>