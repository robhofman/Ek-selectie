<?php
$mysqli = new mysqli("10.81.0.4", "sql_1004", "wYfVRdGr", "goudenduivels_sporza_be");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


/* Select queries return a resultset */
if ($result = $mysqli->query("SELECT * FROM selectiemaker_inzendingen")) {
    printf("Select returned %d rows.\n", $result->num_rows);

    $rowInzendingen = mysqli_fetch_array($result, MYSQLI_NUM);
    printf ("%s (%s)\n", $rowInzendingen[0], $rowInzendingen[1]);


    /* free result set */
    $result->close();
}

if ($result = $mysqli->query("SELECT * FROM selectiemaker_spelers")) {
    printf("Select returned %d rows.\n", $result->num_rows);

    $rowSpelers = mysqli_fetch_array($result, MYSQLI_NUM);
    printf ("%s %s %s\n", $rowSpelers[0], $rowSpelers[1], $rowSpelers[2]);



    /* free result set */
    $result->close();
}

array_push($rowInzendingen, $rowSpelers);

echo json_encode($rowInzendingen);


$mysqli->close();

//// include 'dbconnect.php';
//// $q1 = 'SELECT id, naam, aantal FROM ek_spelers';
//// $result1 = $db->query($q1);
//
//// $q2 = 'SELECT totaal FROM ek_inzendingen';
//// $result2 = $db->query($q2);
//
//// $encode = array();
//
//// while($row = mysqli_fetch_assoc($result1)) {
////    $encode[] = $row;
//// }
//
//// foreach($encode as $key => $value){
//// 	echo'<p>'.$value.'</p><br>';
//// }
//
//include 'dbconnect.php';
//
//
//$sql = 'SELECT * FROM selectiemaker_inzendingen';
//$result = $db->query($sql);
//$json1 = mysqli_fetch_all($result, MYSQLI_ASSOC);
//
//
////$sql2 = 'SELECT id, naam, aantal FROM selectiemaker_spelers';
////$result2 = $db->query($sql2);
////
////array_push($json1,mysqli_fetch_all($result2, MYSQLI_ASSOC));
//echo "Hier kom ik";
//echo json_encode($json1);
//$db->close();
//?>