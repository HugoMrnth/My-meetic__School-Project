<?php
    require_once 'bdd.php';


    class searchUtil {

        public function search($arr, $user) { 
            $citySearch = "";
            $hobbySearch = "";
            foreach($arr as $key => $value) {
                if($key == "ville") {
                    foreach($value as  $key_city => $value_city){
                        if($key_city === 0) {
                            $citySearch .= "AND (ville.name LIKE '" . $value_city . "%'";
                        } else{
                            $citySearch .= "OR ville.name LIKE '" . $value_city . "%'";
                        }
                    }
                } elseif($key == 'hobby') {
                    foreach($value as $key_hobby => $value_hobby){
                        if($key_hobby === 0) {
                            $hobbySearch .= "AND (hobby.name LIKE '" . $value_hobby . "%'";
                        } else{
                            $hobbySearch .= "OR hobby.name LIKE '" . $value_hobby . "%'";
                        }
                    }
                } elseif($key == 'genre') {
                    foreach($value as $key_genre => $value_genre) {
                        $genreSearch = "AND genre.genre LIKE '" . $value_genre . "%'";
                    }
                } elseif($key == "age") {
                    foreach($value as $key_age => $value_age) {
                        switch($value_age) {
                            case "18" :
                                $ageSearch = "AND FLOOR(DATEDIFF(CURRENT_DATE(), anniversaire)/365.25) BETWEEN 18 AND 25";
                                break;
                            case "25" : 
                                $ageSearch = "AND FLOOR(DATEDIFF(CURRENT_DATE(), anniversaire)/365.25) BETWEEN 25 AND 35";
                                break;
                            case "35" : 
                                $ageSearch = "AND FLOOR(DATEDIFF(CURRENT_DATE(), anniversaire)/365.25) >= 35 AND FLOOR(DATEDIFF(CURRENT_DATE(), anniversaire)/365.25) <= 45";
                                break;
                            case "45" : 
                                $ageSearch = "AND FLOOR(DATEDIFF(CURRENT_DATE(), anniversaire)/365.25) >= 45";
                                break;
                            default;
                                break;
                        }
                    }
                }
            }
            // var_dump($ageSearch);
            if(!empty($citySearch)){
                $citySearch .= ")";
            }
            if(!empty($hobbySearch)){
                $hobbySearch .= ")";
            }


            $reqSQL = 'SELECT user.id, nom, prenom, anniversaire, ville.name AS ville, GROUP_CONCAT(" ", hobby.name) AS hobby, genre.genre AS genre FROM user INNER JOIN genre ON user.id_genre = genre.id LEFT JOIN join_hobby ON user.id = join_hobby.id_user LEFT JOIN hobby ON join_hobby.id_hobby = hobby.id INNER JOIN ville ON user.id_ville = ville.id WHERE user.id != :utili '. $citySearch . ' ' . $hobbySearch . $genreSearch . $ageSearch .  ' GROUP BY user.id';
            $request = MyDatabase::$db->prepare($reqSQL);
                    $request->execute(array(
                        'utili' => $user
                    ));
            return $result = $request->fetchAll();
        }
        

    }