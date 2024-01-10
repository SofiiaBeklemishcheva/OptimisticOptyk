<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="CSS/index.css">
    <meta charset="UTF-8">
    <title>Zapisz się na badanie wzroku</title>
</head>
<body>
<?php include("./Layout/header.php");?>
    <h class = "form-title">Zapisz się na badanie wzroku</h>
<form action="./API/contact-form.php" method="post" class = "form-container" id = "eyetest-reservation-form">
    <?php $eyetest_kind = array (
    array("lenses","Dobór soczewek kontaktowych"),
    array("glasses","Dobór okularów korekcyjnych")
    );
    ?>
    <?php include './Component/form-select-component.php'; ?>
<?php generateFormSelectedComponent("eyetest_kind",  "Wybierz rodzaj badania", $eyetest_kind); ?>
    <?php $eyetest_localization = array (
        array("galeria_krakowska","Galeria Krakowska (Pawia 5, 31-154 Kraków)"),
        array("park_handlowy_zakopianka","Park Handlowy Zakopianka (ul. Zakopiańska 62, 30-418 Kraków)")
    );
    ?>

<?php generateFormSelectedComponent("eyetest_localization","Wybierz lokalizację",$eyetest_localization ); ?>
<?php include './Component/form-component.php'; ?>
<!--    --><?php //include './Component/calendar.php'; ?>
<!--    --><?php //generateFormCalendar("calendar","Data"); ?>
<?php generateFormComponent("name","Imię","Imię"); ?>
<?php generateFormComponent("surname","Nazwisko","Nazwisko"); ?>
<?php generateFormComponent("age","Wiek","Wiek"); ?>
<?php generateFormComponent("mail","E-mail","E-mail"); ?>
<?php generateFormComponent("number","Numer telefonu","Numer telefonu"); ?>
<?php generateFormComponent("message","Wiadomość","Wiadomość"); ?>

<?php include './Component/consent.php'; ?>

<?php generateConsentCheckbox("rules","Przesyłając ten formularz wyrażam zgodę na przetwarzanie moich danych osobowych przez Optimistic Optyk Sp. z o.o."); ?>

    <?php include './Component/submit-button.php'; ?>

<?php generateButton("Prześlij", "", true); ?>
</form>

</body>
</html>