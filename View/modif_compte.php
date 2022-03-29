<?php
    require_once '../View/composants/header.php';
?>

<main class="d-flex">

</main>
    <div class="my-2 m-auto w-75 bg-white p-3 rounded">
                <div>
                    <h2>Modifier les informations du compte</h2>
                </div>

                <form action="" id="form" class=" w-50">
                    <div class="form-group my-3 col">
                            <select name="ville" id="ville" class="form-select border-top-0 ">
                                <option selected value="">Ville</option>
                                <option value="1">Paris</option>
                                <option value="2">Lyon</option>
                                <option value="3">Nantes</option>
                                <option value="4">Montpellier</option>
                                <option value="5">Marseille</option>
                            </select>
                        </div>
                    <div class="form-group my-3">
                        <input type="text" id="email" name="email" class="form-control border-top-0 ">
                    </div>

                    <div class="form-group my-3">
                        <input type="password" id="pass" name="pass" placeholder="Nouveau mot de passe" class="form-control border-top-0 ">
                    </div>
                    <div class="form-group my-3">
                        <input type="password" id="confirm" name="confirm" placeholder="Confirmer nouveau mot de passe" class="form-control border-top-0 ">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Modifier les infos" class="btn btn-warning my-3">
                    </div>
                </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../assets/functionsJs/dropdown.js"></script>
    <script src="../assets/functionsJs/validation.js"></script>
    <script src="../assets/modif_compte.js"></script>
</body>
</html>