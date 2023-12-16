<?php
function generateButton($text, $link) {
    ?>
    <div class="button-container">
        <div class="button-background"></div>
        <a href="<?php echo $link; ?>" class="button-text"><?php echo $text; ?></a>
    </div>
    <?php
}
?>
