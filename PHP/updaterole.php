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
    $id = $_POST['id'];

    $query = 'UPDATE role SET id=:id,name=:name,Appartement=:appartement,Villa=:villa,Riad=:riad,Bureau=:bureau,Maison_hotes=:maisonhote,Terrain=:terrain,Local_Commercial=:localcommercial,Apercu=:apercu,Users=:users WHERE id=:id';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute([
        ':id' => $id,
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


    
    echo "OK";


?>