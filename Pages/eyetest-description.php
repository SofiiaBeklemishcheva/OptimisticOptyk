<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="../CSS/index.css">

<meta charset="UTF-8">
    <title>Badanie wzroku</title>
</head>
<body>
<div class = "eyetest-general-description-container">
    <div class = "eyetest-general-description-background"></div>
    <div class = "eyetest-general-description-text">Badanie przeprowadza optometrysta<br/>Gwarancja recepty*<br/>Badamy dorosłych oraz młodzież od 12 roku życia</div>
    <img class = "eyetest-general-description-image" src="https://via.placeholder.com/110x100" 00/>
</div>

<h2 class = "eyetest-proces-decription-title">Proces przeprowadzenia badania</h2>

<?php include 'eyetest_process.php'; ?>

<div class="eyetest-proces-decription-container">
    <?php eyetestProcessStep("Krok 1", "Wywiad", "https://via.placeholder.com/95x100"); ?>
    <?php eyetestProcessStep("Krok 2", "Badanie autorefrektometrem", "https://via.placeholder.com/95x100"); ?>
    <?php eyetestProcessStep("Krok 3", "Badanie manualne", "https://via.placeholder.com/95x100"); ?>
    <?php eyetestProcessStep("Krok 4", "Rekomendacje od specjalisty", "https://via.placeholder.com/95x100"); ?>
</div>

<h2 class = "eyetest-cost-title">Koszt badania wzroku</h2>

<?php include 'eyetest_cost_component_simple.php'; ?>

<?php generateEyetestCostComponentSimple("14 zł", "Przy zakupie okularów"); ?>
<?php generateEyetestCostComponentSimple("129 zł", "Samo badanie*"); ?>
<?php generateEyetestCostComponentSimple("159 zł", "Dobór soczewek kontaktowych*"); ?>


<?php include 'button_component.php'; ?>

<div class = "eyetest-limitations-description-container">
    <div class = "eyetest-limitations-description-background"></div>
    <p class = "eyetest-limitations-description-text">
    Nasze usługi obejmują ocenę ostrości widzenia oraz doboru okularów i soczewek kontaktowych. Warto jednak zaznaczyć, że nie przeprowadzamy diagnostyki chorób oczu, nie wystawiamy recept na leki, ani nie wykonujemy procedur związanych z wyjmowaniem ciał obcych z oczu.
    </p>
    <img class = "eyetest-limitations-description-image" src="https://via.placeholder.com/110x100" 00/>
</div>

<?php generateButton("Umów wizytę", "reservating-eyetest-termin.php"); ?>
</body>
</html>