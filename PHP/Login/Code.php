<?php 
    session_start();
    include("../connection.php");

    $json = array();
    $email = $_POST['email'] ;
    $query = 'SELECT * FROM login WHERE Email = :email ';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute([':email' => $email]);

    $logins = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

    foreach ($logins as $login) 
    {
        $json[]=$login;
    }
    //$_SESSION["Email"] = $logins[0]
    //echo json_encode($json);

    if (count($json)>0) {
        $numb = rand(10000,99999);
        $sql = "UPDATE login SET Code=$numb WHERE Email = '$email'";
        $conn->exec($sql);
        //mail($email, "code confirmation", "Votre code confirmation est : ".$numb);
    }
    else
    {
        echo "1";
    }


?>