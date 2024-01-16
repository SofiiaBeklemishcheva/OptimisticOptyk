$(document).ready(function(){
    const $eyeTestForm =   $("#eyetest-reservation-form");
     $eyeTestForm.find("#reservation-form-submit").on("click", function (){
         $eyeTestForm.find("#name").val();
         console.log( $eyeTestForm.find("#name").val());
     })


});