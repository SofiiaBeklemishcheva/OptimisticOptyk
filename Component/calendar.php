<?php
function generateFormCalendar($form_title,$title) {
    ?>
    <div class="form-component-item-container">
        <div class="form-component-item-background"></div>
        <label for = "<?= $form_title; ?>" class="form-component-item-title"><?= $title; ?></label>
        <input type="date" id="<?= $form_title; ?>" name="<?= $form_title; ?>"/>
    </div>
<?php }   ?>