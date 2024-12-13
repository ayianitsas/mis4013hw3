<?php
function selectLabels() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT label_name, label_yearestablished FROM label;");
        
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
