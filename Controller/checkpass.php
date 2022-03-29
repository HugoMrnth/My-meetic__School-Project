<?php
session_start();
$email = $_SESSION['email'];
$pass = htmlspecialchars($_POST['pass']);
require_once '../Model/bdd.php';
require_once '../Model/user.class.php';

$check = new User();
$passCheck = $check->do_pass_match($email, $pass);

if($passCheck) {
    echo(json_encode(array(
        'check' => "sucess"
    )));
} else {
    echo(json_encode(array(
        'check' => "failed"
    )));
}
