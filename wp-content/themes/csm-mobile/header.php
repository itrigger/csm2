<?php ?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="/wp-content/themes/csm-mobile/assets/css/normalize.css">

  <?php wp_head(); ?>


  <link rel="stylesheet" href="/wp-content/themes/csm-mobile/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/wp-content/themes/csm-mobile/assets/css/owl.theme.default.min.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
  <link rel="stylesheet" href="/wp-content/themes/csm-mobile/assets/css/animate.css">
  <link rel="stylesheet" href="/wp-content/themes/csm-mobile/assets/css/main.css">
  <link rel="stylesheet" href="/wp-content/themes/csm-mobile/assets/css/iphone.css">

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

  <header id="site-header" class="header">
    <div class="in">
      <div class="wrapper">
        <div class="btn-burger">
          <span></span>
        </div>
        <div class="logo">
          <a href="/"></a>
        </div>
        <div class="site-header_menu">
          <ul class="ul_menu">
            <li class="ul_menu_item m_grad"><a href="/grajdanstvo">Гражданство РФ</a></li>
            <li class="ul_menu_item m_rvp"><a href="/rvp">РВП</a></li>
            <li class="ul_menu_item m_vnj"><a href="/vnj">ВНЖ</a></li>
            <li class="ul_menu_item m_blog"><a href="/blog">Блог</a></li>
            <li class="ul_menu_item m_contacts"><a href="/contacts">Контакты</a></li>
          </ul>
        </div>
        <div class="pull-right btn-group">
          <ul class="social-links">
            <li><a href="https://api.whatsapp.com/send?phone=79257753467" target="_blank" class="ico-wh"></a></li>
            <li><a href="viber://add?number=79257753467" target="_blank" class="ico-vb"></a></li>
          </ul>
          <a href="tel:89257753467" class="ico-tel top-tel">8&nbsp;925&nbsp;775&nbsp;34&nbsp;67</a>
          <a data-fancybox data-src="#callmeback" href="javascript:;" class="btn btn-alpha btn-phone widescreen"></a>
          <div class="btn btn-alpha btn-phone thinscreen">

            <ul class="social-links">
              <li> <div class="top-cross">
                  <span></span>
                </div></li>
              <li><a data-fancybox data-src="#callmeback" href="javascript:;" class="btn btn-alpha btn-phone"></a></li>
              <li><a href="https://api.whatsapp.com/send?phone=79257753467" target="_blank" class="ico-wh"></a></li>
              <li><a href="viber://add?number=79257753467" target="_blank" class="ico-vb"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header><!-- #site-header -->

  <script>
    jQuery('document').ready(function () {
        jQuery('.btn-burger').on('click', function () {
            if(jQuery(this).hasClass('active')){
              jQuery(this).removeClass('active');
              jQuery('.site-header_menu').removeClass('active');
            } else {
              jQuery(this).addClass('active');
              jQuery('.site-header_menu').addClass('active');
            }

        });
        jQuery('.thinscreen').on('click', function () {
          if(jQuery(this).hasClass('active')){
            jQuery(this).removeClass('active');

          } else {
            jQuery(this).addClass('active');

          }

        });
    })
  </script>
<?php
// Output the menu modal.
get_template_part('template-parts/modal-menu');
