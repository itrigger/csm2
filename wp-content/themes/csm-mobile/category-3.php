<?php
/*
Template Name: Все статьи
*/
get_header(); ?>
<script>jQuery(".site-header_menu .m_blog").addClass("ul_menu_item-acive");</script>
<div class="wrapper page-blog">
  <div class="content">
    <div class="in">

      <div class="breadcrumbs">
        <ul>
          <li><a href="/">Главная</a></li>
          <li>Блог</li>
        </ul>
      </div>

      <h1>Блог</h1>

      <div class="divide-2-1">
        <div class="divide-2-1_left">
          <?php

          $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $params = array(
            'posts_per_page' => 20, // количество постов на странице
            'cat'       => '2', // тип постов
            'paged'           => $current_page // текущая страница
          );
          query_posts($params);

          $wp_query->is_archive = true;
          $wp_query->is_home = false;


          while(have_posts()): the_post();
            ?>
            <div class="blogs-item" >
              <div class="blogs-item__heading wow fadeInUp" data-wow-delay=".4s"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
            </div>
          <?php
          endwhile;
          ?>
          <div class="pagenavi_w">
            <div class="heading">Ещё больше интересных статей</div>
            <?php wp_pagenavi(); ?>
          </div>



        </div>

        <div class="divide-2-1_right">
          <div id="sidebar">
          <div class="yellow_hint">Полезные статьи</div>


            <div class="related_articles">
              <?php
              $args = array('category' => 3, 'post_type' => 'post');
              $catPost = get_posts($args); //change this
              foreach ($catPost as $post) : setup_postdata($post); ?>
                <div class="ra_item wow fadeInUp" data-wow-delay="0.2s">
                  <div class="ra_item__heading"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
                </div>
              <?php endforeach; ?>
            </div>
            <a href="/articles" class="btn btn-blue">Все статьи</a>
          </div>
        </div>
      </div>

    </div>
  </div>





  <?php
  get_footer();
  ?>
</div>


