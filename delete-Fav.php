<?php
session_start();

if( !isset($_GET["likeId"]) ){
    header("Refresh: 0; url=./myFav.php");
    exit();
}

unset($_SESSION['like'][$_GET["likeId"]]);
// print_r($_SESSION['like']);
array_values($_SESSION['like']);

header("Refresh: 0; url=./myFav.php");

exit();