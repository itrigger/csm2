<?php
/*
 * Template Name: Запись - кейс
 * Template Post Type: post
 */

get_header(); ?>
<script>jQuery(".site-header_menu .m_blog").addClass("ul_menu_item-acive");</script>
  <div class="wrapper page-blog">
  <div class="content">
    <div class="in">


      <div class="breadcrumbs">
        <ul>
          <li><a href="/">Главная</a></li>
          <li><a href="/blog">Блог</a></li>
          <li><?php the_title(); ?></li>
        </ul>
      </div>

      <h1>Блог <a class="h1_a" href="/articles">Все статьи</a></h1>

      <div class="header"></div>

      <div class="divide-2-1">
        <div class="divide-2-1_left">
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part('template-parts/content', get_post_type());
            }
          } ?>


        </div>

        <div class="divide-2-1_right">
          <div id="sidebar">
            <div class="yellow_hint">Полезные статьи</div>


            <div class="related_articles">
              <?php
              $args = array('category' => 3, 'post_type' => 'post');
              $catPost = get_posts($args); //change this
              foreach ($catPost as $post) : setup_postdata($post); ?>
                <div class="ra_item">
                  <div class="ra_item__heading"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
                </div>
              <?php endforeach; ?>
            </div>
            <a href="/articles" class="btn btn-blue large">Все статьи</a>


            <div class="consul-block">
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
              <div class="footer">
                <div class="header">Оставьте заявку</div>
                <div class="desc">Оставьте свои данные и я перезвоню вам.</div>
                <?php echo do_shortcode('[contact-form-7 id="80" title="Плавающая форма справа"]'); ?>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>


    <script>
      jQuery(document).ready(function ($) {
        jQuery('#sidebar').portamento({wrapper: $('.divide-2-1'), gap: 80});
      });
    </script>

    <div class="oval servicepage-oval"></div>

<?php
get_footer(); ?>
  </div>




