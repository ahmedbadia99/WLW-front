<?php

    include("connection.php");
   
    $Titre= $_POST['Titre'];
    $Desc= $_POST['Desc'];
    $Prix= $_POST['Prix'];
    $Ref= $_POST['Ref'];
    $Superficie= $_POST['Superficie'];
    $Type= $_POST['Type'];
    $Statu= $_POST['Statu'];
    $adresse= $_POST['Adresse'];
    $Bedrooms= $_POST['Bedrooms'];
    $Bathrooms= $_POST['Bathrooms'];
    $Levels= $_POST['Levels'];
    $kitchen= $_POST['kitchen'];  
    $Dining= $_POST['Dining'];
    $Living= $_POST['Living'];
    $AC= $_POST['AC'];
    $Parking= $_POST['Parking'];
    $Internet= $_POST['Internet'];


    if (isset($_FILES['pdf']['name'])) {
        $filename= $_FILES['pdf']['name'];
        move_uploaded_file($_FILES['pdf']['tmp_name'],'../../pdf/'. $_FILES['pdf']['name']);
    }
    else
    {
        $filename= "empty";
    }

    if (isset($_POST['video'])) {
        $idvideo=$_POST['video'];
    }
    else
    {
        $idvideo="A";    
    }

    $query = "INSERT INTO immeuble (`ref`, `titre`, `description`, `prix`, `bedrooms`, `bathrooms`, `meters`, `levels`, `kitchen`, `dining`, `living`, `AC`, `internet`, `parking`, `Type`, `Adresse`, `Statu`, `idvideo`, `pdf`) VALUES (:Ref, :Titre, :Desc, :Prix, :Bedrooms, :Bathrooms, :Superficie, :Levels, :kitchen, :Dining, :Living, :AC, :Internet, :Parking, :Type, :adresse, :Statu, :idvideo, :filename)";

        $pdoStat = $conn->prepare($query);

        $pdoStat->execute([
            ':Ref' => $Ref,
            ':Titre' => $Titre,
            ':Desc' => $Desc,
            ':Prix' => $Prix,
            ':Bedrooms' => $Bedrooms,
            ':Bathrooms' => $Bathrooms,
            ':Superficie' => $Superficie,
            ':Levels' => $Levels,
            ':kitchen' => $kitchen,
            ':Dining' => $Dining,
            ':Living' => $Living,
            ':AC' => $AC,
            ':Internet' => $Internet,
            ':Parking' => $Parking,
            ':Type' => $Type,
            ':adresse' => $adresse,
            ':Statu' => $Statu,
            ':idvideo' => $idvideo,
            ':filename' => $filename
        ]);


    $id = $conn->lastInsertId();
    $NRef = $Ref.$id;
    $sql = "UPDATE immeuble SET ref='$NRef' WHERE idm = $id";
    $conn->exec($sql);
    

    $idprop= $id;
    

    // Count total files
    $countfiles = count($_FILES['files']['name']);

    for($index = 0;$index < $countfiles;$index++){
        $filename= $_FILES['files']['name'][$index];

        $query3 = "INSERT INTO image(`path`) values (:filename)";

        $pdoStat3 = $conn->prepare($query3);  

        $pdoStat3->execute([':filename' => $filename]);
        //$sql = "insert into image values ('', '$filename')";
       // $conn->exec($sql);
        $idimage = $conn->lastInsertId();
        move_uploaded_file($_FILES['files']['tmp_name'][$index],'../images/proprety/'. $_FILES['files']['name'][$index]);

       // $sql = "insert into immeubleimage values ('', '$idimage','$idprop')";
        //$conn->exec($sql);

        $query2 = "INSERT INTO  immeubleimage (`idimage`, `idimmeuble`) values (:idimage,:idprop)";

        $pdoStat2 = $conn->prepare($query2);  

        $pdoStat2->execute([':idimage' => $idimage,
                        ':idprop' => $idprop]);


    }
    


    


    echo 'OK';



    
        
    


?>