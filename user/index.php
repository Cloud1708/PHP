<?php

session_start();

if (isset($_SESSION["id"])){

    $user_id = $_SESSION["id"];

    include("../connections.php");

    $get_record = mysqli


}else{

    echo "You must login first! <a href='../login.php'>Login now!</a>";


}

?>

