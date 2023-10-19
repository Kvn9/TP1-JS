<?php
    /* Fonction pour insérer les données de contact dans la BDD */
    function add_contact(){
        global $PDO;
        $req = "INSERT INTO contact(nomcontact, emailcontact, messagecontact) VALUES (:nom, :mail, :msg)";
        $stmt = $PDO->prepare($req);
        $stmt->bindParam(':nom', $_POST['nom']);
        $stmt->bindParam(':mail', $_POST['email']);
        $stmt->bindParam(':msg', $_POST['message']);
        $stmt->execute();
    }
?>