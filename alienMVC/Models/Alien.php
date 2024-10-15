<?php

namespace App\Models;

use App\Models\BaseModel;

class Alien extends BaseModel {

    //Create a public function to update the new values of an object
    public function save() {

        $sql = "UPDATE aliens SET name = :name, planet = :planet WHERE id = :id";

        $pdo_statement = $this->db->prepare($sql);
        $pdo_statement->execute([
            ':name' => $this->name,
            ':planet' => $this->planet,
            ':id' => $this->id,
        ]);
    }
}