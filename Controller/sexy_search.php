<?php
    session_start();
    $submit_array = json_decode($_POST['submit'], true);
    // var_dump($submit_array);

    $userId = $_SESSION['id'];
    require_once '../Model/bdd.php';
    require_once '../Model/search.class.php';
    $user = new searchUtil();

    $result = $user->search($submit_array, $userId);

    echo(json_encode(array(
        'resultats' => $result
    )));

