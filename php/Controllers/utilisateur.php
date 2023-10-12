<?php
  require('../connexion-db.php');
  if(empty($_GET['type'])){
    $_GET['type']='autre';
  }
  switch($_GET['type']){
    case 'ajout':
        require('../Models/utilisateur.php');
        if(add_user()) $content = "Félicitation vous êtes inscrit !";
          else $content = "Il y a une erreur dans votre formulaire !";
          require('../Views/utilisateur.php');
        break;
    case 'connexion':

    default:
    header('Location:../../accueil.html');

  }
?>