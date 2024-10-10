<?php

class Course {
    public int $id;
    public string $name;
    public string $short_description;
    public string $description;

    public function __construct () {
       
    }

    public function getStudents() {
        return ['Jef', 'Jan', 'Jos'];
    }
}