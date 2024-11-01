<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php practice</title>
</head>

<body>
    <?php

    //get full path and file name
    echo __FILE__;
    echo "</br>";

    //get file path directory
    echo __DIR__;
    echo "</br>";

    //show line number
    echo __LINE__;
    echo "</br>";

    //show php version
    echo phpversion();
    echo "</br>";

    // const value store
    const myName = "Faisal Ahmed";
    echo myName;
    echo "</br>";

    //genarate random number
    echo rand(1, 10);
    echo "</br>";

    //convert intiger to float number
    $number = 40.8;
    echo round($number);
    echo "</br>";

    //variable
    $name = "Faisal Ahmed FF"; // echo with html tag
    $age = 24;
    echo "hello world $name your age is:" . $age . '</br>';
    echo "</br>";

    //php array
    $students = array("faisal", "priya", "ripat", "sumaiya");
    //print array
    print_r($students);

    //find max number
    echo max(4, 45, 54, 154, 1);
    echo "</br>";

    //find min number
    echo min(4, 45, 54, 154, 1);
    echo "</br>";

    //show data type
    var_dump($name);

    //echo
    echo "hello ", "World  </br>";

    //print
    print "hello World";
    echo "</br>";

    //ternary oparetor
    $age = 10 < 9 ? "Faisal" : "Ahmed";
    echo $age;
    echo "</br>";

    //null check
    $names = NULL;
    $myName = "Faisal";
    echo $names ?? $myName;

    
    ?>
</body>

</html>