<?php

function getAllPlayers($db) {

    $sql = "SELECT * FROM users";
    $result = array();

    $stmt = $db->prepare($sql);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { // рассмотреть fetchAll (режим FETCH_BOTH)
        $result[$row['player_id']] = $row;
    }

    return $result;
}

function getAllOptions($db) {
    $sql = "SELECT * FROM menu_options";
    $res = array();

    $stmt = $db->prepare($sql);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { // рассмотреть fetchAll (режим FETCH_BOTH)
        $res[$row['option_id']] = $row;
    }

    return $res;
}

function getPlayerById($db, $id) {
    $sql = "SELECT * FROM users
        WHERE player_id = :player_id
        ";

    $stmt = $db->prepare($sql);
    $stmt->bindValue('player_id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function savePlayer($db, $name, $mes, $tim, $opt, $img, $id) {
    $sql = "UPDATE users
            SET player_name = :player_name,
            messages = :messages,
            timing = :timing,
            options = :options,
            images = :images           
            WHERE player_id = :player_id
            ";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(':player_name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':messages', $mes, PDO::PARAM_STR);
    $stmt->bindValue(':timing', $tim, PDO::PARAM_STR);
    $stmt->bindValue(':options', $opt, PDO::PARAM_STR);
    $stmt->bindValue(':images', $img, PDO::PARAM_STR);
    $stmt->bindValue(':player_id', $id, PDO::PARAM_INT);

    $stmt->execute();
}

function deletePlayer($db, $id) {
    $sql = "DELETE FROM users WHERE player_id = :player_id";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(":player_id", $id, PDO::PARAM_INT);

    $stmt->execute();
}

function addForm($db, $name, $mes, $opt, $img, $dt) {
    $sql = "INSERT INTO users(player_name, messages, options, images, timing)
            VALUES(:player_name, :messages, :options, :images, :timing)
";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(':player_name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':messages', $mes, PDO::PARAM_STR);
    $stmt->bindValue(':options', $opt, PDO::PARAM_STR);
    $stmt->bindValue(':images', $img, PDO::PARAM_STR);
    $stmt->bindValue(':timing', $dt, PDO::PARAM_STR);

    $stmt->execute();
}







