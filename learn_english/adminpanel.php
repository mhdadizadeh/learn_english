<?php

require_once "functions.php";

AuthLogin();

$username = $_SESSION['username'];

require 'views/adminpanel.view.php';