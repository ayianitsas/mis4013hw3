<?php
require_once("util-db.php");
require_once("model-albums-by-genre.php");

$pageTitle = "Albums by Genre";
include "view-header.php";
$albums = selectAlbumsByGenre();
include "view-albums-by-genre.php";
include "view-footer.php";
?>
