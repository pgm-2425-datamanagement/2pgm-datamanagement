<?php

echo '<h1>Testing the model</h1><pre>';

require_once __DIR__. '/models/Course.php';

$wiskunde = new Course();
$wiskunde->name = 'Wiskunde';
$wiskunde->short_description = 'Dit is een cursus wiskunde voor het vierde middelbaar';
print_r( $wiskunde->getStudents() );