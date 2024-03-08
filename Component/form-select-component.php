<link rel="stylesheet" href="../CSS/index.css">
<?php
function generateFormSelectedComponent($form_title, $title, $options)
{
    ?>
    <div class="form-component-item-container">
        <select name="<?= $form_title; ?>" id="<?= $form_title; ?>" form="eyetest-reservation-form"
                class="form-dropdown" >
            <option class="form-dropdown-item" value="" disabled selected> <?= $title; ?></option>
            <?php foreach ($options as $option): ?>
                <option class="form-dropdown-item" value="<?= $option[0]; ?>"><?= $option[1]; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
<?php } ?>


