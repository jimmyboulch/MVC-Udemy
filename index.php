<?php

    // Routeur appelle le bon controller
    // Controller fait le lien entre le modele et la vue
        // Modele
        // Vue
    // => page finale

            // require ('modeleUtilisateur.php');
            // on stocke les résultats de modele utilisateur dans la variable requete: 
            // $requete = getUsers();
            // Affichage
            // require('vueAccueil.php');

            require('controller/controller.php');
try{
            // on vérifie qu'il existe une variable page
            if(isset($_GET['page'])){
                // si elle existe et qu'elle est égale à accueil
                if($_GET['page'] == 'accueil') {
                    // ça renvoie la fonction home du controller
                    home();
                }
                // sinon même chose avec avis
                else if($_GET['page'] == 'avis') {
                    testimonials();
                }
                else {
                    throw new Exception("Cette page n'existe pas ou a été supprimée.");
                }
            }
            else {
                home();
            }
           
        }
        catch (Exception $e) {
            // die('Erreur : ' . $e->getMessage());
            $error = $e->getMessage();
            require('view/errorView.php');
        }

