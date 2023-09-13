<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="probearbeitprojekt";

        /* $servername = "localhost:3306";
        $username = "sidagqec";
        $password = "iVU36Vbv@f@26";
        $dbname="prjimmeuble"; */
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        date_default_timezone_set('Africa/Casablanca');
        function fetch_user_last_activity($user_id, $conn)
        {
            $query = "
            SELECT * FROM login_details 
            WHERE user_id = '$user_id' 
            ORDER BY last_activity DESC 
            LIMIT 1
            ";
            $statement = $conn->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $row)
            {
                return $row['last_activity'];
                //return $result[0]['last_activity'];
            }
        }
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>