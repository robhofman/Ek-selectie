<?php
include 'backend/dbconnect.php';

//$sql = 'SELECT id, naam, aantal FROM selectiemaker_spelers';
//$result = $db->query($sql);
//
//$rowCount = $result->num_rows;


$queryGK = 'SELECT id, naam, aantal, positie FROM selectiemaker_spelers WHERE positie="GK"';
$resultGK = $db->query($queryGK);

$queryV = 'SELECT id, naam, aantal, positie FROM selectiemaker_spelers WHERE positie="V"';
$resultV = $db->query($queryV);

$queryM = 'SELECT id, naam, aantal, positie FROM selectiemaker_spelers WHERE positie="M"';
$resultM = $db->query($queryM);

$queryA = 'SELECT id, naam, aantal, positie FROM selectiemaker_spelers WHERE positie="A"';
$resultA = $db->query($queryA);




?>
<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="node_modules/ng-dialog/css/ngDialog.css">
    <link rel="stylesheet" href="node_modules/ng-dialog/css/ngDialog-theme-default.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <title>Wie gaat mee naar Frankrijk</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="backend/postSelection.js"></script>
<main id="gameSpace" ng-controller="selectieController">
    <!--selecteer spelers-->
    <h1>Welke 23 duivels zet jij op de Thalys naar het EK?</h1>
    <div>
        <button class="sporzaButton" id="btnBekijkTeam" >Bekijk je selectie</button>
        <button class="sporzaButton hidden" id="btnWijzig" value="wijzig je team" >Wijzig je team</button>
        <button class="sporzaButton hidden" id="btnBewaar" ng-disabled="aantalIsNietVoldoende" value="Bewaar" >Bewaar</button>
        <h2 ng-bind="aantalSpelers" class="aantal"></h2>
    </div>    <!--<form action="php/post.php" method="post">-->
        <div id="canvasLuik" class="hidden">
            <div id="luikBackground">
                <ul id="resultatenLijst">
                    <li ng-repeat="speler in selectie">{{speler}}</li>
                </ul>
            </div>
            <img src="img/Trein_Red_Devils.png" alt="treintje" id="trein">
        </div>
        <div id="checkboxes">
            <div id="innerContainerCheckboxes">

            <?php
            echo '<ul id="GK">';
            while($row = $resultGK->fetch_array(MYSQLI_BOTH)){
                echo '<li class="speler"><input type="checkbox" id="speler'.$row[0].'" name="speler'.$row[0].'" value="'.$row['naam'].'"><img src="img/'.$row['naam'].'.png"><i class="fa fa-check hidden"></i></li>';
            }
            echo '</ul>';
            echo '<ul id="V">';
            while($row = $resultV->fetch_array(MYSQLI_BOTH)){
                echo '<li class="speler"><input type="checkbox" id="speler'.$row[0].'" name="speler'.$row[0].'" value="'.$row['naam'].'"><img src="img/'.$row['naam'].'.png"><i class="fa fa-check hidden"></i></li>';
            }
            echo '</ul>';
            echo '<ul id="M">';
            while($row = $resultM->fetch_array(MYSQLI_BOTH)){
                echo '<li class="speler"><input type="checkbox" id="speler'.$row[0].'" name="speler'.$row[0].'" value="'.$row['naam'].'"><img src="img/'.$row['naam'].'.png"><i class="fa fa-check hidden"></i></li>';
            }
            echo '</ul>';
            echo '<ul id="A">';
            while($row = $resultA->fetch_array(MYSQLI_BOTH)){
                echo '<li class="speler"><input type="checkbox" id="speler'.$row[0].'" name="speler'.$row[0].'" value="'.$row['naam'].'"><img src="img/'.$row['naam'].'.png"><i class="fa fa-check hidden"></i></li>';
            }
            echo '</ul>';

            ?>
            </div>
        </div>
    <button id="btnSelecteer23">selecteer 23 spelers</button>
        <!--
        <ul id="lijstAlleSpelers">
            <li class="speler"><input type="checkbox" name="speler1" value="Toby Alderweireld">
                <img src="img/Alderweireld.png" alt="Alderweireld">
            </li>
            <li class="speler"><input type="checkbox" name="speler2" value="Zakaria Bakkali">
                <img src="img/Bakkali.png" alt="Bakkali">
            </li>
            <li class="speler"><input type="checkbox" name="speler3" value="Michy Batshuayi">
                <img src="img/Batshuayi.png" alt="Batshuayi">
            </li>
            <li class="speler"><input type="checkbox" name="speler4" value="Christian Benteke">
                <img src="img/benteke.png" alt="Benteke">
            </li>
            <li class="speler"><input type="checkbox" name="speler5" value="Dedryck Boyata">
                <img src="img/Boyota.png" alt="Boyota">
            </li>
            <li class="speler"><input type="checkbox" name="speler6" value="Yannick Carrasco">
                <img src="img/carrasco.png" alt="Carrasco">
            </li>
            <li class="speler"><input type="checkbox" name="speler7" value="Luis Pedro Cavanda">
                <img src="img/cavanda.png" alt="Cavanda">
            </li>
            <li class="speler"><input type="checkbox" name="speler8" value="Nacer Chadli">
                <img src="img/Chadli.png" alt="Chadli">
            </li>
            <li class="speler"><input type="checkbox" name="speler9" value="Laurens De Bock">
                <img src="img/debock.png" alt="De Bock">
            </li>
            <li class="speler"><input type="checkbox" name="speler10" value="Kevin De Bruyne">
                <img src="img/debruyne.png" alt="De Bruyne">
            </li>
            <li class="speler"><input type="checkbox" name="speler11" value="Steven Defour">
                <img src="img/Defour.png" alt="Defour">
            </li>
            <li class="speler"><input type="checkbox" name="speler12" value="Moussa Dembele">
                <img src="img/Dembele.png" alt="Dembele">
            </li>
            <li class="speler"><input type="checkbox" name="speler13" value="Jason Denayer">
                <img src="img/denayer.png" alt="Denayer">
            </li>
            <li class="speler"><input type="checkbox" name="speler14" value="Laurent Depoitre">
                <img src="img/depoitre.png" alt="Depoitre">
            </li>
            <li class="speler"><input type="checkbox" name="speler15" value="Eden Hazard">
                <img src="img/E-Hazard.png" alt="Eden Hazard">
            </li>
            <li class="speler"><input type="checkbox" name="speler16" value="Jean-François Gillet">
                <img src="img/Gillet.png" alt="Gillet">
            </li>
            <li class="speler"><input type="checkbox" name="speler17" value="Jordan Lukaku">
                <img src="img/J_Lukaku.png" alt="Jordan Lukaku">
            </li>
            <li class="speler"><input type="checkbox" name="speler18" value="Vincent Kompany">
                <img src="img/Kompany.png" alt="Kompany">
            </li>
            <li class="speler"><input type="checkbox" name="speler19" value="Sven Kums">
                <img src="img/Kums.png" alt="Kums">
            </li>
            <li class="speler"><input type="checkbox" name="speler20" value="Nicolas Lombaerts">
                <img src="img/Lombaerts.png" alt="Lombaerts">
            </li>
            <li class="speler"><input type="checkbox" name="speler21" value="Dries Mertens">
                <img src="img/mertens.png" alt="Mertens">
            </li>
            <li class="speler"><input type="checkbox" name="speler23" value="Thomas Meunier">
                <img src="img/Meunier.png" alt="Meunier">
            </li>
            <li class="speler"><input type="checkbox" name="speler24" value="Simon Mignolet">
                <img src="img/Mignolet.png" alt="Mignolet">
            </li>
            <li class="speler"><input type="checkbox" name="speler25" value="Kevin Mirallas">
                <img src="img/mirallas.png" alt="Mirallas">
            </li>
            <li class="speler"><input type="checkbox" name="speler26" value="Radja Nainggolan">
                <img src="img/Naingolan.png" alt="Naingolan">
            </li>
            <li class="speler"><input type="checkbox" name="speler27" value="Divock Origi">
                <img src="img/Origi.png" alt="Origi">
            </li>
            <li class="speler"><input type="checkbox" name="speler28" value="Dennis Praet">
                <img src="img/Praet.png" alt="Praet">
            </li>
            <li class="speler"><input type="checkbox" name="speler29" value="Romelu Lukaku">
                <img src="img/R_Lukaku.png" alt="Lukaku">
            </li>
            <li class="speler"><input type="checkbox" name="speler30" value="Mats Sels">
                <img src="img/sels.png" alt="Sels">
            </li>
            <li class="speler"><input type="checkbox" name="speler31" value="Sam Vanaken">
                <img src="img/Vanaken.png" alt="Vanaken">

            </li>
            <li class="speler"><input type="checkbox" name="speler32" value="Thomas Vermaelen">
                <img src="img/Vermaelen.png" alt="Vermaelen">

            </li>
            <li class="speler"><input type="checkbox" name="speler33" value="Jan Vertonghen">
                <img src="img/Vertonghen.png" alt="Vertonghen">
            </li>
            <li class="speler"><input type="checkbox" name="speler34" value="Axel Witsel">
                <img src="img/witsel.png" alt="Witsel">
            </li>
            <li class="speler"><input type="checkbox" name="speler35" value="speler35">
                <img src="img/Ciman.png" alt="Ciman">
            </li>
        </ul>-->


        <!--<input type="submit" class="sporzaButton hidden" id="btnBewaar" ng-disabled="aantalIsNietVoldoende" value="Bewaar" >-->

    <!--</form>-->

</main>
<?php
$result->free();
$db->close();
?>

</body>
<script type="text/ng-template" id="testTemplate">
    <h1>U heeft uw {{23 - aantalSpelers}} spelers gekozen</h1>
    <input type="button" ng-click="bewaar()" value="Bewaar" class="sporzaButton" id="btnBewaarPopup"/>
    <input type="button" ng-click="wijzig()" value="Wijzig" class="sporzaButton" id="btnWijzigPopup">
</script>
<script src="lib/jquery-ui.js"></script>

<script src="lib/angular.js"></script>
<script src="node_modules/ng-dialog/js/ngDialog.js"></script>

<script src="app.js"></script>
<script src="controllers/selectieController.js"></script>
<!--
<script src="js/selectPlayers.js"></script>
-->

</html>