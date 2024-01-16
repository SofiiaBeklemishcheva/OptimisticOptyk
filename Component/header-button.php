<link rel="stylesheet" href="../CSS/index.css">
<?php
function generateMenuButton($text, $url, $dropdownButtons)
{
    ?>
    <div class="header-button-container">
        <a class="header-button-container-link" href="<?= $url ?>">
            <p class="header-button-container-link-inscription"><?= $text ?></p>
            <img class="header-button-container-link-image" src="../Universal/more.png"/>
        </a>
        <div class="header-button-container-dropdown">


<?php
foreach($dropdownButtons as $dropdownButton){
generateMenuButton($dropdownButton->text, $dropdownButton->url, [] );
}

?>
        </div>
    </div>
<?php }

?>
