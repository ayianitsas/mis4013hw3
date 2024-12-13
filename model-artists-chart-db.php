<?php
function selectArtists() {
    $conn = null;
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
            SELECT a.artist_name, COUNT(l.label_id) AS num_labels
            FROM artist a
            JOIN label l ON l.artist_id = a.artist_id
            GROUP BY a.artist_id, a.artist_name
        ");
        
        $stmt->execute();
        $result = $stmt->get_result();

        // Convert the result set into an array of rows
        $artists = [];
        while ($row = $result->fetch_assoc()) {
            $artists[] = $row;
        }

        $conn->close();
        return $artists;
    } catch (Exception $e) {
        // Ensure connection is closed if it was established
        if ($conn) {
            $conn->close();
        }
        throw $e;
    }
}

