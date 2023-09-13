<?php 
    session_start();
    include("../connection.php");

    $json = array();

    $query = 'SELECT * FROM login WHERE Email = :Username AND Password = :Password';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute([':Username' => $_POST['user'],':Password' => $_POST['Password']]);

    $riads = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

    foreach ($riads as $riad) 
    {
        $json[]=$riad;
    }

    if(count($riads)>0)
    {
        $_SESSION["id"] = $riads[0]["id"];
    }
    
    
    
    echo json_encode($json);


?>