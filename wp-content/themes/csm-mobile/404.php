<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

  <div class="wrapper page-blog">
    <div class="content">
      <div class="in">

        <h1 class="entry-title"><?php _e( 'Page Not Found', 'twentytwenty' ); ?></h1>

        <div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'twentytwenty' ); ?></p></div>
        <br/><br/>
        <a href="/" class="btn btn-blue">Перейти на главную</a>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
      </div><!-- .section-inner -->
    </div><!-- .section-inner -->
  </div><!-- .section-inner -->

  <style>
    .home-page_bot__contact-block{
      margin-top: 5px;
    }
  </style>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
