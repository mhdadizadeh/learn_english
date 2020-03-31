<?php

require_once "functions.php";


$status = true;
$conn = connectToDB();

if (isPost()) {
    extract($_POST);

    if (validation_required([$en, $fa])) {
        $saved_word = get_tr($en, $conn);
        if (!$saved_word) {
        $new_word = add_tr([$en, $fa, $sn], $conn);
        }
    }
}

$all_tr = get_all_tr( $conn);

require 'views/index.view.php';
