<?php 
include("connection.php");

$id = $_POST["id"];

$query = 'SELECT * FROM login WHERE id = :id';

$pdoStat = $conn->prepare($query);  

$pdoStat->bindValue(':id', $id);

$pdoStat->execute();

$users = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

 foreach ($users as $user) 
    {
        $json[]=$user;
    }

    echo json_encode($json);


?>