<?php
require_once('cfg.php');
$conn = mysql_connect(DB_HOST,DB_USER, DB_PASSWORD) or die ('Fout bij het verbinden met de database.');
@mysql_select_db(DB_DATABASE) or die( "Kan de geselecteerde database niet vinden.");
?>