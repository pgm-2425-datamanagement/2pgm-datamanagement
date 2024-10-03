<?php

function getMessages($search = '') {
    global $db;
    
    $sql = 'SELECT * 
    FROM message 
    INNER JOIN users ON message.user_id = users.id
    WHERE message LIKE :search
    LIMIT 20';

    //Executing a query without parameters is dangerous (SQL injection)
    //$result = $db->query($sql);

    //using prepared statements to prevent SQL injection
    $stmt = $db->prepare($sql);
    //binding the parameter to the prepared statement
    $stmt->bindValue(':search', '%' . $search . '%');
    //executing the prepared statement
    $stmt->execute();
    //fetching the result
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}