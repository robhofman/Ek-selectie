<?php
include 'dbconnect.php';

$postArray = [];
$postArray = $_POST;

foreach($postArray as $value){
    var_dump($value);
    switch($value){
        case 'Toby Alderweireld':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Toby Alderweireld'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Michy Batshuayi':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Michy Batshuayi'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Christian Benteke':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Christian Benteke'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Yannick Carrasco':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Yannick Carrasco'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Luis Pedro Cavanda':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Luis Pedro Cavanda'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Kevin De Bruyne':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Kevin De Bruyne'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Steven Defour':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Steven Defour'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Moussa Dembélé':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Moussa Dembélé'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Jason Denayer':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Jason Denayer'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Laurent Depoitre':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Laurent Depoitre'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Jean-François Gillet':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Jean-François Gillet'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Eden Hazard':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Eden Hazard'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Vincent Kompany':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Vincent Kompany'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Nicolas Lombaerts':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Nicolas Lombaerts'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Romelu Lukaku':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Romelu Lukaku'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Dries Mertens':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Dries Mertens'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Thomas Meunier':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Thomas Meunier'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Simon Mignolet':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Simon Mignolet'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Kevin Mirallas':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Kevin Mirallas'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Radja Nainggolan':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Radja Nainggolan'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Matz Sels':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Matz Sels'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Thomas Vermaelen':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Thomas Vermaelen'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Jan Vertonghen':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Jan Vertonghen'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Axel Witsel':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Axel Witsel'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Zakaria Bakkali':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Zakaria Bakkali'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Nacer Chadli':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Nacer Chadli'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Dedryck Boyata':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Dedryck Boyata'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Laurens De Bock':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Laurens De Bock'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Jordan Lukaku':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Jordan Lukaku'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Laurent Ciman':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Laurent Ciman'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Laurent Ciman':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Laurent Ciman'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Sven Kums':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Sven Kums'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Dennis Praet':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Dennis Praet'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        case 'Hans Vanaken':
            $sql = "UPDATE selectiemaker_spelers SET aantal=aantal+1 WHERE naam='Hans Vanaken'";
            if ($db->query($sql) === TRUE) { echo "Record updated successfully"; } else { echo "Error updating record: " . $db->error; }
            break;
        default:
            echo "steek speler: ".$value." in database";
            break;
    }
}

$updateInzendingen = "UPDATE selectiemaker_inzendingen SET totaal=totaal+1";

if ($db->query($updateInzendingen) === TRUE) { echo "Totaal werd upgedate"; } else { echo "Error updating record totaal: " . $db->error; }

//$stmt2 = $db->prepare("UPDATE selectiemaker_inzendingen SET totaal=totaal+1 WHERE id=1;");
//$stmt2->execute();
//$stmt2->close();

$db->close();
?>
