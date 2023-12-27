<?php
// Dane dostępowe do bazy danych
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

try {
    // Utwórz połączenie z bazą danych
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Sprawdź, czy formularz został wysłany
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sprawdź zaznaczenie checkboxa
        $answer = isset($_POST["rules"]) && ($_POST["rules"] == "on") ? "1" : "0";

        // Przygotuj i wykonaj zapytanie SQL
        $stmt = $conn->prepare("INSERT INTO eyetest_form_data 
            (eyetest_kind, eyetest_localization, calendar, name, surname, age, mail, number, message, rules)
            VALUES (:eyetest_kind, :eyetest_localization, :calendar, :name, :surname, :age, :mail, :number, :message, :rules)");

        $stmt->bindValue(':eyetest_kind', $_POST['eyetest_kind'], PDO::PARAM_STR);
        $stmt->bindValue(':eyetest_localization', $_POST['eyetest_localization'], PDO::PARAM_STR);
        $stmt->bindValue(':calendar', $_POST['calendar'], PDO::PARAM_STR);
        $stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $stmt->bindValue(':surname', $_POST['surname'], PDO::PARAM_STR);
        $stmt->bindValue(':age', $_POST['age'], PDO::PARAM_STR);
        $stmt->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
        $stmt->bindValue(':number', $_POST['number'], PDO::PARAM_STR);
        $stmt->bindValue(':message', $_POST['message'], PDO::PARAM_STR);
        $stmt->bindValue(':rules', $answer, PDO::PARAM_STR);

        $stmt->execute();

        echo "Dane zostały zapisane do bazy danych";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
