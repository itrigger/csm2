<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>
<div class="home-page_steps pages-page_steps">
  <div class="grad-curved">
    <img src="/wp-content/themes/csm/assets/images/grad-curved.jpg" alt="">
  </div>
  <div class="home-page_bot__contact-block">
    <div class="in">
      <div class="megaoval">
        <div class="inner">
          <div class="consul-block__head">
            <div class="consul-block__title">ваш консультант</div>
            <div class="consul-block__name">Виктор Фишер</div>
            <div class="consul-block__desc">Директор центра содействия миграции</div>
            <div class="consul-block__social-btns">
              <ul class="social-links">
                <li><a href="https://api.whatsapp.com/send?phone=79257753467" target="_blank" class="ico-wh"></a></li>
                <li><a href="viber://chat?number=+79257753467" target="_blank" class="ico-vb"></a></li>
              </ul>
            </div>
          </div>
          <div class="consul_form">
            <div class="head">Для бесплатной консультации у миграционного юриста, оставьте свои контактные данные:
            </div>
            <div class="form lineform">
                <?php echo do_shortcode('[contact-form-7 id="78" title="Форма в подвале"]'); ?>
            </div>
          </div>
          <div class="consul_form_bottom"></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<footer id="site-footer" role="contentinfo" class="header-footer-group">
  <div class="home-page_howto-footer"></div>
  <div class="line2">
    <div class="in">
      <div class="flex">
        <div class="botlogowrapper">
          <div class="botlogo"></div>
          <div class="copy">© 2010 — <?php echo date('Y'); ?></div>
        </div>
        <div class="foot_menu_wrap">
            <div class="foot_menu">
              <ul class="ul_menu">
                <li class="ul_menu_item"><a href="/grajdanstvo">Гражданство РФ</a></li>
                <li class="ul_menu_item"><a href="/rvp">РВП</a></li>
                <li class="ul_menu_item"><a href="/vnj">ВНЖ</a></li>
                <li class="ul_menu_item"><a href="/blog">Блог</a></li>
                <li class="ul_menu_item"><a href="/contacts">Контакты</a></li>
              </ul>
            </div>
          <div class="foot_contact">
            <div class="ico-map">109316 г.&nbsp;Москва, ул.&nbsp;Волгоградский проспект, дом&nbsp;28А&nbsp;каб&nbsp;308</div>
            <div class="ico-mail"><a href="mailto:info@csmig.ru">info@csmig.ru</a></div>
            <div class="ico-tel"><a href="tel:89257753467">8&nbsp;925&nbsp;775&nbsp;34&nbsp;67</a></div>
            <div class="ico-tel"><a href="tel:84953693042">8&nbsp;495&nbsp;369&nbsp;30&nbsp;42</a></div>
          </div>
        </div>
        <div class="developer"><a href="http://masshtab.kz" target="_blank"></a></div>
      </div>
    </div>
  </div>
  <div class="switch_wrap"><a href="/?switch_theme=mobile">Переключиться на мобильную версию</a></div>
</footer><!-- #site-footer -->

<?php wp_footer(); ?>

<script src="/wp-content/themes/csm/assets/js/vendor/modernizr-3.7.1.min.js"></script>
<script>window.jQuery || document.write('<script src="/wp-content/themes/csm/assets/js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
<script src="/wp-content/themes/csm/assets/js/plugins.js"></script>
<script src="/wp-content/themes/csm/assets/js/owl.carousel.min.js"></script>
<script src="/wp-content/themes/csm/assets/js/vendor/tooltipster.bundle.min.js"></script>
<script src="/wp-content/themes/csm/assets/js/vendor/wow.js"></script>
<script>
  new WOW().init();
</script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="/wp-content/themes/csm/assets/js/main.js"></script>


<div style="display: none;" id="callmeback" class="popupform">
  <div class="form">
    <div class="header">Заказать звонок</div>
    <?php echo do_shortcode('[contact-form-7 id="83" title="Заказать звонок (попап)"]'); ?>
  </div>
</div>
<div style="display: none;" id="help" class="popupform">
  <div class="form">
    <div class="header">Получить консультацию</div>
    <?php echo do_shortcode('[contact-form-7 id="76" title="Получить консультацию (попап)"]'); ?>
  </div>
</div>
<div style="display: none;" id="vnj" class="popupform">
  <div class="form">
    <div class="header">Оформить ВНЖ</div>
    <?php echo do_shortcode('[contact-form-7 id="245" title="Оформить ВНЖ"]'); ?>
  </div>
</div>
<div style="display: none;" id="order" class="popupform">
  <div class="form">
    <div class="header">Подать заявку</div>
    <?php echo do_shortcode('[contact-form-7 id="246" title="Подать заявку"]'); ?>
  </div>
</div>
</body>
</html>
