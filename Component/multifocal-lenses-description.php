<link rel="stylesheet" href="../CSS/index.css">
<?php
function renderMultifocalLensesComponent($title, $descriptions, $images)
{
    echo '<div class="multifocal-lenses-title-container">';
    echo '<h2 class="lenses-kind-title">' . $title . '</h2>';
    echo '<div class="multifocal-lenses-description-container">';
    foreach ($descriptions as $description) {
        echo '<p class="lenses-description-text">' . $description . '</p>';
    }
    echo '</div>';
    echo '</div>';

    echo '<div class="multifocal-lens-imagine-container">';
    foreach ($images as $image) {
        echo '<img class="multifocal-lens-image" src="' . $image . '" alt="Schemat konstrukcji soczewek dwuogniskowych" />';
    }
    echo '</div>';
}
?>