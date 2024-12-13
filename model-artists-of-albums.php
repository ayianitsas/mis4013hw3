<?php
function selectArtistsOfAlbums($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM `artist` WHERE artist_id=?");
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

