<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="./CSS/index.css">


<meta charset="UTF-8">
    <title>Optimistic Optyk</title>
</head>
<body class = "main-page-container" >
<?php include ("./Layout/header.php");?>
<?php include ("./Layout/header.php");?>
<?php include("./Component/special-offer-image.php"); ?>

<?php generateSpecialOfferComponent("../Universal/KP%2040%25.jpg", "Oferta specjalna"); ?>
<?php generateSpecialOfferComponent("../Universal/KP%2040%25.jpg", "Oferta specjalna"); ?>
<?php generateSpecialOfferComponent("../Universal/KP%2040%25.jpg", "Oferta specjalna"); ?>



<?php include("./Component/available-services.php"); ?>
<?php
$headText = "Wykonujemy:";
$services = [
    "Badanie wzroku pod kątem doboru okularów i soczewek kontaktowych",
    "Naprawę okularów, jeżeli to jest możliwe",
    "Soczewki kontaktowe jednoogniskowe",
    "Okulary korekcyjne ze szkłami jednoogniskowymi i wieloogniskowymi (progresywne, biurowe, dwuogniskowe, relaksacyjne)"
];

generateAvailableServicesComponent($headText, $services);
?>

<?php include ("./Layout/footer.php");?>
    </body>
</html>