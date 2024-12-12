<?php
require_once("util-db.php");
require_once("model-artists-chart-db.php");

$pageTitle = "Artists Chart";
include "view-header.php";
$artists = selectArtists();
include "view-artists-chart.php";
include "view-footer.php";
?>
