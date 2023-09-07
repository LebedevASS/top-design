<?php

  get_header();

?>

<?php

/*Template NAME: about*/

?>

      <!-- Блок "О нас" -->
      <div class="container">
        <div id="about" class="about p-5 pb-md-4 mx-auto text-center">
          <h2 class="display-4 fw-600 text-body-emphasis"><?php the_title(); ?></h2>
          <h3 class="display-6 fw-600 text-center mb-4"><?php echo get_post_meta(get_the_ID(), 'h3', true ); ?></h3>
        </div>
        <div class="d-flex wrap featurette">
          <div class="inner"> 
            <p class="lead"><?php echo get_post_meta(get_the_ID(), 'descr', true ); ?></p> <br>
            <a class="btn btn-lg btn-primary uppercase mb-4" href="#">Learn more</a>
          </div>
          <div class="inner">
            <?php $image_id = get_post_meta(get_the_ID(), 'img', true); if ($image_id)  echo wp_get_attachment_image($image_id, 'full');?>
          </div>
        </div>
      </div>

<?php

  get_footer();

?>