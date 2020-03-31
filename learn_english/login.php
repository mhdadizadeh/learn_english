<?php

require_once "functions.php";

AuthLogout();
$status = null;

if( isPost() ) {
    extract($_POST);

    if( validation_required([$username , $password]) ) {
        $password = hash_hmac("sha256" , $password , "secert");
        $conn = connectToDB();
        $user = userGet($username , $conn);
        if( $user ) {
            if( $password == $user->password ) {
                if($_POST['remember'] == true ) {
                    setcookie("username" , $username , time() + 60 * 60 * 24 * 7);
                    setcookie("password" , $password , time() + 60 * 60 * 24 * 7);
                }
                $_SESSION['username'] = $username;
                redirect("adminpanel.php");
            }
        } else {
            $status = "this user not exists";
        }
    }
}


require 'views/login.view.php';