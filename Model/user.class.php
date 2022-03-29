<?php
    require_once 'bdd.php';

    class User {
        // function d'ajout user
        public function add_user_to_db ($nom, $prenom, $anniv, $genre, $city, $email, $password) {
    
                $password = sha1($password);
                $request = MyDatabase::$db->prepare("INSERT INTO user(nom, prenom, anniversaire, id_genre, id_ville, email, password) VALUES(:nom, :prenom, :anniversaire, :genre, :ville, :email, :password)");
                return $request->execute(array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'anniversaire' => $anniv,
                    'genre' => $genre,
                    'ville' => $city,
                    'email' => $email,
                    'password' => $password
                ));
        }
        // function de check user
        public function do_user_exists($email) {
            if(!empty($email)) {
                $request = MyDatabase::$db->prepare('SELECT * FROM user WHERE email = :email');
                $request->execute(array(
                    'email' => $email
                ));
                $result = $request->fetch();
                if(!empty($result)) {
                    return true;
                } else {
                    return false;
                }
            }
        }
        // function de check du password
        public function do_pass_match($email, $password) {
            if(!empty($email) && !empty($password)) {
                $password = sha1($password);
                $request = MyDatabase::$db->prepare('SELECT password FROM user WHERE email = :email');
                $request->execute(array(
                    'email' => $email
                ));
                $result = $request->fetch();
                if($result["password"] == $password) {
                    return true;
                } else{
                    return false;
                }
            }
        }
        public function get_id_from_email($email){
            if(!empty($email)) {
                $request = MyDatabase::$db->prepare('SELECT id FROM user WHERE email = :email');
                $request->execute(array(
                    'email' => $email
                ));
                return $request->fetch();
           }
        }
    
        public function get_user_info($id) {
            if(isset($id)) {
                $request = MyDatabase::$db->prepare('SELECT nom, prenom, anniversaire, email, genre.genre AS genre, ville.name AS ville, GROUP_CONCAT(" ", hobby.name) AS hobby FROM user LEFT JOIN join_hobby ON user.id = join_hobby.id_user LEFT JOIN hobby ON join_hobby.id_hobby = hobby.id INNER JOIN genre ON user.id_genre = genre.id INNER JOIN ville ON user.id_ville = ville.id WHERE user.id = :id');
                $request->execute(array(
                    'id' => $id
                ));
                return $request->fetchAll();
    
            }
        }
        public function insert_hobby($id_hobby, $id_user) {
            if(isset($id_hobby)) {
                $request = MyDatabase::$db->prepare('INSERT INTO join_hobby(id_user, id_hobby) VALUES(:user, :hobby)');
                return $request->execute(array(
                    'user' => $id_user,
                    'hobby' => $id_hobby
                ));
                
            }
        }
        public function modify_account($pass, $email, $ville, $id) {

            $passSec = sha1($pass);
            $villR = "";
            if(!empty($ville)) {
                $villR = ", id_ville = '" . $ville . "'";
            }
            $sqlR = "UPDATE user SET email = '" . $email . "', password ='" . $passSec . "'" . $villR . "WHERE id = " . $id; 
            $request = MyDatabase::$db->prepare($sqlR);

            return $request->execute();
        }
    }