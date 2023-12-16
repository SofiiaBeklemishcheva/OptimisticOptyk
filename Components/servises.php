<?php
$services = [
    "Badanie wzroku pod kątem doboru okularów i soczewek kontaktowych",
    "Naprawę okularów, jeżeli to jest możliwe",
    "Soczewki kontaktowe jednoogniskowe",
    "Okulary korekcyjne ze szkłami jednoogniskowymi i wieloogniskowymi (progresywne, biurowe, dwuogniskowe, relaksacyjne)"
];
?>

<div class="serveses-description-container">
    <div class="serveses-description-background"></div>
    <div class="serveses-description-main-title">Wykonujemy:</div>

    <?php foreach ($services as $service): ?>
        <div class="serveses-description-position-item-background"></div>
        <h2 class="serveses-description-position-item-title"><?php echo $service; ?></h2>
    <?php endforeach; ?>
</div>
