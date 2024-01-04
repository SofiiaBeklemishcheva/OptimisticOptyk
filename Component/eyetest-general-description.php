<?php
function generateEyeTestGeneralDescriptionComponent($description) {
    ?>
    <div class="eyetest-general-decription-container">
        <div class="eyetest-general-decription-background"></div>
        <div class="eyetest-general-step-description-text"><?php echo $description; ?></div>
        <img class="eyetest-general-description-image" src="../Universal/optometrist.png" />
    </div>
    <?php
}
?>