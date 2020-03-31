<?php
require_once "functions.php";

// Your Code
$conn = connectToDB();
$all_tr = get_all_tr( $conn);
require "views/index.view.php";