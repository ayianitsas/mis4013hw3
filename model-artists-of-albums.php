<?php
function selectArtistsOfAlbums($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT artist_id, artist_name, artist_genre FROM `artist` join Genres on artist_id = artist_id");
        $stmt->bind_param("I", $aid);

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

<!-- SELECT c.label_id, label_name, label_yearestablished, title, year FROM `label` c join album s on s.label_id = c.label_id where s.artist_id=?
<!-- SELECT c.artist_id, artist_name, artist_genre FROM `artist` c join Genres s on s.artist_id = c.artist_id where s.album_id=?

