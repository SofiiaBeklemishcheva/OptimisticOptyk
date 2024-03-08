class Slider{
    constructor() {
        const listOfSliders= document.getElementsByClassName ("carousel-element-container-background");
        Array.from(listOfSliders).forEach((carouselElement) =>
        {
            new SliderElement(carouselElement);
        })
    }
}


class SliderElement {
    constructor(carouselElement) {
        const slider = carouselElement.querySelector('.images-inner-container');
        const arrowLeft = carouselElement.querySelector('.left-arrow');
        const arrowRight = carouselElement.querySelector('.right-arrow');
        arrowRight.style.opacity = "0";

        let positionPX = 0;
        let position = 0;

        arrowLeft.addEventListener('click', () => {
            console.log('Left arrow clicked');
            if(position <3) {
                positionPX -= 442;
                slider.style.left = positionPX + "px";
                position++;
            }
            if(position === 3){
                arrowLeft.style.opacity = "0";
            }
            if(position > 0){
                arrowRight.style.opacity = "1";
            }
        });

        arrowRight.addEventListener('click', () => {
            console.log('Right arrow clicked');
            if(position >0) {
                positionPX += 442;
                slider.style.left = positionPX + "px";
                position--;
            }
            if(position === 0){
                arrowRight.style.opacity = "0";
            }
            if(position <3){
                arrowLeft.style.opacity = "1";
            }

        });
    }

}