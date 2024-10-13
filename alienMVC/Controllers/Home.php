<?php

namespace App\Controllers;

use App\Models\Alien;

class HomeController extends BaseController {

    public static function index () {
        $aliens = Alien::all();

        //print_r($aliens);

        self::loadView('/home', [
            'title' => 'Homepage',
            'aliens' => $aliens
        ]);
    }

    public static function edit( $id ) {
        //print_r($id);

        $alien = Alien::find($id);

        print_r($alien);

        //load view
        

    }

}