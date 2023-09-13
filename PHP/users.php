<?php 
    
    include("connection.php");

    $json = array();

    $query = 'SELECT login.id , login.Username , login.Email , role.name FROM login INNER JOIN role ON role.id = login.idrole';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute();

    $riads = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

    foreach ($riads as $riad) 
    {
        $json[]=$riad;
    }

    echo json_encode($json);


?>