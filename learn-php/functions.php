<?php
include 'models/Course.php';

function getCourses($p_search) {

    //1. connectie maken met database
    $db = new PDO('mysql:host=db;dbname=db', 'db', 'db');

    //2. SQL query schrijven
    $sql = "
            SELECT * 
            FROM courses
            WHERE name LIKE :b_search 
            OR short_description LIKE :b_search
           ";

    //3. SQL statement voorbereiden
    $statement = $db->prepare($sql);

    //4. Parameters binden en uitvoeren
    //$v_search = '%' . $p_search . '%';
    //$statement->bindParam(':b_search', $v_search, PDO::PARAM_STR);
    //$statement->execute();

    //5. SQL statement uitvoeren
    $statement->execute(
        [
            'b_search' => '%' . $p_search . '%'
        ]
    );
    

    //Data fetchen and casten naar Course class
    $courses = $statement->fetchAll(PDO::FETCH_CLASS, 'Course');
    
    return $courses;

    //return ["Math", "Science", "History", "IT"];
}