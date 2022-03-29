<?php
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $anniv = htmlspecialchars($_POST['anniversaire']);
    $genre = $_POST['genre'];
    $ville = $_POST['ville'];
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['pass']);
    $hobby = htmlspecialchars($_POST['hobby']);
    $hobby2 = htmlspecialchars($_POST['hobby2']);
    
    // require_once '../Model/bdd.php';
    require_once '../Model/bdd.php';
    require_once '../Model/user.class.php';


    $register = new User();

    $check = $register->do_user_exists($email);

    if($check) {
        echo(json_encode(array('check' => 'Email already exist')));
    } else {
        $result = $register->add_user_to_db($nom, $prenom, $anniv, $genre, $ville, $email, $pass);
        $id = MyDatabase::$db->lastInsertId();
        $hobbyR = $register->insert_hobby($hobby, $id);
        $hobbyR2 = $register->insert_hobby($hobby2, $id);
        if($result AND $hobbyR) {
            echo(json_encode(array('success' =>'Inscription')));
            // echo 'yeah';
        } else {
            echo(json_encode(array('success' =>'Failed')));
            // echo 'pas yeah';
    
        }
    }

    

    // hello@world.fr