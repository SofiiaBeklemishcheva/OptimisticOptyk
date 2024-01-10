<link rel="stylesheet" href="../CSS/index.css">
<?php
function generateConsentCheckbox($form_title,$consentText) {
    ?>
    <div class="consent-container">
        <input name="<?= $form_title; ?>"  type="checkbox" id="consentCheckbox">
        <label class = "checkbox-text" for="consentCheckbox"><?php echo $consentText; ?></label>
    </div>
    <?php
}
?>
