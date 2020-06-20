<?php
/*
Template Name: Home
*/
get_header(); ?>

<div class="wrapper">

  <div class="homepage-slider">
    <div class="customPreviousBtn owl_custom_nav"></div>
    <div class="owl-carousel">
      <div>
        <div class="color-bg hb-pink slide1">
          <div class="in">
            <a href="/grajdanstvo/#programms">
            <div class="inner">
              <header class="wow fadeInDown">
                Гражданство без ожидания
              </header>
              <div class="desc wow fadeInUp">
                Самая актуальная информация об условиях предоставления российского гражданства и профессиональная помощь
                для максимально быстрого получения паспорта.
              </div>
              <span class="btn btn-grad btn-blue">Получить
                консультацию</span>
              <img class="wow fadeInRight" src="/wp-content/themes/csm/assets/images/pic-12.svg" width="522" height="433" alt="">
            </div>
            </a>
          </div>
        </div>
      </div>
      <div>
        <div class="color-bg hb-darkblue slide2">
          <div class="in">
            <a href="/vnj/#programms">
            <div class="inner">
                <header>
                  Вид на жительство
                </header>
                <div class="desc">Минимум времени и усилий на урегулирование формальностей при оформлении вида на
                  жительство. Сделаем все, чтобы легализовать ваше пребывание в&nbsp;РФ.
                </div>
                <span class="btn btn-grad btn-pink">Получить
                  консультацию</span>
                <img src="/wp-content/themes/csm/assets/images/pic-13.svg" width="522" height="416" alt="">
            </div>
            </a>
          </div>
        </div>
      </div>
      <div>
        <div class="color-bg hb-blue slide3">
          <div class="in">
            <a href="/rvp/#programms">
            <div class="inner">
              <header>
                Разрешение на временное проживание
              </header>
              <div class="desc" >
                Консультации по любым вопросам, связанным с оформлением РВП и&nbsp;последующим
                получением ВНЖ.
              </div>
              <span href="javascript:;" class="btn btn-grad btn-pink">Получить
                консультацию</span>
              <img src="/wp-content/themes/csm/assets/images/pic-14.svg" width="597" height="429" alt="">
            </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="customNextBtn owl_custom_nav"></div>

    <!--  <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/css/animate.css">-->

    <script>
      jQuery(document).ready(function () {

        jQuery(".color-bg .btn").on('click', function (e) {
          e.preventDefault();
          jQuery.fancybox.open({
            src  : '#help',
            type : 'inline'
          });
        });

        var owl = jQuery('.owl-carousel');
        owl.owlCarousel({
          items: 1,
          margin: 0,
          autoplay: false,
          nav: false,
          loop: true
          //animateOut: 'fadeOut' // and this
        });
        jQuery('.customNextBtn').click(function () {
          owl.trigger('next.owl.carousel');
        });
        jQuery('.customPreviousBtn').click(function () {
          owl.trigger('prev.owl.carousel');
        });
      });
    </script>
  </div>


  <!-- home page howto block -->

  <div class="howto home-page_howto">
    <div class="in">
      <div class="divide-2-1">
        <div class="divide-2-1_left chessmate">
          <div class="ltr">
            <div class="left wow fadeInLeft">
              <img src="/wp-content/themes/csm/assets/images/pic-18.svg" width="423" height="406" alt="">
            </div>
            <div class="right wow fadeInRight">
              <div class="header">Как получить разрешение на временное пребывание?</div>
              <div class="desc">Благодаря помощи миграционных юристов удастся избежать ошибок и задержек с оформлением
                документа.
              </div>
              <a href="/osnovaniya-dlya-polucheniya-rvp/" class="btn btn-blue">Подробнее</a>
            </div>
          </div>
          <div class="rtl">
            <div class="left wow fadeInLeft">
              <img src="/wp-content/themes/csm/assets/images/pic-19.svg" width="398" height="338" alt="">
            </div>
            <div class="right wow fadeInRight">
              <div class="header">Сколько стоит Гражданство?</div>
              <div class="desc">Расходы на получение гражданства РФ зависят от множества факторов, и нашим специалистам
                легко удастся сделать необходимые расчеты.
              </div>
              <a href="/yurist-po-voprosam-grazhdanstva/" class="btn btn-blue">Подробнее</a>
            </div>
          </div>
          <div class="ltr">
            <div class="left wow fadeInLeft">
              <img src="/wp-content/themes/csm/assets/images/pic-20.svg" width="414" height="337" alt="">
            </div>
            <div class="right wow fadeInRight">
              <div class="header">Помощь в оформлении документов</div>
              <div class="desc">Эксперты по миграционным вопросам возьмут на себя решение текущих вопросов, избавив вас
                от бюрократии.
              </div>
              <a href="/yurist-po-vidu-na-zhitelstvo/" class="btn btn-blue">Подробнее</a>
            </div>
          </div>
        </div>
        <div class="divide-2-1 divide-2-1_right">
          <div class="consul-block" id="sidebar">
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
    <div class="home-page_howto-footer"></div>
  </div>

  <!-- -->

  <section>
  <!-- Цифры -->
  <div class="in">
    <div class="counts">
      <div class="count count_1 wow fadeInUp" data-wow-delay="0s">
        <div class="desc">Человек обратилось к нам</div>
        <div class="number">0</div>
        <div class="pic"><img src="/wp-content/themes/csm/assets/images/pic-22.svg" width="357" height="284" alt="">
        </div>
      </div>
      <div class="count count_2 wow fadeInUp" data-wow-delay="0.5s">
        <div class="desc">Человек получили положительный результат</div>
        <div class="number">0</div>
        <div class="pic"><img src="/wp-content/themes/csm/assets/images/pic-23.svg" width="345" height="279" alt="">
        </div>
      </div>
      <div class="count count_3 wow fadeInUp" data-wow-delay="1s">
        <div class="desc">Дней мы готовим документы</div>
        <div class="number">0</div>
        <div class="pic"><img src="/wp-content/themes/csm/assets/images/pic-24.svg" width="353" height="282" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- -->
  </section>

  <!-- -->
  <div class="oval2"></div>
  <div class="sotrud">
    <div class="in">
      <h3>Сотрудничая с нами вы получаете:</h3>
      <p>Услуги квалифицированных и опытных юристов, которые разбираются в действующем законодательстве РФ <span>и помогают с быстрым получением гражданства, ВНЖ и других документов.
          </span></p>

      <div class="sotrud_triple">
        <div class="sotrud_triple_block stb1  wow fadeInUp" data-wow-delay="0s">
          <div class="pic"><img src="/wp-content/themes/csm/assets/images/pic-28.svg" width="385" height="325" alt="">
          </div>
          <div class="head">Оформление документов в&nbsp;Москве</div>
          <div class="desc">Комплексное обслуживание клиентов, заинтересованных в легализации в Москве и МО. Помощь с
            заполнением и подачей заявлений, организация сбора и перевода документов, прохождения
            медкомиссии и сдачи профильных экзаменов.
          </div>
        </div>
        <div class="sotrud_triple_block stb2 wow fadeInUp" data-wow-delay="0.5s">
          <div class="pic"><img src="/wp-content/themes/csm/assets/images/pic-29.svg" width="414" height="324" alt="">
          </div>
          <div class="head">Для жителей СНГ</div>
          <div class="desc">Обеспечение перевода и восстановления документов (свидетельств о рождении и семейном
            статусе, справки о несудимости и т.д.) приехавших из Украины и других стран СНГ для последующего оформления
            ВНЖ и гражданства.
          </div>
        </div>
        <div class="sotrud_triple_block stb3 wow fadeInUp" data-wow-delay="1s">
          <div class="pic"><img src="/wp-content/themes/csm/assets/images/pic-30.svg" width="386" height="324" alt="">
          </div>
          <div class="head">Гражданство — это легко!</div>
          <div class="desc">Всесторонняя поддержка юристов, начиная с первого этапа оформления гражданства РФ. Делаем
            все, чтобы клиенты могли максимально быстро получить российский паспорт. Действуем строго в рамках закона.
          </div>
        </div>
      </div>
    </div>
    <div class="sotrud__bottom"></div>
  </div>
  <!-- -->

  <div class="home-page_steps">
    <div class="in">
      <h3>Основные шаги</h3>

      <div class="steps">
        <div class="line1">
          <div class="step">
            <div class="head">Консультация</div>
            <div class="desc">Анализируем вашу ситуацию и подбираем оптимальную схему легализации в России
            </div>
          </div>
          <div class="step">
            <div class="pic wow tada">
              <img
                src="/wp-content/themes/csm/assets/images/minipic-28.svg" width="94" height="105"
                alt=""></div>
          </div>
          <div class="step">
            <div class="head">Медицинское заключение</div>
            <div class="desc">Организуем прохождение медицинской комиссии с получением официального врачебного заключения.
            </div>
          </div>
          <div class="step">
            <div class="pic wow tada">
              <img src="/wp-content/themes/csm/assets/images/minipic-30.svg" width="94" height="104"
                   alt=""></div>
          </div>
        </div>
        <div class="line-bubble">
          <div class="step">
            <div class="bubble"></div>
          </div>
          <div class="step">
            <div class="bubble"></div>
          </div>
          <div class="step">
            <div class="bubble"></div>
          </div>
          <div class="step">
            <div class="bubble"></div>
          </div>
        </div>
        <div class="line2">
          <div class="step ltr">
            <div class="pic wow tada">
              <img src="/wp-content/themes/csm/assets/images/minipic-27.svg" width="153" height="95" alt="">
            </div>
          </div>
          <div class="step rtl">
            <div class="head">Сбор нужных документов
              по&nbsp;программе
            </div>
            <div class="desc">Занимаемся сбором всех необходимых бумаг, в том числе осуществляем перевод и восстановление документов.
            </div>
          </div>
          <div class="step ltr">
            <div class="pic wow tada">
              <img src="/wp-content/themes/csm/assets/images/minipic-29.svg" width="133" height="88"
                   alt=""></div>
          </div>
          <div class="step rtl">
            <div class="head">Заявление на выдачу
              (ГР.РФ, ВНЖ, РВП)
            </div>
            <div class="desc">Помогаем заполнить и подать заявление в компетентные органы, прилагая установленный законом пакет документов.
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>



<?php

/*require_once('php/DiDom/Node.php');
require_once('php/DiDom/ClassAttribute.php');
require_once('php/DiDom/Document.php');
require_once('php/DiDom/DocumentFragment.php');
require_once('php/DiDom/Element.php');
require_once('php/DiDom/Encoder.php');
require_once('php/DiDom/Errors.php');
require_once('php/DiDom/Query.php');
require_once('php/DiDom/StyleAttribute.php');
require_once('php/DiDom/Exceptions/InvalidSelectorException.php');
use DiDom\ClassAttribute;
use DiDom\Document;
use DiDom\Element;
use DiDom\Encoder;
use DiDom\Errors;
use DiDom\Query;
use DiDom\StyleAttribute;
use DiDom\Exceptions\InvalidSelectorException;

$document = new Document('https://pflk.kz/rus/championships/2', true);

$posts = $document->find('.table-onmain');

foreach($posts as $post) {
  echo $post->html(), "\n";
}*/

?>



<?php
  get_footer();
?>

</div>

<script>
  var flag = 0;
  jQuery(document).ready(function ($) {
    jQuery('#sidebar').portamento({wrapper: $('.divide-2-1_right'), gap: 30});
  });
  jQuery(window).scroll(function () {
    var count_top = (jQuery('.counts').offset().top) - 500;
    var steps_top = (jQuery('.home-page_steps').offset().top) - 500;
    scroll = jQuery(window).scrollTop();
    if (scroll > count_top) {
      if (flag == 0) {
        jQuery('.count_1 .number').animateNumber({number: 920},{easing: 'swing', duration: 2000});
        jQuery('.count_2 .number').animateNumber({number: 710 },{easing: 'swing', duration: 2000});
        jQuery('.count_3 .number').animateNumber({number: 7 },{easing: 'swing', duration: 2000});
        flag = 1;
      }
    }
  });
</script>
