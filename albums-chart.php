<?php
require_once("util-db.php");
require_once("model-albums-chart-db.php");

$pageTitle = "Albums Chart";
include "view-header.php";
$albums = selectAlbums();
include "view-albums-chart.php";
include "view-footer.php";
?>

