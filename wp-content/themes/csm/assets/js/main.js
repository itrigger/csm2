jQuery(document).ready(function ($) {
  jQuery(".services-block a.btn").click(function () {
    jQuery("#reason").val(jQuery(this).attr("data-subject"));
  })
});

jQuery(window).scroll(function(){
  var sticky = jQuery('#site-header'),
    scroll = jQuery(window).scrollTop();
  if (scroll >= 10) sticky.addClass('-top');
  else sticky.removeClass('-top');
});
