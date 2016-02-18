<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<?php
/*foreach ($_POST as $key => $value){
    if(!empty($value)){
        echo "<p>".$value."</p></br>";
    }

}*/

$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "ek2016_selectie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//SELECTIE IN DB
$stmt1 = $conn->prepare("INSERT INTO ek_selectie (rd1, rd2, rd3, rd4, rd5, rd6, rd7, rd8, rd9, rd10, rd11, rd12, rd13, rd14, rd15, rd16, rd17, rd18, rd19, rd20, rd21, rd22, rd23, rd24, rd25) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt1->bind_param("sssssssssssssssssssssssss", $_POST['speler1'], $_POST['speler2'], $_POST['speler3'], $_POST['speler4'], $_POST['speler5'], $_POST['speler6'], $_POST['speler7'], $_POST['speler8'], $_POST['speler9'], $_POST['speler10'], $_POST['speler11'], $_POST['speler12'], $_POST['speler13'], $_POST['speler14'], $_POST['speler15'], $_POST['speler16'], $_POST['speler17'], $_POST['speler18'], $_POST['speler19'], $_POST['speler20'], $_POST['speler21'], $_POST['speler22'], $_POST['speler23'], $_POST['speler24'], $_POST['speler25']);

$stmt1->execute();
$stmt1->close();

//AANTALLEN IN DB
$postArray = [];
$postArray = $_POST;

foreach ($postArray as $value) {
    switch($value) {
        case 'Toby Alderweireld':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Toby Alderweireld';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Michy Batshuayi':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Michy Batshuayi';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Christian Benteke':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Christian Benteke';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Yannick Carrasco':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Yannick Carrasco';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Luis Pedro Cavanda':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Luis Pedro Cavanda';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Kevin De Bruyne':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Kevin De Bruyne';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Steven Defour':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Steven Defour';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Moussa Dembélé':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Moussa Dembélé';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Jason Denayer':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Jason Denayer';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Laurent Depoitre':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Laurent Depoitre';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Jean-François Gillet':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Jean-François Gillet';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Eden Hazard':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Eden Hazard';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Vincent Kompany':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Vincent Kompany';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Sven Kums':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Sven Kums';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Nicolas Lombaerts':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Nicolas Lombaerts';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Romelu Lukaku':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Romelu Lukaku';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Dries Mertens':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Dries Mertens';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Thomas Meunier':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Thomas Meunier';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Simon Mignolet':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Simon Mignolet';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Kevin Mirallas':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Kevin Mirallas';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Radja Nainggolan':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Radja Nainggolan';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Matz Sels':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Matz Sels';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Thomas Vermaelen':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Thomas Vermaelen';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Jan Vertonghen':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Jan Vertonghen';");
            $stmt2->execute();
            $stmt2->close();
            break;
        case 'Axel Witsel':
            $stmt2 = $conn->prepare("UPDATE ek_spelers SET aantal=aantal+1 WHERE spelersnaam='Axel Witsel';");
            $stmt2->execute();
            $stmt2->close();
            break;
        default:
            echo "Can't update statistics";
            break;
    }
}



$conn->close();

//echo "data in db";
?>

</body>
</html>