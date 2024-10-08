<?php

namespace App\Controllers;

use App\Models\Message;

class MessageController extends BaseController {

    public static function list () {
        $messages = Message::all();

        self::loadView('/messages', [
            'title' => 'Messages',
            'messages' => $messages
        ]);
    }

}