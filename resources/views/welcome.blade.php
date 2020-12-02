@extends('layouts.main')

@section('content')
<section id="hero">
    <div
      id="heroCarousel"
      class="carousel slide carousel-fade"
      data-ride="carousel"
    >
      <ol class="carousel-indicators" id="hero-carousel-indicators">
        <li data-target="#heroCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#heroCarousel" data-slide-to="1"></li>
        <li data-target="#heroCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div
          class="carousel-item active"
          style="background-image: url(img/showcase4.jpg);"
        >
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">
              Ваш замерщика на дом
              </h2>
              <p class="">
                Воспользуйтесь нашими сервисами, для расчета стоимости горизонтальных жалюзи и карнизов. 
Также Вы можете взывать замерщика на дом.
              </p>
              <a href="#about" class="btn-get-started scrollto">Взывать Замерщика</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div
          class="carousel-item"
          style="background-image: url(img/showcase2.jpg);"
        >
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">
                Для дилеров скидка до 30%                </h2>
              <p class="animate__animated animate__fadeInUp">
                Предлагаем Вам горизонтальные жалюзи ISOLITE (изолайт) – новое поколение солнцезащитных систем, получившее широкое распространение во всем мире
              </p>
              <a
                href="#about"
                class="btn-get-started animate__animated animate__fadeInUp scrollto"
                >Заказать Сейчас</a
              >
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div
          class="carousel-item"
          style="background-image: url(img/showcase3.jpg);"
        >
          <div class="carousel-container">
            <div class="container">
              <h2 class="">
                Cкидки до 40% для партнеров
              </h2>
              <p class="">
                Приглашаем к сотрудничеству архитектурные бюро, текстильные и
                дизайнерские студии и магазины.
              </p>
              <a href="#" class="btn-get-started scrollto">Стать Партнером</a>
            </div>
          </div>
        </div>
      </div>

      <a
        class="carousel-control-prev"
        href="#heroCarousel"
        role="button"
        data-slide="prev"
      >
        <i class="material-icons">chevron_left</i>

        <span class="sr-only">Previous</span>
      </a>

      <a
        class="carousel-control-next"
        href="#heroCarousel"
        role="button"
        data-slide="next"
      >
        <i class="material-icons">chevron_right</i>
        <span class="sr-only">Next</span>
      </a>
    </div>
    8
  </section>
  <!-- Сatalog -->
  <section class="container catalog">
    <h2 class="title">Каталог</h3>
    <div class="row">       
    
    @for ($i = 1; $i < 5; $i++)
       
        <div class="col-md-6 col-sm-12 mb-4">
            <div class="card">
                <a href="#"><img class="card-img-top" src="img/product1.jpg" alt=""/></a>
            <div class="card-body">
                <h4 class="card-title"><a href="#" class="text-purple">Item One</a></h4>

                <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
              numquam aspernatur!
                </p>
            </div>
        </div>
    </div>
    @endfor
    
    </div>
    
    </div>
  </section>
  <!-- Testimonials -->
  <section class="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-center m-auto">
          <h2>Что о нас говорят</h2>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
           
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
              <div class="item carousel-item active">
                <div class="img-box">
                  <img
                    src="https://www.tutorialrepublic.com/examples/images/clients/1.jpg"
                    alt=""
                  />
                </div>
                <p class="testimonial">
                  Выражаю особую благодарность Копании "АндерСан" за первоклассное отношение к клиентам. Заказывала в офис рулонные шторы, остались очень довольны, шторы служат уже 7 лет. А в 2017 году заказывала шторы и жалюзи домой. Шторы великолепные, ткань просто супер, особенно довольна дочь, потому, что у нее теперь не комната а сказка. 
                </p>
                <p class="overview"><b>Галина</b></p>
                <div class="grade">
                  <i class="material-icons">grade</i>
                  <i class="material-icons">grade</i>
                  <i class="material-icons">grade</i>
                  <i class="material-icons">grade</i>
                  <i class="material-icons">grade</i>
                </div>
              </div>
              <div class="item carousel-item">
                <div class="img-box">
                  <img
                    src="https://www.tutorialrepublic.com/examples/images/clients/2.jpg"
                    alt=""
                  />
                </div>
                <p class="testimonial">
Заказывал жалюзи в спальню детям. Остались довольны качеством! Сделали быстро и красиво. Все довольны. Заказали ещё на кухню жалюзи. Рекомендую всем.
                </p>
                <p class="overview"><b>Григорий</b></p>
                <div class="grade">
                  <i class="material-icons">grade</i>
                  <i class="material-icons">grade</i>
                  <i class="material-icons">grade</i>
                  <i class="material-icons">grade</i>
                  <i class="material-icons">grade</i>
                </div>
              </div>
              <div class="item carousel-item">
                <div class="img-box">
                  <img
                    src="https://www.tutorialrepublic.com/examples/images/clients/3.jpg"
                    alt=""
                  />
                </div>
                <p class="testimonial">
                  Отличная компания. Заказывал рулонные шторы на работу, домой и на дачу. Всегда дружелюбно встречают, расскажут, помогут. Отличное качество материалов и изготовления. Цены приятно удивляют.
                </p>
                <p class="overview"><b>Евгении</b></p>
                <div class="grade">
                  <i class="material-icons">grade</i>
                  <i class="material-icons">grade</i>
                  <i class="material-icons">grade</i>
                  <i class="material-icons">grade</i>
                  <i class="material-icons">grade</i>
                </div>
              </div>
            </div>
            <!-- Carousel controls -->
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->
  <a href="#" class="back-to-top">
    <i class="material-icons">arrow_drop_up</i>
  </a>
@endsection