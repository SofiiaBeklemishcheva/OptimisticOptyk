<link rel="stylesheet" href="../CSS/Component/submit-button.scss">
<?php
function generateButton($text, $link, $is_submit = false, $id = "")
{
    if ($is_submit) {
        ?>
        <div class="button-container">
            <div class="button-background">
                <input type="submit" class="button-text" value="<?= $text; ?>" id="<?= $id; ?>"/>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div class="button-container">
            <div class="button-background">
                <a href="<?= $link; ?>" class="button-text"><?= $text; ?></a>
            </div>
        </div>
        <?php
    }
    ?>


    <?php
}

?>
