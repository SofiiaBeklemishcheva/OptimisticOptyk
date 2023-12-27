<?php
function generateSpecialOfferComponent($imagePath, $altText) {
    echo '<div class="special-offer-image-container">';
    echo '<img class="special-offer-image" src="' . $imagePath . '" alt="' . $altText . '" />';
    echo '</div>';
}
