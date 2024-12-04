<?php
require_once("util-db.php");
require_once("model-artists.php");

$pageTitle = "Artists";
include "view-header.php";
$artists = selectArtists();
include "view-artists.php";
include "view-footer.php";


<table style="background-color: #9D5D67; color: black; border-collapse: collapse; width: 100%;">

?>
