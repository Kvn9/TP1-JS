<?php
  require('../connexion-db.php');
  if(empty($_GET['type'])){
    $_GET['type']='autre';
  }
  switch($_GET['type']){
    case 'ajout':
        $req = "INSERT INTO utilisateur(nomuser, prenomuser, mdp) VALUES (:nom, :prenom, :mdp)";
        $stmt = $PDO->prepare($req);
        $stmt->bindParam(':nom', $_POST['nom']);
        $stmt->bindParam(':prenom', $_POST['prenom']);
        $stmt->bindParam(':mdp', $_POST['motdepasse']);
        $stmt->execute();
        header('Location:../../inscription.html');
        break;
    default:
    header('Location:../../accueil.html');

  }
?>