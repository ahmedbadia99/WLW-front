<?php

    include("connection.php");

    $json = array();
    //Update reunion
    $query = 'DELETE FROM login WHERE id = :id';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute([':id' => $_POST['id']]);
    
    echo "OK";

?>