<?php
function selectLabels() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT label_id, label_name, label_yearestablished FROM `label`");

        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function insertLabel($cLName, $cYearEst) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `label` (`label_name`, `label_yearestablished`) VALUES (?, ?)");
        $stmt->bind_param("ss", $cLName, $cYearEst);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateLabel($cLName, $cYearEst, $lid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `label` set `label_name` = ?, `label_yearestablished` = ? where label_id = ?");
        $stmt->bind_param("ssi", $cLName, $cYearEst, $lid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteLabel($lid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from label where label_id=?");
        $stmt->bind_param("i", $lid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
>?
