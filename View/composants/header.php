<?php
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://img.icons8.com/ios/50/000000/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>My_Meetic</title>
</head>
<body>
    <header>
    <?php
        if(isset($_SESSION['id'])) { ?>
    <nav class="navbar navbar-light bg-dark px-5 mb-3">
        <a class="navbar-brand" href="#">
            <img src="https://img.icons8.com/ios/50/000000/logo.png"/ class="bg-white rounded">
        </a>
        <div class="btn-container d-flex">
            <div class="border-white border-2 btn btn-warning">
                <a href="sexy_time.php" class="text-reset text-decoration-none" >Sexy time</a>
            </div>
            <div class="dropdown mx-2">
                <button class="btn btn-warning border-white border-2 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Options
                </button>
                <div class="dropdown-menu my-1" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="compte.php">Compte</a>
                    <!-- <a class="dropdown-item" href="#">Recherche</a> -->
                    <a href="../Controller/deconnexion.php" class="dropdown-item" >Deconnexion</a>

                    <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                </div>
            </div>
        </div>        
    </nav>
        <?php } else {?>
    <nav class="navbar navbar-light bg-dark px-5 mb-3">
        <a class="navbar-brand" href="#">
            <img src="https://img.icons8.com/ios/50/000000/logo.png"/ class="bg-white rounded">
        </a>
        <div class="btn-container">
            <a href="inscription.php" class="border-white border-2 btn btn-warning">S'inscrire</a>
            <a href="connexion_page.php"class="border-white border-2 btn btn-warning">Se connecter</a>
        </div>        
    </nav>
    <?php }?>
    
    </header>