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
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="node_modules/ng-dialog/css/ngDialog.css">
    <link rel="stylesheet" href="node_modules/ng-dialog/css/ngDialog-theme-default.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <title>Wie gaat mee naar Frankrijk</title>
</head>
<body id="gameBody">
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="backend/postSelection.js"></script>
<main id="gameSpace" ng-controller="selectieController">
    <!--selecteer spelers-->
    <h1>Welke 23 duivels zet jij op de Thalys naar het EK?</h1>
    <h2 ng-bind="aantalSpelers" class="aantal"></h2>

    <!--<form action="php/post.php" method="post">-->
        <div id="canvasLuik" class="hidden">
            <div id="luikBackground">
                <ul id="resultatenLijst">
                    <li ng-repeat="speler in percentageLijst" class="{{speler.gekozen}}"><p class="spelernaam">{{speler.naam}}</p>
                        <span class="percent">{{speler.percentage}}%</span>
                    </li>
                </ul>
            </div>
            <img src="img/plane.png" alt="treintje" id="trein">
        </div>
        <div id="checkboxes">
            <div id="innerContainerCheckboxes">
            <?php
            echo '<ul id="GK">';
            while($row = $resultGK->fetch_array(MYSQLI_BOTH)){
                echo '<li class="speler"><input type="checkbox" id="speler'.$row[0].'" name="speler'.$row[0].'" value="'.$row['naam'].'"><img src="img/'.$row['naam'].'.png"><img src="img/logo-RD.png" class="check hidden"/></li>';
            }
            echo '</ul>';
            echo '<ul id="V">';
            while($row = $resultV->fetch_array(MYSQLI_BOTH)){
                echo '<li class="speler"><input type="checkbox" id="speler'.$row[0].'" name="speler'.$row[0].'" value="'.$row['naam'].'"><img src="img/'.$row['naam'].'.png"><img src="img/logo-RD.png" class="check hidden"/></li>';
            }
            echo '</ul>';
            echo '<ul id="M">';
            while($row = $resultM->fetch_array(MYSQLI_BOTH)){
                echo '<li class="speler"><input type="checkbox" id="speler'.$row[0].'" name="speler'.$row[0].'" value="'.$row['naam'].'"><img src="img/'.$row['naam'].'.png"><img src="img/logo-RD.png" class="check hidden"/></li>';
            }
            echo '</ul>';
            echo '<ul id="A">';
            while($row = $resultA->fetch_array(MYSQLI_BOTH)){
                echo '<li class="speler"><input type="checkbox" id="speler'.$row[0].'" name="speler'.$row[0].'" value="'.$row['naam'].'"><img src="img/'.$row['naam'].'.png"><img src="img/logo-RD.png" class="check hidden"/></li>';
            }
            echo '</ul>';

            ?>
            </div>
        </div>
    <div>
        <button class="sporzaButton" id="btnBekijkTeam" >Bekijk je selectie</button>
        <button class="sporzaButton hidden" id="btnWijzig" value="wijzig je team" >Wijzig je team</button>
        <button class="sporzaButton hidden" id="btnHidden" value="wijzig je team" >Wijzig je team</button>

    </div>
    <button id="btnSelecteer23">selecteer 23 spelers</button>


</main>
<script type="text/ng-template" id="testTemplate">
    <h1>U heeft uw {{23 - aantalSpelers}} spelers gekozen</h1>
    <input type="button" ng-click="bewaar()" value="Bewaar" class="sporzaButton" id="btnBewaarPopup"/>
    <input type="button" ng-click="wijzig()" value="Wijzig" class="sporzaButton" id="btnWijzigPopup">
</script>
<script src="lib/jquery-ui.js"></script>
<script src="js/disableDoubleTap.js"></script>
<script src="lib/angular.js"></script>
<script src="node_modules/ng-dialog/js/ngDialog.js"></script>
<script src="models/Speler.js"></script>
<script src="app.js"></script>
<script src="controllers/selectieController.js"></script>
<script src="backend/share.js"></script>
<button id="facebookshare">Deel via Facebook</button>
<button id="twittershare">Deel via twitter</button>
<?php
$resultGK->free();
$resultV->free();
$resultM->free();
$resultA->free();
$db->close();
?>

<!--
<script src="js/selectPlayers.js"></script>
-->


</body>

</html>