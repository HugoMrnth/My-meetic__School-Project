<?php
require_once '../Controller/checkSession.php';
require_once 'composants/header.php'; 
?>
<main class="d-flex">
        <div class="my-2 m-auto w-75 bg-white p-3 rounded">
            <div>
                <h2>Compte</h2>
            </div>
            <div class="card my-2 m-auto w-50">
                <div class="card-header bg-dark text-white">
                    <h2 class="title"></h2>
                </div>
                <div class="card-body d-flex">
                    <img class="card-img-right" src="https://placekitten.com/g/200/300" alt="Card image cap">
                    <ul class="list-group list-group-flush">
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="modal fade show" id="modif" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
        role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Entrez votre mot de passe</h5>
                </div>
                <div class="modal-body">
                <form action="" method="POST" class="d-flex flex-column align-items-center" id="modal-form">
                        <input type="password" id="pass" name="pass">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../assets/functionsJs/dropdown.js"></script>
    <script src="../assets/functionsJs/checkdate.js"></script>
    <script src="../assets/functionsJs/validation.js"></script>
    <script src="../assets/functionsJs/alert.js"></script>
    <script src="../assets/user_compte.js"></script>
</body>
</html>