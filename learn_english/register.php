<?php

require_once "functions.php";
$status = null;

//AuthLogout();
$word = "";
if( isPost() ) {
    extract($_POST);
    if( validation_required([$en , $fa ,$sn]) ) {

            $data = [
                "en" => $en ,
                "fa" => $fa,
                "sn" => $sn
            ];
            
            $conn = connectToDB();
            
            if( get_word($en , $conn)) {

         $word = get_word($en , $conn);

            } else {
                
                // $status = "this username is exists";    
                // userSave($data , $conn) ? redirect("login.php") : $status = "user not save plase try again" ;

            }
     
    } else {
        $status = "new word";
    }
}

require "views/adminpanel.view.php";