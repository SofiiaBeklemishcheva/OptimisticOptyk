<?php
function generateFormSelectedComponent($title, $options) {
    ?>
    <div class="form-component-item-container">
        <div class="form-component-item-background"></div>
        <div class="form-component-item-title"><?php echo $title; ?></div>
        <img class="form-component-item-buttom-image" src="https://via.placeholder.com/25x25" onclick="toggleDropdown('<?php echo $title; ?>')"/>
        <div class="form-dropdown" id="<?php echo $title; ?>Dropdown">
            <?php foreach ($options as $option): ?>
                <div class="form-dropdown-item"><?php echo $option; ?></div>
            <?php endforeach; ?>
        </div>
    </div>