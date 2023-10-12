<?php

    function add_user($hashed_password){
        global $PDO;
        $req = "INSERT INTO utilisateur(nomuser, prenomuser, mdp) VALUES (:nom, :prenom, :mdp)";
        $stmt = $PDO->prepare($req);
        $stmt->bindParam(':nom', $_POST['nom']);
        $stmt->bindParam(':prenom', $_POST['prenom']);
        $stmt->bindParam(':mdp', $hashed_password);
        $stmt->execute();
    }
?>