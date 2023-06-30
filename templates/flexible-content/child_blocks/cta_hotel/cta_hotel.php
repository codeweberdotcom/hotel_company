<?php

/**
 *  Call to Action Hotel
 */

/** Phone */
$phone = get_field('phone', 'option');


$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Get Consultation',
      'patternTitle' => '<h2 class="fs-24 fw-normal mb-0 me-lg-16 %2$s">%1$s</h2>',

      'subtitle' => 'Call Now',
      'patternSubtitle' => '<p class="lh-1 mb-0 %2$s">%1$s</p>',

      'buttons' => '<span><a class="btn btn-lg btn-white rounded-pill mb-0 text-nowrap">Call Back</a></span>',
      'buttons_pattern' => '<div class="d-flex justify-content-center flex-wrap justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'bg-overlay bg-overlay-400 image-wrapper bg-image bg-cover',
      'background_data_default' => '/dist/img/photos/bg3.jpg',

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="wrapper bg-light position-relative shadow-lg">
   <div class="container">
      <div class="row">
         <div class="bg-cta wrapper col-md-6 position-absolute top-0 start-0 <?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>></div>
         <div class="col-md-6 py-9 zindex-1 d-flex align-items-center">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
         </div>
         <div class="col-md-6 py-9 d-flex flex-wrap align-items-lg-center justify-content-end">
            <div class="text-end mb-3 mb-xl-0">
               <?php echo $block->subtitle_second; ?>
               <!--/subtitle -->
               <?php if (get_sub_field('phone') == 'Option page') : ?>
                  <div class="d-flex align-items-center text-primary justify-content-md-en">
                     <a href="tel:<?php echo esc_html($phone); ?>" class="me-3 fs-22 lh-1 fw-semibol"><i class="uil uil-forwaded-call"></i></a><a class="fs-22 lh-1 fw-semibold" href="tel:<?php echo esc_attr($phone); ?>"><?php echo esc_html($phone); ?></a>
                  </div>
               <?php elseif (get_sub_field('phone') == 'Custom') : ?>
                  <div class="d-flex align-items-center text-primary justify-content-md-en">
                     <a href="tel:<?php echo esc_html($phone); ?>" class="me-3 fs-22 lh-1 fw-semibol"><i class="uil uil-forwaded-call"></i></a><a class="fs-22 lh-1 fw-semibold" href="tel:<?php the_sub_field('custom_phone'); ?>"><?php the_sub_field('custom_phone'); ?></a>
                  </div>
               <?php endif; ?>
            </div>
            <div class="justify-content-end ms-5">
               <?php echo $block->buttons; ?>
               <!--/buttons group -->
            </div>

         </div>
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->