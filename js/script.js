// NAV BAR

$('#hamburger-open').click(function ()
{
    $("#main-navigation-toggle").prop("checked", true);
    $("#hamburger-open").css("display", "none");
    $("#hamburger-close").css("display", "block");
});

$('#hamburger-close').click(function ()
{
    $("#main-navigation-toggle").prop("checked", false);
    $("#hamburger-open").css("display", "block");
    $("#hamburger-close").css("display", "none");
    
});

// SORTING

var $filters = $('[data-filter]'),
$boxes = $('[data-color]');

$filters.on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    
    $filters.removeClass('events_sorter--active');
    $this.addClass('events_sorter--active');

    var $filterColor = $this.attr('data-filter');

    $('#hamburger-open').css({"display": "block"})
    $('.events_sort').removeClass('events_sort--active')

    if ($filterColor == 'all') {
        
        $boxes.removeClass('is-animated')
        .fadeOut().promise().done(function() {
            $boxes.addClass('is-animated').fadeIn();
        });
    } else {
        $('.events_sorter:first-child').removeClass('events_sorter--active');
        $boxes.removeClass('is-animated')
        .fadeOut().promise().done(function() {
            $boxes.filter('[data-color = "' + $filterColor + '"]')
            .addClass('is-animated').fadeIn();
        });
    }
});

$('.events_sortbtn').on('click', function(e) {
    e.preventDefault();
    $('#hamburger-open').css({"display": "none"})
    $('.events_sort').addClass('events_sort--active');
})

$('.events_sort_close').on('click', function(e) {
    e.preventDefault();
    $('#hamburger-open').css({"display": "block"})
    $('.events_sort').removeClass('events_sort--active');
})

// FILE UPLOAD

$('#file-upload').change(function() {
            
    var file = $('#file-upload')[0].files[0].name;

    $(".input_text_file span").text(file)
});

// CURSOR

const cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', e => {
    cursor.setAttribute("style", "top: "+(e.pageY - 10)+"px; left: "+(e.pageX - 10)+"px;")
})

document.addEventListener('click', () => {
    cursor.classList.add("expand");

    setTimeout(() => {
        cursor.classList.remove("expand");
    }, 500)
})

// PRELOADER

$(document).ready(function() {
  
    setTimeout(function() {
        $('#ctn-preloader').addClass('loaded');
        $('body').removeClass('no-scroll-y');
    
        if ($('#ctn-preloader').hasClass('loaded')) {
            $('#preloader').css({"display": "none"})
        }
    }, 1000);
});

$(".white").click(function(){
    $("#submit").click()
})