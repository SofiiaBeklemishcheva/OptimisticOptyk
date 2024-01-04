<link rel="stylesheet" href="../CSS/index.css">
<?php
function renderShopInformationComponent($videoSource, $mallTitle, $googleMapsLink, $adresText,
                                        $instagramLink, $instagramText,
                                        $facebookLink, $facebookText,
                                        $eMailLink, $eMailText,
                                        $phoneText)
{
    echo '<div class="information-about-shop-container">';
    echo '<div class="video-road-to-shop-container">';

    echo '<video class="video-road-to-shop" controls>';
    echo '<source src="' . $videoSource . '" type="video/mp4">';
    echo '<source src="movie.ogg" type="video/ogg">';
    echo 'Your browser does not support the video tag.';
    echo '</video>';

    echo '<div class="mall-title">' . $mallTitle . '</div>';

    // Directing to Google maps
    echo '<a class="google-maps-link" href="' . $googleMapsLink . '">';
    echo '<img class="map-image" src="../Universal/google-maps.png" />';
    echo '</a>';
    echo '<p class="kontakt-information-text-adres">' . $adresText . '</p>';

    // Directing to Instagram profile
    echo '<a class="instagram-link" href="' . $instagramLink . '">';
    echo '<img class="instagram-image" src="../Universal/instagram%20(1).png" />';
    echo '</a>';
    echo '<p class="kontakt-information-text-instagram">' . $instagramText . '</p>';

    // Directing to Facebook profile
    echo '<a class="facebook-link" href="' . $facebookLink . '">';
    echo '<img class="facebook-image" src="../Universal/facebook%20(1).png" />';
    echo '</a>';
    echo '<p class="kontakt-information-text-facebook">' . $facebookText . '</p>';

    // Directing to e-mail message
    echo '<a class="e-mail-link" href="mailto:' . $eMailLink . '">';
    echo '<img class="e-mail-image" src="../Universal/gmail.png" />';
    echo '</a>';
    echo '<p class="kontakt-information-text-e-mail">' . $eMailText . '</p>';

    echo '<img class="phone-image" src="../Universal/phone.png" />';
    echo '<p class="kontakt-information-text-phone">' . $phoneText . '</p>';

    echo '</div>';
    echo '</div>';
}
?>