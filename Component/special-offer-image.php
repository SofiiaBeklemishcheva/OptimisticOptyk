<link rel="stylesheet" href="../CSS/index.css">
<?php
function generateSpecialOfferComponent($imagePath, $altText) {
    echo '<img class="special-offer-image" src="' . $imagePath . '" alt="' . $altText . '" />';
}
