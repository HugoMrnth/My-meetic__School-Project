<?php 
require_once 'composants/header.php'; 
?>
    <main class="d-flex align-items-center mb-5">
        <div class=" my-5 mx-4 w-100 m-auto">
            <form action="" method="post" id="connexion" name="connexion" class="form py-5 px-5 w-25 m-auto border rounded border-4 border-dark">
                <div><h2 class="titre">Connexion</h2></div>
                <div class="form-group my-4">
                    <input type="email" id="email" name="email" class="form-control border-top-0" placeholder="Email">
                </div>
                <div class="form-group my-4">
                    <input type="password" id="pass" name="pass" class="form-control border-top-0" placeholder="Mot de passe">
                </div>
                <div class="form-group my-3">
                    <input type="submit" value="Connexion" class="btn btn-warning" >
                </div>
            </form>
        </div>
    </main>
    <script src="../assets/functionsJs/validation.js"></script>
    <script src="../assets/functionsJs/alert.js"></script>
    <script src="../assets/connexion.js"></script>
</body>
</html>