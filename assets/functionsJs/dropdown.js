document.addEventListener("DOMContentLoaded", function () {
    
    $('.dropdown-toggle').click(function(){
        console.log('hello')
        $('.dropdown-menu').slideToggle();
        // $('.dropdown-menu').css("display", "block")
    })
})