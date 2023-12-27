
<div class="information-about-shop-container">
    <div class="video-road-to-shop-container">
        <video class="video-road-to-shop" controls>
            <source src="<?php echo $videoSource; ?>" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>

        <div class="mall-title"><?php echo $mallTitle; ?></div>

        <!-- Directing to Google maps -->

        <a class="google-maps-link" href="<?php echo $googleMapsLink; ?>">
            <img class="map-image" src="<?php echo $mapImage; ?>" />
        </a>

        <p class="kontakt-information-text-adres"><?php echo $adresText; ?></p>

        <!-- Directing to Instagram profile -->

        <a class="instagram-link" href="<?php echo $instagramLink; ?>">
            <img class="instagram-image" src="<?php echo $instagramImage; ?>" />
        </a>

        <p class="kontakt-information-text-instagram"><?php echo $instagramText; ?></p>

        <!-- Directing to Facebook profile -->

        <a class="facebook-link" href="<?php echo $facebookLink; ?>">
            <img class="facebook-image" src="<?php echo $facebookImage; ?>" />
        </a>

        <p class="kontakt-information-text-facebook"><?php echo $facebookText; ?></p>


        <!-- Directing to e-mail message -->
        <a class="e-mail-link" href="mailto:<?php echo $eMailLink; ?>"> 
            <img class="e-mail-image" src="<?php echo $eMailImage; ?>" />
        </a>

        <p class="kontakt-information-text-e-mail"><?php echo $eMailText; ?></p>
    
        <img class="phone-image" src="<?php echo $phoneImage; ?>" />
        <p class="kontakt-information-text-phone"><?php echo $phoneText; ?></p>

    </div>
</div>
