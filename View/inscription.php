<?php 
require_once 'composants/header.php'; 
?>
    <main class="d-flex">
        <div class=" my-4 mx-4 w-100 m-auto">
                <form action="" method="post" id="register" name="register" class="form p-3 w-25 m-auto border rounded border-4 border-dark">
                    <div class=""><h2 class='titre'>Inscription</h2></div>
                    <div class="row">
                        <div class="form-group my-3 col">
                            <input type="text" id="nom" name="nom" placeholder="Nom" class="form-control border-top-0 ">
                            <!-- <div class="invalid-feedback">nop</div> -->
                        </div>
                        <div class="form-group my-3 col">
                            <input type="text" id="prenom" name="prenom" placeholder="Prénom" class="form-control border-top-0 ">
                        </div>

                    </div>
                    <div class="form-group my-3">
                        <label for="birthdate" class="form-label">Date de naissance</label>
                        <input type="date" id="anniversaire" name="anniversaire" placeholder="date de naissance" class="form-control border-top-0 ">
                    </div>
                    <div class="row">
                        <div class="form-group my-3 col">
                            <select name="genre" id="genre" class="form-select border-top-0 ">
                                <option selected value="">Genre</option>
                                <option value="1">Femme</option>
                                <option value="2">Homme</option>
                                <option value="3">Autre</option>
                            </select>
                        </div>

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
                    </div>
                    <div class="row">
                        <div class="form-group my-3 col">
                            <select name="hobby" id="hobby" class="form-select border-top-0 ">
                                <option selected value="">Hobby</option>
                                <option value="1">Cuisine</option>
                                <option value="2">Bar</option>
                                <option value="3">Musées</option>
                                <option value="4">Cinema</option>
                                <option value="5">Sport</option>
                                <option value="6">Voyages</option>
                                <option value="7">Musique</option>
                                <option value="8">Lecture</option>
                                <option value="9">Nature</option>
                                <option value="10">Bricolage</option>
                            </select>
                        </div>
                        <div class="form-group my-3 col">
                            <select name="hobby2" id="hobby2" class="form-select border-top-0 ">
                                <option selected value="">Hobby n°2</option>
                                <option value="1">Cuisine</option>
                                <option value="2">Bar</option>
                                <option value="3">Musées</option>
                                <option value="4">Cinema</option>
                                <option value="5">Sport</option>
                                <option value="6">Voyages</option>
                                <option value="7">Musique</option>
                                <option value="8">Lecture</option>
                                <option value="9">Nature</option>
                                <option value="10">Bricolage</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group my-3">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control border-top-0 ">
                    </div>
                    <div class="form-group my-3">
                        <input type="password" id="pass" name="pass" placeholder="Mot de passe" class="form-control border-top-0 ">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="S'inscrire" class="btn btn-warning my-3">
                    </div>
                </form>
        </div>
    </main>



            <!-- scripts -->
    <script src="../assets/functionsJs/checkdate.js"></script>
    <script src="../assets/functionsJs/alert.js"></script>
    <script src="../assets/functionsJs/validation.js"></script>
    <script src="../assets/register.js"></script>
</body>
</html>