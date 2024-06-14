<?php include("API/ConnectionController.php");
include './Component/form-select-component.php';
include './Component/form-component.php';
$dataBaseConnection = new ConnectionController();

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./JS/Component/form-controller.js"></script>
    <script src="./JS/Component/ConnectionController.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker").datepicker({dateFormat: "yy-mm-dd"});
        });

        $(document).ready(function () {
            $('input.timepicker').timepicker({timeFormat: "h:mm p"});
        });

        const connectionController = new ConnectionController();

    </script>



    <link rel="stylesheet" href="CSS/index.css">
    <meta charset="UTF-8">
    <title>Zapisz się na badanie wzroku</title>
</head>
<body>
<?php include("./Layout/header.php"); ?>
<h class="form-title">Zapisz się na badanie wzroku</h>
<form action="./API/contact-form.php" method="post" class="form-container" id="eyetest-reservation-form">

    <?php generateFormComponent("age", "Wiek", "Wiek"); ?>

<!--    --><?php //generateFormSelectedComponent("eyetest_kind", "Wybierz rodzaj badania", $eyetest_kind); ?>

    <?php $eyetest_localization = array(
        array("galeria_krakowska", "Galeria Krakowska (Pawia 5, 31-154 Kraków)"),
        array("park_handlowy_zakopianka", "Park Handlowy Zakopianka (ul. Zakopiańska 62, 30-418 Kraków)")
    );
    ?>

    <?php generateFormSelectedComponent("eyetest_localization", "Wybierz lokalizację", $eyetest_localization); ?>


    <div class="form-component-item-container">
        <input class="form-component-item-input-element" type="date" id="datepicker"
               name="eyetest-date"
               placeholder="Wybierz datę badania">
    </div>

    <script>$('#disableTimeRangesExample').datepicker({
            'disableTimeRanges': [
                ['1am', '2am'],
                ['3am', '4:01am']
            ]
        });
    </script>

    <div class="form-component-item-container">
        <input class="form-component-item-input-element" type="time" id="timepicker"
               name="eyetest-time"
               placeholder="Wybierz datę badania">
    </div>

    <?php generateFormComponent("name", "Imię", "Imię"); ?>
    <?php generateFormComponent("surname", "Nazwisko", "Nazwisko"); ?>
    <?php generateFormComponent("mail", "E-mail", "E-mail"); ?>
    <?php generateFormComponent("number", "Numer telefonu", "Numer telefonu"); ?>
    <?php generateFormComponent("message", "Wiadomość", "Wiadomość"); ?>

    <?php include './Component/consent.php'; ?>

    <?php generateConsentCheckbox("rules", "Przesyłając ten formularz wyrażam zgodę na przetwarzanie moich danych osobowych przez Optimistic Optyk Sp. z o.o."); ?>

    <?php include './Component/submit-button.php'; ?>

    <?php generateButton("Prześlij", "", true, "reservation-form-submit"); ?>
</form>

<?php include("./Layout/footer.php"); ?>
<script>
    connectionController.getTypesByAge();
    connectionController.getLocalizationsWithType();
</script>
</body>
</html>