$(document).ready(function(){
    $(window).on('scroll', function(){
        let offset = window.pageYOffset;
        size = $('body').height()/3;
        if(offset > size){
            $('i').addClass('active');
        } else {
            $('i').removeClass('active');
        }
    })
    $('i').on('click', function(){
        alert('You scrolled to half of site');
    });
    function menu(){
        $('.burger_btn').on('click', function(){
            let menu = $('#header_bottom');
            let first = $('#first');
            let second = $('#second');
            let thrid = $('#thrid');
            let fourth = $('#fourth')
            menu.toggleClass("header_wrap_bottom active_header_wrap_bottom ");
            first.toggleClass("first first_active ");
            second.toggleClass("second second_active");
            thrid.toggleClass("thrid thrid_active");
            fourth.toggleClass("fourth fourth_active");
            return false;
        })
    }
    menu();
})