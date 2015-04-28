$(function() {
    $('.nav-toggle' ).click(function(e) {
        e.preventDefault() // Prevents # jumps.
        $('.dropdown').toggleClass('expand')
        $('.nav-toggle').addClass('none')
    })

    $( '.close-btn' ).click(function() {
        $('.dropdown').removeClass('expand')
        $('.nav-toggle').removeClass('none')
    })
})