<?php
require_once("util-db.php");
require_once("model-genres.php");

$pageTitle = "Genres";
include "view-header.php";


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertGenre($_POST['gName'], $_POST['gPopYear'])) {
        echo '<div class="alert alert-success" role="alert">Genre added!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  case "Edit":
      if (updateGenre($_POST['gName'], $_POST['gPopYear'], $_POST['gid'])) {
        echo '<div class="alert alert-success" role="alert">Genre edited!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  case "Delete":
      if (deleteGenre($_POST['gid'])) {
        echo '<div class="alert alert-success" role="alert">Genre deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}




$genres = selectGenres();
include "view-genres.php";
include "view-footer.php";
?>



