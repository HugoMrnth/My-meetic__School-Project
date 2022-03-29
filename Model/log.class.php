<?php

    class LogActions {
        public function __construct(){
            session_start();
        }

        public function logIn($id) {
            $_SESSION['id'] = $id;
        }
        public function logOut() {
            session_unset();
            session_destroy();
            header('Location: ../View/connexion_page.php');
        }
        

        public function checkIfSession() {
            if(!isset($_SESSION['id'])) {
                header('Location: connexion_page.php');
            }
        }
    }