$(document).ready(function () {
    $('.open-menu').click(function (e) { 
        e.preventDefault();
        $(this).toggleClass('active-open-menu');
        $('.secondary-mobile-menu').toggleClass('secondary-mobile-menu-open');
    });

    $('.secondary-mobile-menu .sub-menu').slideUp();

    $('.secondary-mobile-menu li a').click(function () { 


        var menu = $(this).closest('.secondary-mobile-menu');
	
        if (false == $(this).next().is(':visible')) {
            menu.find('li').removeClass('activated');
            menu.find('ul').slideUp();
            menu.find('ul').removeClass('active-sub-menu');
        }

            $(this).next().toggleClass('active-sub-menu');
            $(this).next().slideToggle('slow');
            $(this).parent().toggleClass('activated');

            console.log($(this).parent());
        
    });

        var askLink = $('a').has('.fa-question-circle');
        // console.log(askLink);

        $(askLink).click(function (e) { 
            e.preventDefault();

            $('.ask-question').removeClass('ask-form-closed');
            
        });

        $('.close-ask-form').click(function (e) { 
            e.preventDefault();
            
            $('.ask-question').addClass('ask-form-closed');
        });



        //slider
        $('.slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            centerMode: false,
            variableWidth: false,
            autoplay: true,
            autoplaySpeed: 5000
        });


        var link = $('.menu a.ads');
        link.click(function (event) { 
        event.preventDefault();
        var id = $(this).attr('href');
        var top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
     });

     $('ul.attention li a').each(function(index, element) {
         if(index % 2 != 0) {
            $(this).css('background', '#ccc')
         }
     });

     $('.post img').click(function(e){
         e.preventDefault;
        $(this).toggleClass('fullWidthPostimg');
     });  

     $('.secondary-menu li').children('.sub-menu').after('<i class="fas fa-chevron-right"></i>');
});