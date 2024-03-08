<link rel="stylesheet" href="../CSS/Layout/header.scss">
<header class="header">

    <div class="header-container-left">
        <a href="http://localhost/index.php">
            <img class="header-container-left-logo" src="../Universal/Logo.jpg" alt = "Logo"/>
        </a>
    </div>


    <?php include ("./Component/header-button.php"); ?>
    <nav class="header-container-center-menu">
        <?php generateMenuButton('Badanie', 'http://localhost/eyetest-description.php',[]); ?>
        <?php generateMenuButton('Produkty', 'http://localhost/Pages/eyetest-description.php',[
            (object)["text" => "Soczewki jednoogniskowe", "url" => "http://localhost/soczewki-jednoogniskowe.php"],
            (object)["text" => "Soczewki wieloogniskowe", "url" => "http://localhost/soczewki-wieloogniskowe.php"]

        ]); ?>
        <?php generateMenuButton('Kontakt', 'http://localhost/contakt-information.php',[]); ?>
        <?php generateMenuButton('Informacje', 'http://localhost/faq.php',[]); ?>

    </nav>

</header>
