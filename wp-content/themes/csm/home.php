<?php
/*
Template Name: Home
*/
get_header(); ?>

  <div class="wrapper">

    <div class="block-1-video">
      <div class="owl-carousel3">
        <div>
          <div class="hb-pink">
            <div class="in">
              <h1>
                Гражданство без ожидания!
              </h1>
            </div>
          </div>
        </div>
        <div>
          <div class="hb-darkblue">
            <div class="in">
              <h1>
                Гражданство без ожидания!
              </h1>
            </div>
          </div>
        </div>
        <div>
          <div class="hb-blue">
            <div class="in">
              <h1>
                Гражданство без ожидания!
              </h1>
            </div>
          </div>
        </div>
      </div>

      <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/css/animate.css">

      <script>
        jQuery(document).ready(function () {
          jQuery(".owl-carousel3").owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            animateOut: 'fadeOut' // and this
          });
        });
      </script>
    </div>


  </div>

<?php
get_footer();
