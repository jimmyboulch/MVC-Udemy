<?php

           // Traitements - Récupération des données
           function getUsers(){
           try {
            $bdd = new PDO('mysql:host=localhost;dbname=mvc udemy;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $requete = $bdd->query('SELECT * FROM users');
        // pour que ça retourne tous les utilisateurs :
        return $requete;
    }
       
   