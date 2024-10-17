<?php

if ($_SERVER["REQUEST_METHOD"]) {
    $firstname = htmlspecialchars($_POST("firstname"));
    $lastname = htmlspecialchars($_POST["lastname"]);
    $f_fruit = htmlspecialchars(($_POST["f_fruit"]));

    echo "These are the Data, that the user submitted.";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $f_fruit;
} else {
    header("Location: ../index.php");
}