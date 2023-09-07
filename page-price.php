<?php

  get_header();

?>

<?php

/*Template NAME: price*/

?>

      <!-- Блок с ценами -->
      <div id="price" class="price-inner">  
        <div class="container">
          <div class="pricing-header p-3 pb-md-4 mx-auto text-center uppercase">
            <h2 class="display-4 fw-600 text-body-emphasis"><?php the_title(); ?></h2>
            <h3 class="display-6 fw-600 text-center mb-4"><?php echo get_post_meta(get_the_ID(), 'h3', true ); ?></h3>
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
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mb-3 text-center wrap">
            <?php     
                  $my_posts = get_posts( array(
                    'numberposts' => 5,
                    'category'    => 0,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  =>'',
                    'post_type'   => 'card',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                  ) );

                  global $post;

                  foreach( $my_posts as $post ){
                    setup_postdata( $post );

                    // формат вывода the_title() ...
                    ?>
                    <div class="col">
                      <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                          <h2 class="my-0 fw-600 uppercase"><?php the_title(); ?></h2>
                          <?php the_content(); ?>
                        </div>
                      </div>
                    </div>
                  <?php
                  }

                  wp_reset_postdata(); // сброс

                ?>

            
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h2 class="my-0 fw-600 uppercase">standart</h2>
                </div>
                <div class="card-body">
                  <h2 class="card-title pricing-card-title">$14.99</h2>
                  <p class="text-body-secondary fw-600">/ MONTH</p>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>Tracking issues</li>
                    <li>Add bugs through email</li>
                    <li>Notifications</li>
                    <li>Time tracking</li>
                    <li>Custom views</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg btn-primary uppercase">choose</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h2 class="my-0 fw-600 uppercase">LUXE</h2>
                </div>
                <div class="card-body">
                  <h2 class="card-title pricing-card-title">$19.99</h2>
                  <p class="text-body-secondary fw-600">/ MONTH</p>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>Tracking issues</li>
                    <li>Add bugs through email</li>
                    <li>Notifications</li>
                    <li>Time tracking</li>
                    <li>Custom views</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg btn-primary uppercase">choose</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h2 class="my-0 fw-600 uppercase">Premium</h2>
                </div>
                <div class="card-body">
                  <h2 class="card-title pricing-card-title">$24.99</h2>
                  <p class="text-body-secondary fw-600">/ MONTH</p>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>Tracking issues</li>
                    <li>Add bugs through email</li>
                    <li>Notifications</li>
                    <li>Time tracking</li>
                    <li>Custom views</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg btn-primary uppercase">choose</button>
                </div>
              </div>
            </div>
        </div>
      </div>
        </div>
      </div>
          
<?php

  get_footer();

?>