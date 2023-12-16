<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h>Zapisz się na badanie wzroku</h>

    <?php include 'form-select-component.php'; ?>
<?php generateFormSelectedComponent("Wybierz rodzaj badania", ["Dobór soczewek kontaktowych", "Dobór okularów korekcyjnych"]); ?>
<?php generateFormSelectedComponent("Wybierz lokalizację", ["Galeria Krakowska (Pawia 5, 31-154 Kraków)", "Park Handlowy Zakopianka (ul. Zakopiańska 62, 30-418 Kraków)"]); ?>
<?php include 'form-select-component.php'; ?>
<?php generateFormComponent("Imię"); ?>
<?php generateFormComponent("Nazwisko"); ?>
<?php generateFormComponent("Wiek"); ?>
<?php generateFormComponent("E-mail"); ?>
<?php generateFormComponent("Nazwisko"); ?>
<?php generateFormComponent("Wiadomość"); ?>

<?php include 'consent.php'; ?>

<?php generateConsentCheckbox("Przesyłając ten formularz wyrażam zgodę na przetwarzanie moich danych osobowych przez Optimistic Optyk Sp. z o.o."); ?>

<?php generateButton("Prześlij", ""); ?>


</body>
</html>