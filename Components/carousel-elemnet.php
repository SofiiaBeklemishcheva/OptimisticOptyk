<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class = "carousel-element-container">
    <div class = "carousel-element-container-background"></div>
    <img class = "carousel-element-navigation-arrow-left" src="https://via.placeholder.com/50x50" />
    <img class = "carousel-element-navigation-arrow-right" src="https://via.placeholder.com/50x50" />
    <img class = "carousel-element-image" src="<?php echo $carouselElementImage; ?>" />
    
    <div class = "carousel-element-indicator">
        <div class = "indicator-lement"></div>
        <div class = "indicator-lement"></div>
        <div class = "indicator-lement"></div>
        <div class = "indicator-lement"></div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.carousel-element-image').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.carousel-element-indicator'
        });
        $('.carousel-element-indicator').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.carousel-element-image',
            dots: false,
            centerMode: true,
            focusOnSelect: true
        });
    });
</script>

</body>
</html>