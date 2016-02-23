<?php
include 'dbconnect.php';

$postArray = [];
$postArray = $_POST;


//var_dump($postArray);

foreach($postArray as $value){
    var_dump($value);
}

//foreach ($postArray as $value) {
//    switch($value) {
//        case 'Toby Alderweireld':
//            $stmt = $db->prepare("UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Toby Alderweireld';");
//            $stmt->execute();
//            $stmt->close();
//            break;
//        case 'Divock Origi':
//            $stmt = $db->prepare("UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Divock Origi';");
//            $stmt->execute();
//            $stmt->close();
//            break;
//        case 'Laurent Depoitre':
//            $stmt = $db->prepare("UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Laurent Depoitre';");
//            $stmt->execute();
//            $stmt->close();
//            break;
//        default:
//            echo "User ".$value." not yet in database - Or the switch statement still has to made.";
//            break;
//    }
//}

//$stmt2 = $db->prepare("UPDATE selectiemaker_inzendingen SET totaal=totaal+1 WHERE id=1;");
//$stmt2->execute();
//$stmt2->close();


//$db->close();

?>
