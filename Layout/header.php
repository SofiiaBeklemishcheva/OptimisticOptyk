<header class="header">

<div class="button-container">
    <?php
        $buttons = array(
            array('label' => 'Badanie', 'image' => './Universal/more.png', 'link' => 'strona1.php'),
            array(
                'label' => 'Produkty',
                'image' => './Universal/more.png',
                'submenu' => array(
                    array('label' => 'Soczewki jednoogniskowe', 'link' => 'podstrona1.php'),
                    array('label' => 'Soczewki wieloogniskowe', 'link' => 'podstrona2.php')
                )
            ),
            array('label' => 'Kontakt', 'image' => './Universal/more.png', 'link' => 'strona2.php'),
            array('label' => 'Informacje', 'image' => './Universal/more.png', 'link' => 'strona4.php')
        );

        foreach ($buttons as $button) {
            echo '<div class="button">';
            echo $button['label'];
            
            if (isset($button['submenu'])) {
                echo '<ul class="submenu">';
                foreach ($button['submenu'] as $submenuItem) {
                    echo '<li><a href="' . $submenuItem['link'] . '">' . $submenuItem['label'] . '</a></li>';
                }
                echo '</ul>';
            }

            echo '<img src="' . $button['image'] . '" alt="Strzałeczka">';
            echo '</div>';
        }
    ?>
</div>



</header>

