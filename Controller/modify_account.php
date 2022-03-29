<?php
    session_start();    
    $id = $_SESSION['id'];

    
    require_once '../Model/bdd.php';
    require_once '../Model/user.class.php';

    $ville = htmlspecialchars($_POST['ville']);
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['pass']);
    $confirm = htmlspecialchars($_POST['confirm']);
    $modify = new User();
    if($confirm === $pass && !empty($pass)) {

        $result = $modify->modify_account($pass, $email, $ville, $id);
        
        if($result) {
            echo(json_encode(array(
                'check' => "sucess"
            )));
        } else {
            echo(json_encode(array(
                'check' => "failed"
            )));
        }
    } else {
        echo(json_encode(array(
            'check' => "no match"
        )));
    }
