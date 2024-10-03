<?php

//print_r($_POST);

include_once 'includes/db.php';

$message = $_POST['tweet'] ?? '';
$user_id = 1;

//INSERT
