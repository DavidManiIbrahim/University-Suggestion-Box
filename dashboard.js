$(document).ready(function(){
    $('.btn1').click(function(){
        $('.txt1').slideToggle()

    })

    const day = document.getElementsByClassName('date');
        day.textContent = date('d/m/y');


    })