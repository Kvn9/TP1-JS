<?php

    function add_user(){
        global $PDO;
        $req = "INSERT INTO utilisateur(nomuser, prenomuser, mdp) VALUES (:nom, :prenom, :mdp)";
        $stmt = $PDO->prepare($req);
        $stmt->bindParam(':nom', $_POST['nom']);
        $stmt->bindParam(':prenom', $_POST['prenom']);
        $stmt->bindParam(':mdp', $_POST['motdepasse']);
        $stmt->execute();
        return true;
    }
?>