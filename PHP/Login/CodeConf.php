<?php 
    session_start();
    include("../connection.php");

    $json = array();
    $email = $_POST['email'] ;
    $code = $_POST['code'] ;
    $query = 'SELECT * FROM login WHERE Email = :email AND Code=:code';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute([':email' => $email,':code' => $code]);

    $logins = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

    foreach ($logins as $login) 
    {
        $json[]=$login;
    }
    //$_SESSION["Email"] = $logins[0]
    echo json_encode($json);

    


?>