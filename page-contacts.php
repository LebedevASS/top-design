<?php

  get_header();

?>

<?php

/*Template NAME: contacts*/

?>

      <!-- Блок с контактной формой -->
      <div id="contact" class="contact-inner">
        <div class="contact p-5 pb-md-4 mx-auto text-center uppercase">
          <h2 class="display-4 fw-600 text-body-emphasis"><?php the_title(); ?></h2>
          <h3 class="display-6 fw-600 text-center mb-4"><?php echo get_post_meta(get_the_ID(), 'descr', true ); ?></h3>
        </div>
        <div class="container">          

              <?php echo do_shortcode( get_post_meta( get_the_ID(), 'form', true ) ); ?>

        </div>
      </div>
    </main>  

<?php

  get_footer();

?>