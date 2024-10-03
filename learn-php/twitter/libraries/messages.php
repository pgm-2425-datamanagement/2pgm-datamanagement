<?php

function getMessages($search = '', $user_id = null) {
    global $db;

    $sql = 'SELECT * 
    FROM message 
    INNER JOIN users ON message.user_id = users.id
    WHERE message LIKE :search
    ' . ($user_id ? 'AND message.user_id = :user_id' : '') . '
    ORDER BY created_on DESC
    LIMIT 20';

    //Executing a query without parameters is dangerous (SQL injection)
    //$result = $db->query($sql);

    //using prepared statements to prevent SQL injection
    $stmt = $db->prepare($sql);
    //binding the parameter to the prepared statement
    $stmt->bindValue(':search', '%' . $search . '%');
    if($user_id) {
        $stmt->bindValue(':user_id', $user_id);
    }
    //executing the prepared statement
    $stmt->execute();
    //fetching the result
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}