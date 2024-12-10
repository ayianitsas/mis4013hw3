<?php
function selectAlbums() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT album_id, title, year FROM `album`");

        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function insertAlbum($aTitle, $aYear) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `album` (`title`, `year`) VALUES (?, ?)");
         $stmt->bind_param("ss", $aTitle, $aYear);
        $success = $stmt->execute();
      
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



function updateAlbum($aid, $aTitle, $aYear) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `album` set `title`= ?, `year`= ? where album_id = ?");
         $stmt->bind_param("ssi", $aTitle, $aYear, $aid);

        $success = $stmt->execute();
      
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}




function deleteAlbum($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from album where album_id=?");
         $stmt->bind_param("i", $aid);

        $success = $stmt->execute();
      
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
