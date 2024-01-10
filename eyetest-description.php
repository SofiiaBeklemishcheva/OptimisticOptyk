<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="CSS/index.css">

<meta charset="UTF-8">
    <title>Badanie wzroku</title>
</head>
<body>
<?php include("./Layout/header.php");?>
<div class = "eyetest-general-description-container">
    <div class = "eyetest-general-description-background">
    <img class = "eyetest-general-description-image" src="./Universal/optometrist.png"/>
    <div class = "eyetest-general-description-text">
        <ul class = "statement-list">
            <li class = "statement-list-position">Badanie przeprowadza optometrysta</li>
            <li class = "statement-list-position">Gwarancja recepty*</li>
            <li class = "statement-list-position">Badamy dorosłych oraz młodzież od 12 roku życia</li>
        </ul>
    </div>
    </div>

</div>

<h2 class = "eyetest-proces-decription-title">Proces przeprowadzenia badania</h2>

<?php include './Component/eyetest-proces-step-description.php'; ?>

<div class="eyetest-proces-decription-container">
    <?php eyetestProcessStep("Krok 1", "Wywiad", "./Universal/interview.png"); ?>
    <?php eyetestProcessStep("Krok 2", "Badanie autorefrektometrem", "./Universal/optometrist (2).png"); ?>
    <?php eyetestProcessStep("Krok 3", "Badanie manualne", "./Universal/optometrist (1).png"); ?>
    <?php eyetestProcessStep("Krok 4", "Rekomendacje od specjalisty", "./Universal/warnings.png"); ?>
</div>

<h2 class = "eyetest-proces-decription-title">Koszt badania wzroku</h2>

<?php include './Component/eyetest-cost-description.php'; ?>

<div class = "eyetest-cost-container">
<?php generateEyetestCostComponentSimple("14 zł", "Przy zakupie okularów"); ?>
<?php generateEyetestCostComponentSimple("129 zł", "Samo badanie*"); ?>
<?php generateEyetestCostComponentSimple("159 zł", "Dobór soczewek kontaktowych*"); ?>
</div>

<div class = "eyetest-limitations-description-container">
    <div class = "eyetest-limitations-description-background">
    <p class = "eyetest-limitations-description-text">
    Nasze usługi obejmują ocenę ostrości widzenia oraz doboru okularów i soczewek kontaktowych. Warto jednak zaznaczyć, że nie przeprowadzamy diagnostyki chorób oczu, nie wystawiamy recept na leki, ani nie wykonujemy procedur związanych z wyjmowaniem ciał obcych z oczu.
    </p>
    <img class = "eyetest-limitations-description-image" src="./Universal/warning.png"/>
    </div>
</div>

<?php include("./Component/submit-button.php");?>
<?php generateButton("Umów wizytę", "http://localhost/reservating-eyetest-termin.php"); ?>
<?php include("./Layout/footer.php");?>
</body>
</html>