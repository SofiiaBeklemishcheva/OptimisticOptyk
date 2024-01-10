<link rel="stylesheet" href="../CSS/index.css">
<?php
function renderShopInformationComponent($videoSource, $mallTitle, $googleMapsLink, $adresText,
                                        $instagramLink, $instagramText,
                                        $facebookLink, $facebookText,
                                        $eMailLink, $eMailText,
                                        $phoneText)
{
    echo '<div class="information-about-shop-container">';

    echo '<div class="information-about-shop-container-background">';

    echo '<video class="video-road-to-shop" controls>';
    echo '<source src="' . $videoSource . '" type="video/mp4">';
    echo '<source src="movie.ogg" type="video/ogg">';
    echo 'Your browser does not support the video tag.';
    echo '</video>';

    echo '<div class="mall-title">' . $mallTitle . '</div>';

    // Directing to Google maps
    echo '<a class="contact-information-container" href="' . $googleMapsLink . '">';
    echo '<img class="image" src="../Universal/google-maps.png" />';
    echo '<p class="kontakt-information-text">' . $adresText . '</p>';
    echo '</a>';

    // Directing to Instagram profile
    echo '<a class="contact-information-container" href="' . $instagramLink . '">';
    echo '<img class="image" src="../Universal/instagram%20(1).png" />';
    echo '<p class="kontakt-information-text">' . $instagramText . '</p>';
    echo '</a>';

    // Directing to Facebook profile
    echo '<a class="contact-information-container" href="' . $facebookLink . '">';
    echo '<img class="image" src="../Universal/facebook%20(1).png" />';
    echo '<p class="kontakt-information-text">' . $facebookText . '</p>';
    echo '</a>';

    // Directing to e-mail message
    echo '<a class="contact-information-container" href="mailto:' . $eMailLink . '">';
    echo '<img class="image" src="../Universal/gmail.png" />';
    echo '<p class="kontakt-information-text">' . $eMailText . '</p>';
    echo '</a>';

    echo '<div class = "contact-information-container">';
    echo '<img class="image" src="../Universal/phone.png" />';
    echo '<p class="kontakt-information-text">' . $phoneText . '</p>';
    echo '</div>';

    echo '</div>';
    echo '</div>';
}
?>