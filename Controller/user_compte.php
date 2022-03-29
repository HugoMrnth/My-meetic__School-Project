<?php
    session_start();
    // var_dump($_SESSION);
    $id = $_SESSION['id'];
    require_once '../Model/bdd.php';
    require_once '../Model/user.class.php';

    $connect_user = new User();
    $results = $connect_user->get_user_info($id);
    $_SESSION["email"] = $results[0]["email"];
    // var_dump($_SESSION['email']);
    echo(json_encode(array(
        'infos' => $results,
        'id' => $id
    )));