<?php

                    <source src="' . $videoSrc . '" type="video/mp4">
                    function generateShopInformationComponent($shopTitle, $mapLink, $address, $instagramLink, $instagramText, $facebookLink, $facebookText, $emailLink, $emailText, $phoneLink, $phoneNumber,  $videoSrc) {
    echo '<div class="information-about-shop-container">
            <div class="video-road-to-shop-container">
                <video class="video-road-to-shop" controls>
                    <source src="' . $videoSrc . '" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <div class="shop-title">' . $shopTitle . '</div>

                <a class="google-maps-link" href="' . $mapLink . '">
                    <img class="map-image" src="" />
                </a>

                <p class="kontakt-information-text-adres">' . $address . '</p>

                <a class="instagram-link" href="' . $instagramLink . '">
                    <img class="instagram-image" src=" " />
                </a>
                <p class="kontakt-information-text-instagram">' . $instagramText . '</p>

                <a class="facebook-link" href="' . $facebookLink . '">
                    <img class="facebook-image" src=" " />
                </a>
                <p class="kontakt-information-text-facebook">' . $facebookText . '</p>

                <a class="e-mail-link" href="' . $emailLink . '">
                    <img class="e-mail-image" src=" " />
                </a>
                <p class="kontakt-information-text-e-mail">' . $emailText . '</p>

                <a class="phone-link" href="' . $phoneLink . '">
                    <img class="phone-image" src=" " />
                </a>
                <p class="kontakt-information-text-phone-number">' . $phoneNumber . '</p>
            </div>
        </div>';
}
?>