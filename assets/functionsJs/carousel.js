$(document).ready(function () {
    let count = 0
    // $(".item").css('display', 'none')
    // $(".active").css('display', 'block')
    let items = $(".item")
    $('.btn-next').click(function() {
        let currentImg = $('.active')
        let nextImg = currentImg.next()

        if(nextImg.length) {
            $(currentImg).removeClass('active')
            $(nextImg).addClass('active')
        }
            
        })

    $('.btn-prev').click(function() {
        let currentImg = $('.active')
        let prevImg = currentImg.prev()

        if(prevImg.length) {
            currentImg.removeClass('active')
            prevImg.addClass('active')
        }
    })
})