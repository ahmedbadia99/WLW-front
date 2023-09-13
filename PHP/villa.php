<?php 
    
    include("connection.php");

    $json = array();

    $query = 'SELECT * FROM immeuble INNER JOIN immeubleimage on immeubleimage.idimmeuble=immeuble.idm INNER JOIN image ON image.id = immeubleimage.idimage WHERE immeuble.Type="Villa" GROUP BY immeuble.idm ORDER BY immeuble.idm DESC';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute();

    $riads = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

    foreach ($riads as $riad) 
    {
        $json[]=$riad;
    }

    echo json_encode($json);


?>