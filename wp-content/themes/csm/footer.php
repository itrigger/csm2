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
  <div class="line2">
    <div class="in">
      <div class="flex">
        <div class="botlogowrapper">
          <div class="botlogo"></div>
          <div class="copy">Центр содействия миграции. © 2010 — <?php echo date('Y'); ?></div>
        </div>
        <div class="developer"><a href="http://masshtab.kz" target="_blank"></a></div>
      </div>
    </div>
  </div>

</footer><!-- #site-footer -->
<div style="text-align:center;padding:10px 0;"><a href="/?switch_theme=mobile">Переключиться на мобильную версию</a></div>
<?php wp_footer(); ?>

<script src="/wp-content/themes/csm/assets/js/vendor/modernizr-3.7.1.min.js"></script>
<script>window.jQuery || document.write('<script src="/wp-content/themes/csm/assets/js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
<script src="/wp-content/themes/csm/assets/js/plugins.js"></script>

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
