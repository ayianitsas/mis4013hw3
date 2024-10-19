<?php
require_once("util-db.php");
require_once("model-artists-with-labels.php");

$pageTitle = "Artists with Labels";
include "view-header.php";
$artists = selectArtists();
include "view-artists-with-labels.php";
include "view-footer.php";
?>
