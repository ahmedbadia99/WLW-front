<?php 
    
    include("connection.php");

    $id= $_POST['id'];
    $password= $_POST['password'];
    $email= $_POST['email'];
    $username= $_POST['username'];
    $idrole= $_POST['idrole'];

    $query = 'UPDATE login SET Email=:email,Username=:username,Password=:password,idrole=:idrole WHERE id=:id';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute([
        ':id' => $id,
        ':email' => $email,
        ':username' => $username,
        ':password' => $password,
        ':idrole' => $idrole
    ]);


    
    echo "OK";


?>