<?php
require_once("util-db.php");
require_once("model-labels-for-artists.php");

$pageTitle = "Labels for Artists";
include "view-header.php";
$labels = selectLabels();
include "view-labels.php";
include "view-footer.php";
?>
