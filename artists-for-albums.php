<?php
require_once("util-db.php");
require_once("model-labels-for-artists.php");

$pageTitle = "Labels for Artists";
include "view-header.php";
$labels = selectLabelsForArtists($_GET['id']);
include "view-labels-for-artists.php";
include "view-footer.php";
?>
