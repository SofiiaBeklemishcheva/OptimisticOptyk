<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="CSS/index.css">


<meta charset="UTF-8">
    <title>Optimistic Optyk</title>
</head>
<body>
<?php include("./Layout/header.php");?>

<?php include("./Component/special-offer-image.php"); ?>
<div class = "special-offer-images-container">
<?php generateSpecialOfferComponent("../Universal/KP%2040%25.jpg", "Oferta specjalna"); ?>
<?php generateSpecialOfferComponent("../Universal/KP%2040%25.jpg", "Oferta specjalna"); ?>
<?php generateSpecialOfferComponent("../Universal/KP%2040%25.jpg", "Oferta specjalna"); ?>
</div>


<?php include("./Component/available-services.php"); ?>
<div class = "services-container">
<?php
$headText = "Wykonujemy:";
$services = [
    "Badanie wzroku pod kątem doboru okularów i soczewek kontaktowych",
    "Naprawę okularów, jeżeli to jest możliwe",
    "Soczewki kontaktowe jednoogniskowe",
    "Okulary korekcyjne ze szkłami jednoogniskowymi i wieloogniskowymi"
];

generateAvailableServicesComponent($headText, $services);
?>
</div>

<?php include("./Component/navigate-button.php"); ?>
<h2 class = "navigate-buttons-title">Współpracujemy z danymi producentami soczewek okularowych</h2>
<nav class="navigate-buttons-container">
    <?php generateNewButton('SHAMIR', 'https://shamir.com/pl/'); ?>
    <?php generateNewButton('RODENSTOCK', 'https://www.rodenstock.com/pl/pl/index.html'); ?>
    <?php generateNewButton('ESSILOR', 'https://www.essilor.com/pl-pl/'); ?>
    <?php generateNewButton('HOYA', 'https://www.hoyavision.com/pl/dla-uzytkownikow/'); ?>
<?php generateNewButton('JZO', 'https://www.jzo.com.pl/'); ?>
</nav>


<?php include("./Layout/footer.php");?>
    </body>
</html>