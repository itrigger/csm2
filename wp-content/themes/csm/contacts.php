<?php
/*
Template Name: Контакты
*/
get_header(); ?>
  <script>jQuery(".site-header_menu .m_contacts").addClass("ul_menu_item-acive");</script>
  <div class="wrapper page-blog">
  <div class="content">
    <div class="in">
      <div class="breadcrumbs">
        <ul>
          <li><a href="/">Главная</a></li>
          <li>Контакты</li>
        </ul>
      </div>
      <h1>Контакты</h1>

       <div class="content_wide">
         <div class="contact-block">
             <div class="line flex">
               <div class="b1 ico-map">109316 г.&nbsp;Москва, ул.&nbsp;Волгоградский проспект, дом&nbsp;28А&nbsp;каб&nbsp;308</div>
               <div class="b2 ico-mail"><a href="mailto:info@csmig.ru">info@csmig.ru</a></div>
               <div class="b3 ico-tel"><a href="tel:84953693042">8&nbsp;495&nbsp;369&nbsp;30&nbsp;42</a></div>
               <div class="b3 ico-tel"><a href="tel:89257753467">8&nbsp;925&nbsp;775&nbsp;34&nbsp;67</a></div>
             </div>

           <div class="map">
             <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Abee76e440e7278fdbde445ff050dea8811ef45237287ed8f0119f381f4308682&amp;source=constructor" width="100%" height="555" frameborder="0"></iframe>
           </div>

           <div class="contact-form-block">
             <div class="header">Задать вопрос</div>
             <?php echo do_shortcode('[contact-form-7 id="103" title="Страница Контакты"]'); ?>
           </div>

         </div>
       </div>

    </div>
  </div>



<?php
get_footer();




