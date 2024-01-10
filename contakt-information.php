<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Optimistic Optyk Kontakt</title>
    <link rel="stylesheet" href="./CSS/index.css">
</head>
<body>
<?php include("./Layout/header.php");?>
<div class = "information-container">

<?php
include './Component/contakt-information-container.php';

// Define data for the component
$videoSource = 'path/to/video.mp4';
$mallTitle = 'Park Handlowy Zakopianka';
$googleMapsLink = 'https://www.google.com/maps/place/Optimistic+Optyk+Krak%C3%B3w+Zakopianka/@50.0139149,19.9297647,17z/data=!3m1!4b1!4m6!3m5!1s0x47165d80244d0799:0x3a11ce0ba145abc9!8m2!3d50.0139149!4d19.9323396!16s%2Fg%2F11tsjtlpqh?entry=ttu';
$adresText = 'Zakopiańska 62, 30-418 Kraków';
$instagramLink = 'https://www.instagram.com/optimistic.optyk.krakow/';
$instagramText = '@optimistic.optyk.krakow';
$facebookLink = 'https://www.facebook.com/OptimisticZakopianka/';
$facebookText = 'Optimistic OPTYK Kraków Zakopianka';
$eMailLink = 'example@example.com';
$eMailText = 'optimistic.krakow001@gmail.com';
$phoneText = '518 114 935';

renderShopInformationComponent($videoSource, $mallTitle, $googleMapsLink, $adresText,
    $instagramLink, $instagramText,
    $facebookLink, $facebookText,
    $eMailLink, $eMailText,
    $phoneText);
?>

<?php

$videoSource = 'path/to/video.mp4';
$mallTitle = 'Galeria Krakowska';
$googleMapsLink = 'https://www.google.com/maps/place/Optimistic+Optyk/@50.068074,19.9429023,17z/data=!3m1!4b1!4m6!3m5!1s0x47165be81d275d63:0x7cf53599979001a0!8m2!3d50.068074!4d19.9454772!16s%2Fg%2F11t0nb2y8r?entry=ttu';
$adresText = 'ul. Pawia 5, 31-154 Kraków';
$instagramLink = 'https://www.instagram.com/optimistic.optyk.galeria.krk/';
$instagramText = '@optimistic.optyk.galeria.krk';
$facebookLink = 'https://www.facebook.com/p/optimisticoptykgaleriakrk-100083399166198/';
$facebookText = 'optimistic.optyk.galeria.krk';
$eMailLink = 'example@example.com';
$eMailText = 'optimistic.krakow002@gmail.com';
$phoneText = '789 046 052';

renderShopInformationComponent($videoSource, $mallTitle, $googleMapsLink, $adresText,
    $instagramLink, $instagramText,
    $facebookLink, $facebookText,
    $eMailLink, $eMailText,
    $phoneText);
?>


<?php

$videoSource = 'path/to/video.mp4';
$mallTitle = 'Zespół Zakładów Opieki Zdrowotnej w Wadowicach';
$googleMapsLink = 'https://www.google.com/maps/place/Optimistic-Optyk/@49.8805883,19.4887591,17z/data=!3m1!4b1!4m6!3m5!1s0x4716892f1e74c7b7:0xfc7399e08dbf9245!8m2!3d49.8805883!4d19.491334!16s%2Fg%2F11h479ndk7?entry=ttu';
$adresText = 'Karmelicka 5, 34-100 Wadowice';
$instagramLink = 'https://www.instagram.com/optimistic.optyk.wadowice/';
$instagramText = '@optimistic.optyk.wadowice';
$facebookLink = 'https://www.facebook.com/OptimisticWadowice';
$facebookText = 'OptimisticWadowice';
$eMailLink = 'example@example.com';
$eMailText = 'optimistic.wadowice01@gmail.com';
$phoneText = '780 124 090';

renderShopInformationComponent($videoSource, $mallTitle, $googleMapsLink, $adresText,
    $instagramLink, $instagramText,
    $facebookLink, $facebookText,
    $eMailLink, $eMailText,
    $phoneText);
?>
</div>

    <?php include("./Layout/footer.php");?>
</body>
</html>