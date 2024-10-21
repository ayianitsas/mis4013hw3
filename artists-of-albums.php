<?php
require_once("util-db.php");
require_once("model-artists-of-albums.php");

$pageTitle = "Artists of Albums";
include "view-header.php";
$artists = selectArtistsOfAlbums($_POST['id']);
include "view-artists-of-albums.php";
include "view-footer.php";
?>
