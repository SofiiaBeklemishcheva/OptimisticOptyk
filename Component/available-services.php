<link rel="stylesheet" href="../CSS/index.css">
<?php
function generateAvailableServicesComponent($headText, $services)
{
    echo '<div class="available-services-container">
            <h2 class="available-services-description-head">' . $headText . '</h2>';
    foreach ($services as $service) {
        echo '<div class="available-services-description-position-text-background">
                    <p class="available-services-description-position-text">' . $service . '</p>
              </div>';
    }
    echo '</div>';
}
?>
