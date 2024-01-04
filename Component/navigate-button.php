<link rel="stylesheet" href="../CSS/index.css">
<?php
function generateNewButton($text, $url) {
    echo '    <a  href="' . $url . '">';
    echo '            <p class="button-inscription">' . $text . '</p>';
    echo '    </a>';
}
