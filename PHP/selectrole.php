<?php 
include("connection.php");

$id = $_POST["id"];

$query = 'SELECT * FROM role WHERE id = :id';

$pdoStat = $conn->prepare($query);  

$pdoStat->bindValue(':id', $id);

$pdoStat->execute();

$roles = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

 foreach ($roles as $role) 
    {
        $json[]=$role;
    }

    echo json_encode($json);


?>