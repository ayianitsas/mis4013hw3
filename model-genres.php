<?php
function selectGenres() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT genre_id, genre_name, popular_year FROM `Genres`");

        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



function insertGenre($gName, $gPopYear) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `genre` (`genre_name`, `popular_year`) VALUES (?, ?)");
         $stmt->bind_param("ss", $gName, $gPopYear);
        $success = $stmt->execute();
      
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



function updateGenre($gid, $gName, $gPopYear) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `genre` set `genre_name`= ?, `popular_year`= ? where genre_id = ?");
         $stmt->bind_param("ssi", $gName, $gPopYear, $gid);

        $success = $stmt->execute();
      
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}




function deleteGenre($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from genre where genre_id=?");
         $stmt->bind_param("i", $gid);

        $success = $stmt->execute();
      
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
