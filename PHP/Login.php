<?php 
    session_start();
    include("connection.php");

    $json = array();

    $query = 'SELECT * FROM user WHERE (Email = :Username OR Username = :Username) AND Password = :Password';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute([':Username' => $_POST['user'],':Password' => $_POST['Password']]);

    $users = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) 
    {
        $json[]=$user;
    }

    if(count($users)>0)
    {
        $_SESSION["id"] = $users[0]["id"];
    }
    
    
    
    echo json_encode($json);


?>