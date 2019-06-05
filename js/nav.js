        $('.toAnchor').on('click', function () {
           $('.navbar-collapse').removeClass('in');
           $a = $($(this).attr('href'));
           $('html,body').animate({ scrollTop: $a.offset().top - 50}, 500);
         return false;
         });
