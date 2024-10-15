<?php

//$router->get('/', function() { echo 'Dit is de index vanuit de route'; });
$router->setNamespace('\App\Controllers');
$router->get('/', 'AlienController@index');


$router->get('/alien/edit/(\d+)', 'AlienController@edit');
$router->post('/alien/edit/(\d+)', 'AlienController@edit');


$router->get('/api/get_aliens', 'AlienController@get_aliens');

$router->get('/hello', 
    function() { 
        echo 'hi'; 
    } 
);