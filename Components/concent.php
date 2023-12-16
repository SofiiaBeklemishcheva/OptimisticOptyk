<?php
function generateConsentCheckbox($consentText) {
    ?>
    <div class="consent-container">
        <input type="checkbox" id="consentCheckbox">
        <label for="consentCheckbox"><?php echo $consentText; ?></label>
    </div>
    <?php
}
?>
