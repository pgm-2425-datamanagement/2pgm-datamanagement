<?php

CONST DB_DSN = 'mysql:dbname=db;host=db;port=3306';
CONST DB_USER = 'db';
CONST DB_PWD = 'db';

$db = new PDO(DB_DSN, DB_USER, DB_PWD);

$sql = 'SELECT * FROM users';

$result = $db->query($sql);

foreach ( $result as $row) {
    echo '<li>' . $row['email'] . '</li>';
}