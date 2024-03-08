<?php

class ConnectionController
{
    private $conn;

    public function __construct()
    {
        $servername = "localhost";
        $database = "optimistic_page";
        $username = "root";
        $password = "";

        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getVisitType()
    {
        try {
            $results = $this->conn->query("SELECT `type`, `typeLabel` FROM visit_type");
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return ($results);
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
