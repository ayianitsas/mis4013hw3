<?php
function selectAlbums() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT a.artist_name, COUNT(b.album_id) AS num_albums FROM artist a JOIN album b ON b.artist_id = a.artist_id GROUP BY a.artist_id, a.artist_name;");




        
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
