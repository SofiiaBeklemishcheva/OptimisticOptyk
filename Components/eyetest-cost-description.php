<?php
function generateEyetestCostComponentSimple($price, $description) {
    ?>
    <div class="eyetest-cost-container">
        <div class="eyetest-cost-background"></div>
        <div class="eyetest-cost-position-price"><?php echo $price; ?></div>
        <div class="eyetest-cost-position-description-text"><?php echo $description; ?></div>
    </div>
    <?php
}
?>
