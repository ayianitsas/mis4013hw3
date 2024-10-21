<?php
function selectAlbumsByGenre($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.genre_id, genre_name, popular_year, FROM `Genres` c join label s on s.genre_id = c.genre_id where s.album_id=?");
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
