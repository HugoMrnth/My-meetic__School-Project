<?php
    require_once '../Controller/checkSession.php';
    require_once 'composants/header.php';

?>
<main class="d-flex">
        <div class="my-2 m-auto w-75 bg-white p-3 rounded">
            <div>
                <h2>Recherche</h2>
            </div>
            <div class="my-2 search-container">
                <form action="" method="POST" id="formSearch" class="d-flex w-100">    
                    <input type="text" class="my-3 form-control w-50" id="search" name="search">
                    <select name="categorie" id="categorie" class="my-3 w-25 mx-2 form-select">
                        <option value="city">Par ville</option>
                        <option value="hobby">Par hobby</option>
                    </select>
                    <select name="genre" id="genre" class="my-3 mx-2 w-25 form-select">
                        <option value="">Genre</option>
                        <option value="femme">Femme</option>
                        <option value="homme">Homme</option>
                        <option value="autre">Autre</option>
                    </select>
                    <select name="age" id="age" class="my-3 mx-2 w-25 form-select">
                        <option value="">Tout age</option>
                        <option value="18">18/25</option>
                        <option value="25">25/35</option>
                        <option value="35">35/45</option>
                        <option value="45">45+</option>
                    </select>
                </form>
                <div class="tag-container border rounded p-3 w-50">
                
                </div>
            </div>
            <div class="carousel slide my-3 w-50 m-auto">
                    <div id="result_container" class="carousel-inner  w-75 m-auto">                        
                    </div>
                    <div class="arrow-container">
                        <a class="carousel-control-prev btn-prev" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon  text-dark" style="filter: invert(100%);" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next btn-next" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" style="filter: invert(100%);" aria-hidden="true"></span>
                        </a>
                    </div>        
            </div>
            
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../assets/functionsJs/dropdown.js"></script>
    <script src="../assets/functionsJs/checkdate.js"></script>
    <script src="../assets/sexy_time.js"></script>
    <script src="../assets/functionsJs/carousel.js"></script>
</body>
</html>