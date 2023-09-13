<?php

    include("connection.php");
   
    $apercu= $_POST['apercu'];
    $appartement= $_POST['appartement'];
    $villa= $_POST['villa'];
    $riad= $_POST['riad'];
    $localcommercial= $_POST['localcommercial'];
    $bureau= $_POST['bureau'];
    $terrain= $_POST['terrain'];
    $maisonhote= $_POST['maisonhote'];
    $users= $_POST['users'];
    $name = $_POST['name'];

    $query = "INSERT INTO role(`name`, `Appartement`, `Villa`, `Riad`, `Bureau`, `Maison_hotes`, `Terrain`, `Local_Commercial`, `Apercu`, `Users`) VALUES (:name, :appartement, :villa, :riad, :bureau, :maisonhote, :terrain, :localcommercial, :apercu , :users)";

        $pdoStat = $conn->prepare($query);

        $pdoStat->execute([
            ':name' => $name,
            ':appartement' => $appartement,
            ':villa' => $villa,
            ':riad' => $riad,
            ':bureau' => $bureau,
            ':maisonhote' => $maisonhote,
            ':terrain' => $terrain,
            ':localcommercial' => $localcommercial,
            ':apercu' => $apercu,
            ':users' => $users
        ]);



    


    echo 'OK';



    
        
    


?>