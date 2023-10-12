<?php

    require('config-db.php');
    $PDO=new PDO("$DBDRIVER:host=$DBHOST;dbname=$DBNAME", $DBUSER, $DBPASSWORD);

?> 