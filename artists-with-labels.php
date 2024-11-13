<?php
require_once("util-db.php");
require_once("model-artists-with-labels.php");

$pageTitle = "Artists with Labels";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertLabel($_POST['cName'], $_POST['cYear'])) {
        echo '<div class="alert alert-success" role="alert">Label added!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  case "Edit":
      if (updateLabel($_POST['cName'], $_POST['cYear'], $_POST['cid'])) {
        echo '<div class="alert alert-success" role="alert">Label edited!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  case "Delete":
      if (deleteLabel($_POST['cid'])) {
        echo '<div class="alert alert-success" role="alert">Label deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}



$artists = selectArtists();
include "view-artists-with-labels.php";
include "view-footer.php";
?>





