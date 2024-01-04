<link rel="stylesheet" href="../CSS/Layout/header.scss">
<header class="header">

    <div class="header-container-left">
        <img class="header-container-left-logo" src="../Universal/Logo.jpg" alt = "Logo"/>
    </div>


    <?php include ("./Component/header-button.php"); ?>
    <nav class="header-container-center-menu">
        <?php generateMenuButton('Badanie', 'http://localhost/Pages/eyetest-description.php'); ?>
        <?php generateMenuButton('Produkty', 'http://localhost/Pages/eyetest-description.php'); ?>
        <?php generateMenuButton('Kontakt', 'http://localhost/Pages/eyetest-description.php'); ?>
        <?php generateMenuButton('Informacje', 'http://localhost/Pages/eyetest-description.php'); ?>

    </nav>

</header>

