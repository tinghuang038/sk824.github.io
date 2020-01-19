<?php
session_start();

if( isset($_POST["id"]) ){
    unset($_SESSION['cart'][$_POST["id"]]);
}
