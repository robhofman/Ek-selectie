<?php
include 'dbconnect.php';

$postArray = [];
$postArray = $_POST;


//var_dump($postArray);

foreach($postArray as $value){
    var_dump($value);
    switch($value){
        case 'Toby Alderweireld':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Toby Alderweireld'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Michy Batshuayi':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Michy Batshuayi'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Christian Benteke':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Christian Benteke'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Yannick Carrasco':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Yannick Carrasco'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Luis Pedro Cavanda':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Luis Pedro Cavanda'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Kevin De Bruyne':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Kevin De Bruyne'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Steven Defour':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Steven Defour'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Moussa Dembele':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Moussa Dembele'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Jason Denayer':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Jason Denayer'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Laurent Depoitre':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Laurent Depoitre'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Jean-Francois Gillet':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Jean-Francois Gillet'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Eden Hazard':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Eden Hazard'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Vincent Kompany':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Vincent Kompany'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Sven Kums':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Sven Kums'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Nicolas Lombaerts':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Nicolas Lombaerts'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Romelu Lukaku':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Romelu Lukaku'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Dries Mertens':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Dries Mertens'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Thomas Meunier':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Thomas Meunier'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Simon Mignolet':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Simon Mignolet'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Kevin Mirallas':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Kevin Mirallas'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Radja Nainggolan':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Radja Nainggolan'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Matz Sels':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Matz Sels'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Thomas Vermaelen':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Thomas Vermaelen'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Jan Vertonghen':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Jan Vertonghen'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Axel Witsel':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Axel Witsel'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Zakaria Bakkali':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Zakaria Bakkali'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Nacer Chadli':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Nacer Chadli'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Dedryck Boyata':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Dedryck Boyata'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Laurens De Bock':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Laurens De Bock'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Jordan Lukaku':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Jordan Lukaku'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Laurent Ciman':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Laurent Ciman'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Laurent Ciman':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Laurent Ciman'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Sven Kums':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Sven Kums'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Dennis Praet':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Dennis Praet'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        case 'Hans Vanaken':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Hans Vanaken'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            //$db->close();
            break;
        default:
            echo "steek speler: ".$value." in database";
            break;
    }
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


$db->close();

?>
