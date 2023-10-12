<?php
    function add_contact(){
        global $PDO;
        $response = $PDO->prepare('SELECT * from utilisateur');
        $response->execute();
        $data = $response->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
?>