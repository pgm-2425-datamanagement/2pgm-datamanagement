<?php
    //var_dump( __DIR__ );
    require_once __DIR__ . '/functions.php';

    $firstname = "Dieter";
    $lastname ="De Weirdt";
    //$fullname = $firstname  . " " . $lastname;
    $fullname = "$firstname zijn familienaam is  $lastname";
    
    //$age = 42;
    //print_r($age*2);
    //$isMale = false;

    $v_search = $_GET['search'] ?? '';
    //print_r($v_search);

    $courses = getCourses($v_search);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Learn php</h1>
    <?php
    //echo "<h2>hello $fullname</h2>";
    echo '<h2>Hello' . $fullname . '</h2>';
    ?>

<h2>Overzicht cursussen</h2>

<form>
    <input type="text" name="search" placeholder="Zoekterm" value="<?= $v_search; ?>">
    <input type="submit" value="Zoeken">
</form>


<ul>
    <?php
    foreach( $courses as $item ){
        //echo "<li>$item</li>" . PHP_EOL;
        include __DIR__ . '/view/course.php';
    }
    ?>
</ul>

<?php
/*
    for( $i = 1; $i < count($courses); $i++ ) {
        echo '<br>' . $i . ': ' . $courses[$i];
    }

    $i = 0;
    while( isset($courses[$i]) ) {
        echo '<br>' . $i . ': ' . $courses[$i];
        $i++;
    }
*/
?>

</body>
</html>