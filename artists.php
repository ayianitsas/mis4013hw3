<?php
require_once("util-db.php");
require_once("model-artists-db.php");

$pageTitle = "Artists";
include "view-header.php";
$artists = selectArtists();
include "view-artists.php";
include "view-footer.php";
?>
