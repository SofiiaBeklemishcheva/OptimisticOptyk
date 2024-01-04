<link rel="stylesheet" href="../CSS/index.css">
<?php
function generateMenuButton($text, $url) {
    echo '    <a class="header-container-center-menu-button" href="' . $url . '">';
    echo '            <div class="header-container-center-menu-button-background"></div>';
    echo '            <p class="header-container-center-menu-button-inscription">' . $text . '</p>';
    echo '        <img class="header-container-center-menu-button-image" src="../Universal/more.png" />';
    echo '    </a>';
}
?>
