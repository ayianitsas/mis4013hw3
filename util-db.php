<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'misayouc_MIS4013AGY', 'Lalala6789', 'misayouc_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
