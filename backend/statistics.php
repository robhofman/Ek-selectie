<?php
// include 'dbconnect.php';
// $q1 = 'SELECT id, naam, aantal FROM ek_spelers';
// $result1 = $db->query($q1);

// $q2 = 'SELECT totaal FROM ek_inzendingen';
// $result2 = $db->query($q2);

// $encode = array();

// while($row = mysqli_fetch_assoc($result1)) {
//    $encode[] = $row;
// }

// foreach($encode as $key => $value){
// 	echo'<p>'.$value.'</p><br>';
// }

include 'dbconnect.php';
$sql = "SELECT * FROM selectiemaker_inzendingen";
if ($db->query($sql) === TRUE) { echo "Query gelukt"; } else { echo "Query mislukt" . $db->error; }

//$sql = 'SELECT id, totaal FROM selectiemaker_inzendingen WHERE id=1';
//$db->query($sql);

$result = mysql_query("SELECT * FROM selectiemaker_inzendingen");

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    printf("ID: %s  Name: %s", $row["id"], $row["totaal"]);
    echo $row["id"].$row["totaal"];
}

//$json1 = mysqli_fetch_all($result, MYSQLI_ASSOC);
//
//
//$sql2 = 'SELECT id, naam, aantal FROM selectiemaker_spelers';
//$result2 = $db->query($sql2);
//
//array_push($json1,mysqli_fetch_all($result2, MYSQLI_ASSOC));
//echo "Hier kom ik";
//echo json_encode($json1);
?>