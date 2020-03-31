<?php


function connectToDB()
{
    try {
        return new PDO("mysql:host=localhost;dbname=p20", "root", "");
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function userGet($username, $conn)
{
    $statment = $conn->prepare("SELECT * FROM users WHERE username = :username");
    $statment->bindParam("username", $username);
    $statment->execute();

    $user = $statment->fetch(PDO::FETCH_OBJ);

    return $user ? $user : false;
}

function userSave($data, $conn)
{
    extract($data);
    $statment = $conn->prepare("INSERT INTO users (fullname , username , email , password ) VALUES (:fullname , :username , :email , :password )");
    $statment->bindParam("fullname", $fullname);
    $statment->bindParam("username", $username);
    $statment->bindParam("email", $email);
    $statment->bindParam("password", $password);
    return $statment->execute() ? true : false;
}

function get_tr($en, $conn)
{

    $statment = $conn->prepare("SELECT * FROM words WHERE en = :en");
    $statment->bindParam("en", $en);
    $statment->execute();
    $tr = $statment->fetchAll();
    return  $tr;
}
function add_tr($tr, $conn)
{

    try {
        $statment = $conn->prepare("INSERT INTO words (en, fa, sn) VALUES (:en , :fa , :sn)");
        $statment->bindParam("en", $tr['0']);
        $statment->bindParam("fa", $tr['1']);
        $statment->bindParam("sn", $tr['2']);
        $statment->execute();
        $statment = $conn->prepare("SELECT * FROM words WHERE en = :en");
        $statment->bindParam("en", $tr['0']);
        $statment->execute();
        $tr = $statment->fetchAll();
        return  $tr;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function get_all_tr($conn)
{

    $statment = $conn->prepare("SELECT * FROM words");
    $statment->execute();
    return  $statment->fetchAll();
}
