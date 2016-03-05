<?php
$mysqli = new mysqli("10.81.0.4", "sql_1004", "wYfVRdGr", "goudenduivels_sporza_be");

if (mysqli_connect_errno()) {
    die ('Could not open a mysql connection: '.mysqli_connect_error().'('.mysqli_connect_errno().')');
}

$result2 = mysqli_query($mysqli, 'SELECT id, totaal FROM selectiemaker_inzendingen');
$totaal = 0;

while($row2 = mysqli_fetch_assoc($result2)){
    echo "<h1>Totaal aantal inzendingen: " . $row2['totaal']."</h1>";
    $totaal = $row2['totaal'];
}

$result1 = mysqli_query($mysqli, 'SELECT id, naam, aantal, positie FROM selectiemaker_spelers');
?>
    <table border="1">
    <th>Naam</th>
    <th>Aantal</th>
    <th>Percentage</th>
    <?php
while($row1 = mysqli_fetch_assoc($result1)){
//    $aantalVanSpeler = $row1['aantal'];
//
//    echo $aantalVanSpeler;
//    echo $row1[2];
//
//    $totaal = $row2['totaal'];
//
//    echo $totaal;
//
//    $percentage  = (int) $aantalVanSpeler / $totaal;

    $percentage = ($row1['aantal']/$totaal) * 100;


    ?>

        <tr>
            <td><?php echo $row1['naam'] ?></td>
            <td><?php  echo $row1['aantal'] ?></td>
            <td><?php echo round($percentage)?></td>
        </tr>
    <?php
    //$perc = $row1['aantal']/$row2['totaal'];
    //echo $perc . '<br>';

    //echo '<p>Percentage' . $row1['naam'] . ': ' . $percentage . '</p>';
}
echo "</table>";

?>