<?php ?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="/wp-content/themes/csm/assets/css/normalize.css">

  <?php wp_head(); ?>

  <link rel="stylesheet" href="/wp-content/themes/csm/assets/css/main.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>

</head>


<body <?php body_class(); ?>>

<!--[if IE]>
<p class="browserupgrade">Вы используете <strong>старую</strong> версию браузера. Пожалуйста, <a
  href="https://browsehappy.com/">обновите Ваш браузер</a> для правильного отображения сайта.</p>
<![endif]-->
<?php
wp_body_open();
?>
<div class="body_wrapper">

  <header id="site-header" class="header-footer-group" role="banner">

    <div class="in desktop">
      <div class="pull-left">
        <a href="/" class="logo pull-left"></a>
      </div>
      <div class="pull-right btn-group">
        <ul class="social-links">
          <li><a href="https://api.whatsapp.com/send?phone=79257753467" target="_blank" class="ico-wh"></a></li>
          <li><a href="viber://chat?number=79257753467" target="_blank" class="ico-vb"></a></li>
         <!-- <li><a href="https://t.me/CSMIG" target="_blank" class="ico-tg"></a></li>-->
        </ul>
        <a href="tel:89257753467" class="ico-tel top-tel">8 925 775 34 67</a>
        <a data-fancybox data-src="#callmeback" href="javascript:;" class="btn">Заказать звонок</a>
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="mobile topcontacts">

        <div class="flex">
          <a href="/" class="logo"></a>
        </div>
        <div class="flex tels">
          <a href="tel:89257753467" class="ico-tel top-tel">8 925 775 34 67</a>
          <a href="tel:84953693042" class="ico-tel top-tel">8 495 369 30 42</a>
        </div>

        <div class="flex">
          <ul class="social-links">
            <li><a href="https://api.whatsapp.com/send?phone=79257753467" target="_blank" class="ico-wh"></a></li>
            <li><a href="viber://chat?number=79257753467" target="_blank" class="ico-vb"></a></li>
           <!-- <li><a href="https://t.me/CSMIG" target="_blank" class="ico-tg"></a></li>-->
          </ul>
        </div>
        <div class="flex right">
          <a data-fancybox data-src="#callmeback" href="javascript:;" class="btn btn-phone"></a>
        </div>




    </div>

  </header><!-- #site-header -->


<?php
// Output the menu modal.
get_template_part('template-parts/modal-menu');
