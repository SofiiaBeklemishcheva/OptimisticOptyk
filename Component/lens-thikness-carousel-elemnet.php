<link rel="stylesheet" href="../CSS/index.css"
<script src="../JS/Component/lens-thikness-carousel-element.js"></script>
<?php
function generateCarouzel($carouselElementImage1, $carouselElementImage2, $carouselElementImage3, $carouselElementImage4) {
    ?>
        <div class = "carousel-element-container-background">

            <div class = "left-arrow-container">
                <span class = "left-arrow">&#8249;</span>
            </div>

            <img class = "carousel-slide" src="<?php echo $carouselElementImage1; ?>" alt = "1"/>
            <div class = "arrow-right">
                <span class = "right-arrow">&#8250;</span>
            </div>
            <img class = "carousel-slide" src="<?php echo $carouselElementImage2; ?>" alt = "2" />
            <img class = "carousel-slide" src="<?php echo $carouselElementImage3; ?>" alt = "3"/>
            <img class = "carousel-slide" src="<?php echo $carouselElementImage4; ?>" alt = "4"/>

        </div>


<?php }   ?>



