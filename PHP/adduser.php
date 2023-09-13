<?php

    include("connection.php");
   
    $username= $_POST['username'];
    $email= $_POST['email'];
    $role= $_POST['role'];
    $password= $_POST['password'];
    $code=$_POST['code'];
    

    $query = "INSERT INTO login(`Email`, `Username`, `Password`, `Code`, `idrole`) VALUES (:email, :username, :password, :code, :idrole)";

        $pdoStat = $conn->prepare($query);

        $pdoStat->execute([
            ':email' => $email,
            ':username' => $username,
            ':password' => $password,
            ':code' => $code,
            ':idrole' => $role
        ]);



    


    echo 'OK';



    
        
    


?>