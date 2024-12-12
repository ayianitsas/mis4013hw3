<?php
function selectLabelsForArtists($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.label_id, label_name, label_yearestablished, title, year FROM `label` c join album s on s.label_id = c.label_id where s.artist_id=?");
        $stmt->bind_param("i", $aid);

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
