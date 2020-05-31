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
          <div class="color-bg hb-pink">
            <div class="in">
              <div class="inner">
                <header>
                  Гражданство без ожидания!
                </header>
                <div class="desc">
                  Не жди 5 лет после получения Вида на жительство, узнай
                  как быстро получить паспарт, без ожидания!
                </div>
                <a href="#" class="btn btn-grad btn-blue">Получить консультацию</a>
                <img src="/wp-content/themes/csm/assets/images/pic-12.svg" width="522" height="433" alt="">
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="color-bg hb-darkblue">
            <div class="in">
              <div class="inner">
                <header>
                  ВНЖ без квоты и РВП!
                </header>
                <div class="desc">Ты можешь получить ВНЖ сразу!</div>
                <a href="#" class="btn btn-grad btn-pink">Получить консультацию</a>
                <img src="/wp-content/themes/csm/assets/images/pic-13.svg" width="522" height="416" alt="">
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="color-bg hb-blue">
            <div class="in">
              <div class="inner">
                <header>
                  РВП всего за 2 месяца!
                </header>
                <div class="desc">
                  РВП в Москве и Московской области, самые быстрые сроки в&nbsp;<?php echo date('Y'); ?>
                </div>
                <a href="#" class="btn btn-grad btn-pink">Получить консультацию</a>
                <img src="/wp-content/themes/csm/assets/images/pic-14.svg" width="597" height="429" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="customNextBtn owl_custom_nav"></div>

      <!--  <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/css/animate.css">-->

      <script>
        jQuery(document).ready(function () {
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
              <div class="left">
                <img src="/wp-content/themes/csm/assets/images/pic-18.svg" width="423" height="406" alt="">
              </div>
              <div class="right">
                <div class="header">Как получить разрешение не временное пребывание?</div>
                <div class="desc">Порой проблемы появляются из неоткуда, просто
                  потому, что мигрант не совсем хорошо ориентируется в законе РФ.
                </div>
                <a href="#" class="btn btn-blue">Подробнее</a>
              </div>
            </div>
            <div class="rtl">
              <div class="left">
                <img src="/wp-content/themes/csm/assets/images/pic-19.svg" width="398" height="338" alt="">
              </div>
              <div class="right">
                <div class="header">Сколько стоит Гражданство?</div>
                <div class="desc">Частый вопрос волнующий людей который хотят получить гражданство РФ. Какая бывает
                  помощь в получении гражданства РФ.
                </div>
                <a href="#" class="btn btn-blue">Подробнее</a>
              </div>
            </div>
            <div class="ltr">
              <div class="left">
                <img src="/wp-content/themes/csm/assets/images/pic-20.svg" width="414" height="337" alt="">
              </div>
              <div class="right">
                <div class="header">Помощь в оформлении документов</div>
                <div class="desc">Порой проблемы появляются из неоткуда, просто
                  потому, что мигрант не совсем хорошо ориентируется в законе РФ.
                </div>
                <a href="#" class="btn btn-blue">Подробнее</a>
              </div>
            </div>
          </div>
          <div class="divide-2-1 divide-2-1_right">
            <div class="consul-block" id="sidebar">
              <div class="consul-block__head">
                <div class="consul-block__title">ваш консультант</div>
                <div class="consul-block__name">Юрий Иванов</div>
                <div class="consul-block__desc">Ведущий юрист по&nbsp;вопросам миграции</div>
                <div class="consul-block__social-btns"></div>
              </div>
              <div class="footer">
                <form action="">
                  <div class="header">Оставьте заявку</div>
                  <div class="desc">Оставьте свои данные и я перезвоню вам.</div>
                  <input type="text" placeholder="Имя"/>
                  <input type="tel" placeholder="Телефон"/>
                  <input type="email" placeholder="Email"/>
                  <input type="submit" value="Перезвоните мне"/>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="home-page_howto-footer"></div>
    <!-- -->


    <!-- Цифры -->
    <div class="in">
      <div class="counts">
        <div class="count count_1">
          <div class="desc">Человек обратилось к нам</div>
          <div class="number">0</div>
          <div class="pic"><img src="/wp-content/themes/csm/assets/images/pic-22.svg" width="357" height="284" alt="">
          </div>
        </div>
        <div class="count count_2">
          <div class="desc">Человек получили положительный результат</div>
          <div class="number">0</div>
          <div class="pic"><img src="/wp-content/themes/csm/assets/images/pic-23.svg" width="345" height="279" alt="">
          </div>
        </div>
        <div class="count count_3">
          <div class="desc">Дней мы готовим документы</div>
          <div class="number">0</div>
          <div class="pic"><img src="/wp-content/themes/csm/assets/images/pic-24.svg" width="353" height="282" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- -->


    <!-- -->
    <div class="oval"></div>
    <div class="sotrud">
      <div class="in">
        <h3>Сотрудничая с нами вы получаете:</h3>
        <p>Помощь в миграционных услугах для иностранных граждан в России
          <span>от переводов документов до оформления гражданства.</span></p>

        <div class="sotrud_triple">
          <div class="sotrud_triple_block stb1">
            <div class="pic"><img src="/wp-content/themes/csm/assets/images/pic-28.svg" width="385" height="325" alt="">
            </div>
            <div class="head">Оформление документов в Москве</div>
            <div class="desc">Заполнение заявлений, сбор и подготовка документов для получения РВП, ВНЖ, НРЯ,
              гражданства РФ. Экзамены, медкомиссии. А также СНИЛС, ИНН, апостиль, нострификация.
            </div>
          </div>
          <div class="sotrud_triple_block stb2">
            <div class="pic"><img src="/wp-content/themes/csm/assets/images/pic-29.svg" width="414" height="324" alt="">
            </div>
            <div class="head">Для жителей СНГ</div>
            <div class="desc">Восстановление документов из ЗАГСа Украины, получение справки о несудимости, справки о
              том, что не состоите в браке на Украине. Переводы документов с украинского на русский язык
            </div>
          </div>
          <div class="sotrud_triple_block stb3">
            <div class="pic"><img src="/wp-content/themes/csm/assets/images/pic-30.svg" width="386" height="324" alt="">
            </div>
            <div class="head">Гражданство — это легко!</div>
            <div class="desc">Юридическая помощь и сопровождение нашими юристами с целью получения гражданства РФ.
              Оформление с нуля и до получения паспорта РФ.
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
              <div class="desc">Подбор программы и проверка
                документов, анализ ситуации.
              </div>
            </div>
            <div class="step">
              <div class="pic animate__animated animate__tada animate__bounce animate__delay-2s">
                <img
                  src="/wp-content/themes/csm/assets/images/minipic-28.svg" width="94" height="105"
                  alt=""></div>
            </div>
            <div class="step">
              <div class="head">Медицинское заключение</div>
              <div class="desc">Подбор программы и проверка
                документов, анализ ситуации.
              </div>
            </div>
            <div class="step">
              <div class="pic animate__animated animate__tada animate__bounce animate__delay-4s">
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
              <div class="pic animate__animated animate__tada animate__bounce animate__delay-1s">
                <img src="/wp-content/themes/csm/assets/images/minipic-27.svg" width="153" height="95" alt="">
              </div>
            </div>
            <div class="step rtl">
              <div class="head">Сбор нужных документов
                по&nbsp;программе
              </div>
              <div class="desc">Подбор программы и проверка
                документов, анализ ситуации.
              </div>
            </div>
            <div class="step ltr">
              <div class="pic animate__animated animate__tada animate__bounce animate__delay-3s">
                <img src="/wp-content/themes/csm/assets/images/minipic-29.svg" width="133" height="88"
                     alt=""></div>
            </div>
            <div class="step rtl">
              <div class="head">Заявление на выдачу
                (ГР.РФ, ВНЖ, РВП)
              </div>
              <div class="desc">Подбор программы и проверка
                документов, анализ ситуации.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="home-page_bot__contact-block">
        <div class="in">
          <div class="megaoval">
            <div class="inner">
              <div class="consul-block__head">
                <div class="consul-block__title">ваш консультант</div>
                <div class="consul-block__name">Юрий Иванов</div>
                <div class="consul-block__desc">Ведущий юрист по&nbsp;вопросам миграции</div>
                <div class="consul-block__social-btns"></div>
              </div>
              <div class="consul_form">
                  <div class="head">Получите подробную бесплатную консультацию
                    у специалиста по вопросам гражданства и программ.</div>
                <div class="form lineform">
                  <form action="">
                    <input type="text" placeholder="Имя" class="startinput"/>
                    <input type="tel" placeholder="Телефон"/>
                    <input type="submit" value="Заказать"/>
                  </form>
                </div>
              </div>
              <div class="consul_form_bottom"></div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <script>
      var flag = 0;
      jQuery(document).ready(function ($) {
        jQuery('#sidebar').portamento({wrapper: $('.home-page_howto'), gap: 10});
      });

      jQuery(window).scroll(function(){


        var count_top = (jQuery('.counts').offset().top)-500;


        if(scroll>count_top){
          if (flag == 0) {
            jQuery('.count_1 .number').animateNumber({
                number: 300
              },
              {
                easing: 'swing',
                duration: 2000
              }
            );
            jQuery('.count_2 .number').animateNumber({
                number: 56
              },
              {
                easing: 'swing',
                duration: 2000
              }
            );
            jQuery('.count_3 .number').animateNumber({
                number: 20
              },
              {
                easing: 'swing',
                duration: 2000
              }
            );
            flag = 1;
          }
        }

      });
    </script>

<?php
get_footer();
?>

  </div>

