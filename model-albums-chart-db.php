<?php
function selectAlbums() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT t.title, COUNT(l.label_id) AS num_labels FROM album t JOIN label l ON album_id = t.album_id GROUP BY t.album_id, t.title;");

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
