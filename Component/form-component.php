<?php
function generateFormComponent($form_title,$title) {
    ?>
    <div class="form-component-item-container">
        <div class="form-component-item-background"></div>
        <label for = "<?= $form_title; ?>" class="form-component-item-title"><?= $title; ?></label>
        <input type="text" id="<?= $form_title; ?>" name="<?= $form_title; ?>"/>
    </div>
<?php }   ?>



