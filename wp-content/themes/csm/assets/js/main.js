jQuery('document').ready(function(){
  jQuery('.service-vars .blocks>div').hover(
    function(){
      jQuery(this).find('.img').addClass('animate__animated animate__pulse animate__bounce');
    },
    function(){
      jQuery(this).find('.img').removeClass('animate__animated animate__pulse animate__bounce');
    });
});

jQuery(window).scroll(function(){
  var sticky = jQuery('#site-header'),
    scroll = jQuery(window).scrollTop();
  if (scroll >= 10) sticky.addClass('-top');
  else sticky.removeClass('-top');
})
