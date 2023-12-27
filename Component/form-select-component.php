<?php
function generateFormSelectedComponent($form_title,$title, $options) {
    ?>
    <div class="form-component-item-container">
        <div class="form-component-item-background"></div>
        <label for="<?= $form_title; ?>" class="form-component-item-title"><?= $title; ?></label>
        <img class="form-component-item-buttom-image" src="https://via.placeholder.com/25x25" onclick="toggleDropdown('<?php echo $title; ?>')"/>
        <select name="<?= $form_title; ?>" id="<?= $form_title; ?>" form="eyetest-reservation-form" class="form-dropdown" id="<?php echo $title; ?>Dropdown">
            <?php foreach ($options as $option): ?>
                <option class="form-dropdown-item" value = "<?= $option [0]; ?>"><?= $option[1]; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <?php }   ?>

