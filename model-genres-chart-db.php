<?php
function selectGenres() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT g.genre_name, COUNT(l.label_id) AS num_labels FROM Genres g JOIN label l ON genre_id = g.genre_id GROUP BY g.genre_id, g.genre_name;");




        
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
