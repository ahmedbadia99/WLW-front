<?php 
    session_start();
    include("../connection.php");

    $json = array();
    $email = $_POST['email'] ;
    $pass = $_POST['password'] ;
    
    //$numb = rand(10000,99999);
    $sql = "UPDATE login SET Password='$pass' WHERE Email = '$email'";
    $conn->exec($sql);
        //mail($email, "code confirmation", "Votre code confirmation est : ".$numb);
    echo "password updated";


?>