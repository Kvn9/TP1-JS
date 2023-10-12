<?php
  require('../connexion-db.php');
  if(empty($_GET['type'])){
    $_GET['type']='autre';
  }
  switch($_GET['type']){
    case 'ajout':
        require('../Models/contact.php');
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