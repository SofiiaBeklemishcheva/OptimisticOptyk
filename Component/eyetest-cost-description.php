<?php
function generateEyetestCostComponentSimple($price, $description) {
    ?>
    <div class="eyetest-cost-container">
        <div class="eyetest-cost-background">
            <div class="eyetest-cost-position-description-text"><?php echo $description; ?></div>
        <div class="eyetest-cost-position-price"><?php echo $price; ?></div>
        </div>
    </div>
    <?php
}
?>
