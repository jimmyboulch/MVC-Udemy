<?php

function getTestimonials() {
  
                try {
                 $bdd = new PDO('mysql:host=localhost;dbname=mvc udemy;charset=utf8', 'root', '');
             } catch (Exception $e) {
                 die('Erreur : ' . $e->getMessage());
             }
     
             $requete = $bdd->query('SELECT * FROM testimonials');
             return $requete;
         }

