<?php
  /* Connexion à la BDD */
  require('../connexion-db.php');

  /* Check si il y a une information dans le GET */
  if(empty($_GET['type'])){
    $_GET['type']='autre';
  }

  /* Gestion des instructions selon si c'est un ajout donc un INSERT ou une requete donc un SELECT et si jamais il y a un défaut dans le GET redirection vers la page d'accueil */
  switch($_GET['type']){
    case 'ajout':
        require('../Models/contact.php');
        /* Check si les contraintes dans la bdd sont bien respectés par l'utilisateur */
        if(mb_strlen($_POST['nom'], 'UTF-8') <= 50 && mb_strlen($_POST['email'], 'UTF-8') <= 100 && mb_strlen($_POST['message'], 'UTF-8') <= 255){
          add_contact();
          $content = '<p id="success">Votre message a bien été envoyé !</p>';
        } else {
          $content = '<p id="error">Votre message n\'a pas été envoyé</p>';
        }
        require('../Views/contact.php');
        break;
    default:
    header('Location:../../accueil.html');

  }
?>