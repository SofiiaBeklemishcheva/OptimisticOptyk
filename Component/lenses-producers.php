<?php
$producers = [
    "SHAMIR" => "https://shamir.com/pl/", 
    "RODENSTOCK" => "https://www.rodenstock.com/pl/pl/index.html",
    "ESSILOR" => "https://www.essilor.com/pl-pl/",
    "HOYA" => "https://www.hoyavision.com/pl/",
    "JZO" => "https://www.jzo.com/"
];
?>
?>

<div class="lenses-producents-links-container">
    <div class="lenses-producents-links-background"></div>
    <h2 class="lenses-producents-links-main-title">Współpracujemy z danymi producentami soczewek okularowych</h2>

    <?php foreach ($producers as $producer): ?>
        <div class="lenses-producent-link-background"></div>
        <h3 class="lenses-producent-link-name"><?php echo $producer; ?></h3>
    <?php endforeach; ?>
</div>
