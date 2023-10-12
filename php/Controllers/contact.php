<?php
  #  require('../Models/contact_ajouter');
  #  $ajout = add_contact();
  #  require('../Views/contact_ajouter');
  require('../connexion-db.php');
  if(empty($_GET['type'])){
    $_GET['type']='autre';
  }
  switch($_GET['type']){
    case 'ajout':
        $req = "INSERT INTO contact(nomcontact, emailcontact, messagecontact) VALUES (:nom, :mail, :msg)";
        $stmt = $PDO->prepare($req);
        $stmt->bindParam(':nom', $_POST['nom']);
        $stmt->bindParam(':mail', $_POST['email']);
        $stmt->bindParam(':msg', $_POST['message']);
        $stmt->execute();
        header('Location:../../contact.html');
        break;
    default:
    header('Location:../../accueil.html');

  }
?>