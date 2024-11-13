<?php
require_once("util-db.php");
require_once("model-labels.php");

$pageTitle = "Labels";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertLabel($_POST['cName'], $_POST['cYear']);
      break;
  }
}

$labels = selectLabels();
include "view-labels.php";
include "view-footer.php";
?>
