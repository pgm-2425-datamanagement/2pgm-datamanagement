<?php

namespace App\Controllers;

use App\Models\Alien;

class AlienController extends BaseController {

    public static function index () {
        $aliens = Alien::all();

        //print_r($aliens);

        self::loadView('/home', [
            'title' => 'Homepage',
            'aliens' => $aliens
        ]);
    }

    public static function edit( $id ) {
        $alien = Alien::find($id);

        if(isset($_POST['name'])) {
            //formulier is gesubmit
            $alien->name = $_POST['name'];
            $alien->planet = $_POST['planet'];
            $alien->save();
            
        }

        //load view
        self::loadView('/aliens/edit', [
            'title' => 'Edit alien',
            'alien' => $alien
        ]);

    }

    public static function get_aliens() {
        $aliens = Alien::all();
        header("Content-type:application/json");

        echo json_encode($aliens);


        exit;
    }

}