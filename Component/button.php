<?php
function generateButton($text, $link, $is_submit=false) {
    if($is_submit){
?>
        <div class="button-container">
            <div class="button-background"></div>
         <input type="submit" value="<?= $text; ?>"/>
        </div>
            <?php
            }
    else {
        ?>
        <div class="button-container">
            <div class="button-background"></div>
            <a href="<?= $link; ?>" class="button-text"><?= $text; ?></a>
        </div>
        <?php
    }
    ?>


    <?php
}
?>
