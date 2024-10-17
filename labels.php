<?php
require_once("util-db.php");
require_once("model-labels.php");

$pageTitle = "Labels";
include "view-header.php";
$labels = selectLabels();
include "view-labels.php";
include "view-footer.php";
?>
