<link rel="stylesheet" href="../CSS/index.css" xmlns="http://www.w3.org/1999/html">
<?php
function generateFormComponent($form_title,$title,$form_placeholder) {
    ?>
    <div class="form-component-item-container">
            <input class = "form-component-item-input-element" type="text" id="<?= $form_title; ?>"
                   name="<?= $form_title; ?>"
                   placeholder="<?= $form_placeholder; ?>"></input>
    </div>
<?php }   ?>



