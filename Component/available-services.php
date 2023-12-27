<?php
function generateAvailableServicesComponent($headText, $services) {
    echo '<div style="width: 100%; height: 100%; position: relative">';
    echo '<div class="available-services-description-container"></div>';
    echo '<h2 class="available-services-description-head">' . $headText . '</h2>';

    foreach ($services as $service) {
        echo '<div class="available-services-description-position-container"></div>';
        echo '<p class="available-services-description-position-text">' . $service . '</p>';
    }

    echo '</div>';
}
?>

