<?php

session_start();

if(isset($_SESSION['User_Id']))
{
    unset($_SESSION['User_Id']);
}

$_SESSION['cart'] = [];
$_SESSION['on_cart'] = [];

header("Location: newindex.php");
die;