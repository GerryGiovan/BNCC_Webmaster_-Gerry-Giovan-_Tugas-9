<?php 

    require 'animal.php';

    $sheep = new Animal("shaun", "2", "false");

    echo $sheep->name . ' <br>'; // "shaun"
    echo $sheep->legs . ' <br>'; // 2
    echo $sheep->cold_blooded . ' <br>'; // false

    $sungokong = new Ape("kera sakti");
    $sungokong->yell(); // "Auooo"

    echo "<br>";

    $kodok = new Frog("buduk");
    $kodok->jump(); // "hop hop"
?>

