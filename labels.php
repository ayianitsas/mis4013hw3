<?php
require_once("util-db.php");
require_once("model-labels.php");

$pageTitle = "Labels";
include "view-header.php";
$artists = selectArtists();
include "view-labels.php";
include "view-footer.php";
?>
