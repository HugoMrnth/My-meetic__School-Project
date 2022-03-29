<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
require_once '../Model/bdd.php';
require_once '../Model/user.class.php';
require_once '../Model/log.class.php';

$connexion = new User();
// var_dump($connexion);
$user_check = $connexion->do_user_exists($email);
// var_dump(($user_check));
if($user_check) {
    $pass_check = $connexion->do_pass_match($email, $pass);
    if($pass_check) {
        $id = $connexion->get_id_from_email($email);
        
        // si on a le bon mp on lance un session et on save l'id
        $session_log = new LogActions();
        $session_log->logIn($id['id']);

        echo(json_encode(array(
            'check' => 'sucess',
            'message' => 'It is a sucess !'
        )));
    } else {
        echo(json_encode(array(
            'check' => 'failed',
            'message' => 'Invalid email or password'
        )));
    }
} else {
    echo(json_encode(array(
        'check' => 'failed',
        'message' => 'Invalid email or password'
    )));
}