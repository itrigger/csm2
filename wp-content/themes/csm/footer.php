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
              </ul>
            </div>
          <div class="foot_contact">
            <div class="ico-map">105064, г. Москва, пр-т Свердлова, д. 61</div>
            <div class="ico-mail"><a href="mailto:info@csmig.ru">info@csmig.ru</a></div>
            <div class="ico-tel"><a href="tel:88007589889">8 800 758 98 89</a></div>
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
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="/wp-content/themes/csm/assets/js/main.js"></script>


<div style="display: none;" id="callmeback">
  <div class="form">
    <div class="header">Заказать звонок</div>
    <?php echo do_shortcode('[contact-form-7 id="19" title="Заказать звонок"]'); ?>
  </div>
</div>
<div style="display: none;" id="help">
  <div class="form">
    <div class="header">Получить консультацию</div>
    <?php echo do_shortcode('[contact-form-7 id="15" title="Получить консультацию"]'); ?>
  </div>
</div>

</body>
</html>
