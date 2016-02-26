<?php
/**
 * Created by PhpStorm.
 * User: 8570p
 * Date: 26/02/2016
 * Time: 14:49
 */

include 'dbconnect.php';

$nul = 0;

$sql = "UPDATE 'selectiemaker_inzendingen' SET totaal=0";
if ($db->query($sql) === TRUE) { echo "Totaal aantal inzendingen gereset \n"; } else { echo "Error updating record: " . $db->error; }


$sql2 = "UPDATE 'selectiemaker_spelers' SET aantal=0";
if ($db->query($sql2) === TRUE) { echo "Alle spelers gereset \n"; } else { echo "Error updating record: " . $db->error; }



?>