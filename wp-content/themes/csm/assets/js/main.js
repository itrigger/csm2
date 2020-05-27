var flag = 0;
jQuery(document).ready(function ($) {

  jQuery(".services-block a.btn").click(function () {
    jQuery("#reason").val(jQuery(this).attr("data-subject"));
  })

  jQuery('#sidebar').portamento({wrapper: $('.home-page_howto'), gap: 90});

});

jQuery(window).scroll(function(){
  var sticky = jQuery('#site-header'),
    scroll = jQuery(window).scrollTop();
  if (scroll >= 10) sticky.addClass('-top');
  else sticky.removeClass('-top');

  var count_top = (jQuery('.counts').offset().top)-500;


  if(scroll>count_top){
    if (flag == 0) {
      jQuery('.count_1 .number').animateNumber({
        number: 300
      },
        {
          easing: 'swing',
          duration: 2000
        }
      );
      jQuery('.count_2 .number').animateNumber({
        number: 56
        },
        {
          easing: 'swing',
          duration: 2000
        }
      );
      jQuery('.count_3 .number').animateNumber({
        number: 20
        },
        {
          easing: 'swing',
          duration: 2000
        }
      );
      flag = 1;
    }
  }

});

