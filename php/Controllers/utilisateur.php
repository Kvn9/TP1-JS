<?php
  require('../connexion-db.php');
  if(empty($_GET['type'])){
    $_GET['type']='autre';
  }
  switch($_GET['type']){
    case 'ajout':
        require('../Models/utilisateur.php');

        // Fonction Hachage de Mdp avec Bcrypt
        $hashed_password = password_hash($_POST['motdepasse'], PASSWORD_BCRYPT);
        /* Check si les contraintes dans la bdd sont bien respectés par l'utilisateur */
        if(mb_strlen($_POST['nom'], 'UTF-8') <=50 && mb_strlen($_POST['prenom'], 'UTF-8') <=50 && mb_strlen($hashed_password, 'UTF-8') <=200){
          add_user($hashed_password);
          $content = '<p id="success">Félicitation vous êtes inscrit !</p>';
        }
          else $content = '<p id="error">Vous avez une erreur dans votre formulaire</p>';
          require('../Views/utilisateur.php');
        break;
    case 'connexion':
      require('../Models/utilisateur.php');
      $data = check_user();
      if(isset($data[0]['mdp'])){
        if(password_verify($_POST['motdepasse'],$data[0]['mdp'])) $content_connexion = '<p>Connexion réussi</p>';
      }
      else $content_connexion = '<p>Connexion échoué</p>';
      require('../Views/utilisateur.php');
      break;

    default:
    header('Location:../../accueil.html');

  }
?>