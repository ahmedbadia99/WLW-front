<?php 
    
    include("connection.php");

    $json = array();

    $query = 'SELECT anbieter.AID,anbieter.Anbieter_Name,anbieter.Adresse,anbieter.Telefonnummer,anbieter.Website,anbieter.Liefergebiet,anbieter.Gründung,anbieter.Mitarbeiter,anbieter.Identifikationsnummer,anbieter.Handelsregister,anbieter.Email,kategorie.Kategorie FROM anbieter INNER JOIN kategorie ON anbieter.KID = kategorie.KID';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute();

    $anbieters = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

    foreach ($anbieters as $anbieter) 
    {
        $json[]=$anbieter;
    }

    echo json_encode($json);


?>