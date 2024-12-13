<?php
require_once("util-db.php");
require_once("model-genres.php");

$pageTitle = "Genres";
include "view-header.php";
$genres = selectGenres();
include "view-genres.php";
include "view-footer.php";
?>
