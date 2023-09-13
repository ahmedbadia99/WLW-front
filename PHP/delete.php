<?php

    include("connection.php");

    $json = array();
    //Update reunion
    $query = 'DELETE FROM immeuble WHERE idm = :id';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute([':id' => $_POST['id']]);
    
    echo "OK";

?>