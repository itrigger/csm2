<?php ?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="/wp-content/themes/csm/assets/css/normalize.css">

  <?php wp_head(); ?>

  <link rel="stylesheet" href="/wp-content/themes/csm-mobile/assets/css/main.css">

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


    <div class="mobile topcontacts">
      <div>
        <a href="/" class="logo"></a>
      </div>
      <div>
        <a href="tel:89257753467" class="ico-tel top-tel">8 925 775 34 67</a>
        <a data-fancybox data-src="#popupmenu" href="javascript:;" class="btn btn-left">Связаться
          <span>с&nbsp;нами</span></a>
      </div>
    </div>


    <div id="popupmenu" style="display: none;">
      <div class="popup-logo">
        <span></span>
      </div>
      <div class="flex_wrap">
        <div class="flex tels">
          <div class="tels_group">
            <a href="tel:89257753467">8 925 775 34 67</a>
            <a href="tel:84953693042">8 495 369 30 42</a>
          </div>
          <a data-fancybox data-src="#callmeback" href="javascript:;" class="btn btn-blue large">Заказать звонок</a>
        </div>

        <div class="flex contacts">
          <div class="addr">
            109316 г. Москва, ул. Волгоградский проспект, дом 28А каб 308
          </div>
          <div class="mail_links">
            <a href="mailto:info@csmig.ru">info@csmig.ru</a>
            <ul class="social-links">
              <li><a href="https://api.whatsapp.com/send?phone=79257753467" target="_blank" class="ico-wh"></a></li>
              <li><a href="viber://chat?number=79257753467" target="_blank" class="ico-vb"></a></li>
              <!--<li><a href="https://t.me/CSMIG" target="_blank" class="ico-tg"></a></li>-->
            </ul>
          </div>
        </div>
      </div>
    </div>

  </header><!-- #site-header -->


<?php
// Output the menu modal.
get_template_part('template-parts/modal-menu');
