<?php
require_once("util-db.php");
require_once("model-genres-chart-db.php");

$pageTitle = "Genres Chart";
include "view-header.php";
$genres = selectGenres();
include "view-genres-chart.php";
include "view-footer.php";
?>


