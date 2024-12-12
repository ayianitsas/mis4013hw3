<?php
function selectArtists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT r.artist_name, COUNT(a.album_id) AS num_albums
                        FROM artist r
                        JOIN album a ON a.artist_id = r.artist_id
                        GROUP BY r.artist_name");
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
