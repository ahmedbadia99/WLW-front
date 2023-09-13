<?php 
    
    include("connection.php");

    $Titre= $_POST['Titre'];
    $Desc= $_POST['Desc'];
    $Prix= $_POST['Prix'];
    $Ref= $_POST['Ref'];
    $Superficie= $_POST['Superficie'];
    $idm= $_POST['idm'];
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

    $query = 'UPDATE immeuble SET titre=:titre,prix=:Prix,meters=:Superficie,bedrooms=:Bedrooms,bathrooms=:bathroom,Adresse=:Adresse,Statu=:statu ,description = :description , levels = :levels , kitchen =:kitchen , dining = :dining , living = :living , AC=:AC , parking = :parking , internet = :internet WHERE idm= :id';

    $pdoStat = $conn->prepare($query);  

    $pdoStat->execute([':id' => $idm,
                        ':titre' => $Titre,
                        ':Prix' => $Prix,
                        ':Superficie' => $Superficie,
                        ':Bedrooms' => $Bedrooms,
                          ':bathroom' => $Bathrooms,
                          ':Adresse' => $adresse,
                          ':description' => $Desc,
                          ':levels' => $Levels,
                          ':kitchen' => $kitchen,
                          ':dining' => $Dining,
                          ':living' => $Living,
                          ':AC' => $AC,
                          ':parking' => $Parking,
                          ':internet' => $Internet,
                          ':statu' => $Statu ]);


    
    echo "OK";


?>