<?php
function selectLabels() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT label_id, label_name, label_yearsestablished FROM `label`");

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
