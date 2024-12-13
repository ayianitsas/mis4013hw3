<?php
function selectArtists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT l.label_name, COUNT(a.artist_id) AS num_artists FROM label l JOIN artist a ON label_id = l.label_id GROUP BY l.label_id, l.label_name;");

        
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
