$(window).scroll(function() {
    parallax();
})

function parallax() {
    var windowScroll = $(window).scrollTop();

    $('.parallax--bg').css('background-position',
    'center ' + (windowScroll * 0.75) + 'px')

    $('.parallax--box').css('top', 10 + (windowScroll * 0.04) + 'em')
}
