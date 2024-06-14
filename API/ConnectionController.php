<?php

class ConnectionController
{
    private $conn;

    public function __construct()
    {
        $servername = "localhost";
        $database = "optimistic_page";
        $username = "root";
        $password = "root";

        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getVisitType($age)
    {
        try {
            $stmt = $this->conn->prepare("SELECT `type`, `typeLabel` FROM visit_type WHERE `ageRange` <= :age");
            $stmt->bindValue(':age', $age, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       /* foreach($stmt->fetchAll() as $v) {
            echo $v;
        }*/
        print_r($result);
    }

    public function getLocalizationsWithType($type)
    {
        try {
            $stmt = $this->conn->prepare("SELECT `localization`.`name`,`localization`.`adress`
FROM localization, visit_type_localization, visit_type
WHERE visit_type.type = :type AND visit_type.ID = visit_type_localization.visitTypeID AND localization.ID=visit_type_localization.localizationID;");
            $stmt->bindValue(':type', $type, PDO::PARAM_STR);
            $results = $stmt->execute();
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return ($results);
    }


}



//SELECT `localization`.`name`  FROM visit_type, visit_type_location, localization WHERE "glasses" = `visit_type`.`type` AND `visit_type`.ID = visit_type_location.visitTypeID AND visit_type_location.localizationID = localization.ID;
