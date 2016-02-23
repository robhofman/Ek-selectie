<?php

$mysqli = new mysqli("10.81.0.4", "sql_1004", "wYfVRdGr", "goudenduivels_sporza_be");

if (mysqli_connect_errno()) {
    die ('Could not open a mysql connection: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
}

//$sql = 'SELECT * FROM selectiemaker_inzendingen';
//$result = $db->query($sql);
//
//$json1 = mysqli_fetch_all($result, MYSQLI_ASSOC);
//
//
//$sql2 = 'SELECT id, naam, aantal FROM selectiemaker_spelers';
//$result2 = $db->query($sql2);
//
//array_push($json1,mysqli_fetch_all($result2, MYSQLI_ASSOC));
//
//
//echo json_encode($json1);

$query = mysql_query('SELECT id, naam, aantal FROM selectiemaker_spelers');

while($row = mysql_fetch_assoc($query)){
    echo $row['id'].'<br>';
    echo $row['naam'].'<br>';
    echo $row['aantal'].'<br>';
}


?>