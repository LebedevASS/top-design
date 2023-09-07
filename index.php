<?php

  get_header();

?>

    <main>
      <!-- Блок карусели -->
      <div id="myCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="none"/></svg>
            <div class="container">
              <div class="carousel-caption">
                <h1>Design is about <br><span class="color-prim">communication</span></h1>
                <p class="opacity-75 uppercase">call us: +00 0 1234 5678</p>
                <p><a class="btn btn-lg btn-primary uppercase" href="#">Get In Touch</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="none"/></svg>
            <div class="container">
              <div class="carousel-caption">
                <h1>Design is about <br><span class="color-prim">communication</span></h1>
                <p class="opacity-75 uppercase">call us: +00 0 1234 5678</p>
                <p><a class="btn btn-lg btn-primary uppercase" href="#">Get In Touch</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="none"/></svg>
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>One more for good measure.</h1>
                <p>Some representative placeholder content for the third slide of this carousel</p>
                <p><a class="btn btn-lg btn-primary uppercase" href="#">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Кнопка-трубка -->
      <button id="call-me" class="call-me" href="#"></button>
      <!-- Блок "О нас" -->
      <div class="container">
        <div id="about" class="about p-3 pb-md-4 mx-auto text-center">
          <h2 class="display-4 fw-600 text-body-emphasis"><?php the_title(); ?></h2>
          <h3 class="display-6 fw-600 text-center mb-4"><?php echo get_post_meta(get_the_ID(), 'h3', true ); ?></h3>
        </div>
        <div class="d-flex wrap featurette">
          <div class="inner"> 
            <p class="lead"><?php echo get_post_meta(get_the_ID(), 'descr', true ); ?></p> <br>
            <?php echo get_post_meta(get_the_ID(), 'more', true ); ?>
          </div>
          <div class="inner">
            <?php $image_id = get_post_meta(get_the_ID(), 'img', true); if ($image_id)  echo wp_get_attachment_image($image_id, 'full');?>
          </div>
        </div>
      </div>
      <!-- Блок с ценами -->
      <div id="price" class="price-inner">  
        <div class="container">
          <div class="pricing-header p-3 pb-md-4 mx-auto text-center uppercase">
          <h2 class="display-4 fw-600 text-body-emphasis"><?php echo get_post_meta(get_the_ID(), 'h2', true ); ?></h2>
            <h3 class="display-6 fw-600 text-center mb-4"><?php echo get_post_meta(get_the_ID(), 'h3-2', true ); ?></h3>
          </div>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mb-3 text-center wrap">
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">

                        <?php
                          $field = get_field('express'); // Замените 'your_field_name' на имя поля ACF
                          if ($field) {
                              // Проверка, выбрано ли значение для поля
                              $post = $field; // Установка выбранной записи в переменную $post
                              setup_postdata($post); // Установка глобальных переменных записи

                              // верстка для вывода данных записи
                        ?>
                  <h2><?php the_title(); ?></h2>
                <div class="card-body"></div>
                  <h2 class="card-title pricing-card-title"><?php echo get_post_meta(get_the_ID(), 'price', true ); ?></h2>
                  <p class="text-body-secondary fw-600"><?php echo get_post_meta(get_the_ID(), 'month', true ); ?></p>
                  <?php 
                  echo get_post_meta(get_the_ID(), 'descr3', true ); 
                  echo get_post_meta(get_the_ID(), 'choose', true ); 
                  ?>
                  <?php
                      wp_reset_postdata(); // Сброс глобальных переменных записи
                  }
                  ?>
                  
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">

                        <?php
                          $field = get_field('standart'); // Замените 'your_field_name' на имя поля ACF
                          if ($field) {
                              // Проверка, выбрано ли значение для поля
                              $post = $field; // Установка выбранной записи в переменную $post
                              setup_postdata($post); // Установка глобальных переменных записи

                              // верстка для вывода данных записи
                        ?>
                  <h2><?php the_title(); ?></h2>
                <div class="card-body"></div>
                  <h2 class="card-title pricing-card-title"><?php echo get_post_meta(get_the_ID(), 'price', true ); ?></h2>
                  <p class="text-body-secondary fw-600"><?php echo get_post_meta(get_the_ID(), 'month', true ); ?></p>
                  <?php 
                  echo get_post_meta(get_the_ID(), 'descr3', true ); 
                  echo get_post_meta(get_the_ID(), 'choose', true ); 
                  ?>
                  <?php
                      wp_reset_postdata(); // Сброс глобальных переменных записи
                  }
                  ?>
                  
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">

                        <?php
                          $field = get_field('LUXE'); // Замените 'your_field_name' на имя поля ACF
                          if ($field) {
                              // Проверка, выбрано ли значение для поля
                              $post = $field; // Установка выбранной записи в переменную $post
                              setup_postdata($post); // Установка глобальных переменных записи

                              // верстка для вывода данных записи
                        ?>
                  <h2><?php the_title(); ?></h2>
                <div class="card-body"></div>
                  <h2 class="card-title pricing-card-title"><?php echo get_post_meta(get_the_ID(), 'price', true ); ?></h2>
                  <p class="text-body-secondary fw-600"><?php echo get_post_meta(get_the_ID(), 'month', true ); ?></p>
                  <?php 
                  echo get_post_meta(get_the_ID(), 'descr3', true ); 
                  echo get_post_meta(get_the_ID(), 'choose', true ); 
                  ?>
                  <?php
                      wp_reset_postdata(); // Сброс глобальных переменных записи
                  }
                  ?>
                  
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">

                        <?php
                          $field = get_field('Premium'); // Замените 'your_field_name' на имя поля ACF
                          if ($field) {
                              // Проверка, выбрано ли значение для поля
                              $post = $field; // Установка выбранной записи в переменную $post
                              setup_postdata($post); // Установка глобальных переменных записи

                              // верстка для вывода данных записи
                        ?>
                  <h2><?php the_title(); ?></h2>
                <div class="card-body"></div>
                  <h2 class="card-title pricing-card-title"><?php echo get_post_meta(get_the_ID(), 'price', true ); ?></h2>
                  <p class="text-body-secondary fw-600"><?php echo get_post_meta(get_the_ID(), 'month', true ); ?></p>
                  <?php 
                  echo get_post_meta(get_the_ID(), 'descr3', true ); 
                  echo get_post_meta(get_the_ID(), 'choose', true ); 
                  ?>
                  <?php
                      wp_reset_postdata(); // Сброс глобальных переменных записи
                  }
                  ?>
                  
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <!-- Блок с контактной формой -->
      <div id="contact" class="contact-inner">
        <div class="contact p-5 pb-md-4 mx-auto text-center uppercase">
        <h2 class="display-4 fw-600 text-body-emphasis"><?php echo get_post_meta(get_the_ID(), 'h2-2', true ); ?></h2>
        <h3 class="display-6 fw-600 text-center mb-4"><?php echo get_post_meta(get_the_ID(), 'h3-3', true ); ?></h3>
        </div>
        <div class="container">

        <?php echo do_shortcode( get_post_meta( get_the_ID(), 'form', true ) ); ?>
          
        </div>
      </div>
    </main>  
    <!-- FOOTER -->

<?php

  get_footer();

?>