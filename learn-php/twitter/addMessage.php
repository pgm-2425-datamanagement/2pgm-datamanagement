<?php

//print_r($_POST);

include_once 'includes/db.php';

$message = $_POST['tweet'] ?? '';
$user_id = 51;

//INSERT

$sql = 'INSERT INTO message (message, user_id, created_on) VALUES (:message, :user_id, NOW())';

$stmt = $db->prepare($sql);
//$stmt->bindValue(':message', $message);
//$stmt->bindValue(':user_id', $user_id);
//$stmt->bindValue(':created_on', date('Y-m-d H:i:s'));
//$stmt->execute();

$stmt->execute([
    ':message' => $message,
    ':user_id' => $user_id
]);

//redirect to the homepage
header('Location: ./index.php');