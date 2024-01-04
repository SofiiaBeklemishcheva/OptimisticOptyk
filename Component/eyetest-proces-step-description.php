<?php
function eyetestProcessStep($stepNumber, $description, $imageSrc) {
    ?>
    <div class="eyetest-proces-step-decription-container">
        <div class="eyetest-proces-step-decription-background">
        <img class="eyetest-proces-step-description-image" src="<?php echo $imageSrc; ?>" />
            <div class="eyetest-proces-step-number"><?php echo $stepNumber; ?></div>
            <div class="eyetest-proces-step-description"><?php echo $description; ?></div>
        </div>
    </div>
    <?php
}
?>
