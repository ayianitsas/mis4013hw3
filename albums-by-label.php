<?php
require_once("util-db.php");
require_once("model-albums-by-label.php");

$pageTitle = "Albums by Label";
include "view-header.php";
$albums = selectAlbumsByLabel($_POST['cid']);
include "view-albums-by-label.php";
include "view-footer.php";
?>
