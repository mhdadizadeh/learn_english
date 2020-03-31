<?php

require_once "functions.php";

session_destroy();

if( isset($_COOKIE['username']) && isset($_COOKIE['password']) ) {
    setcookie("username" , '' , time() - 60 );
    setcookie("password" , '' , time() - 60);
}

redirect("index.php");