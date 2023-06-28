<?php

/**
 * Facts hotel
 */

if (get_sub_field('images')) {
   $img_src = get_sub_field('images');
}

$block = new CW_Settings(
   $cw_settings = array(
      // 'subtitle' => 'Company Facts',
      // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-primary mb-3 %2$s">%1$s</h2>',

      // 'title' => 'We are proud of our works',
      // 'patternTitle' => '<h3 class="display-4 pe-xl-15 %2$s">%1$s</h3>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      // 'column_class_1' => '',
      // 'column_class_2' => 'order-lg-2',

      'features' => '<div class="col-md-3"><div class="d-flex flex-row"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm text-aqua me-4" alt="" /></div><div><h4 class="mb-1">Fitness Goal</h4><p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem aget elit nullam quis risus eget.</p></div></div></div><!--/column -->',
      'features_pattern' => '<div class="col-md-3 %1$s"><div class="d-flex flex-row %6$s"><div>%2$s</div><div>%3$s %4$s %5$s</div></div></div><!--/column -->',
      'features_style_icon' => 'me-0 w-5',
      'feature_pattern_title' => '<div class="h3 counter %2$s">%1$s</div>',
      'feature_pattern_paragraph' => '<p class="mb-0 %2$s">%1$s</p>',
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-9 py-md-11">
      <div class="row align-items-center">
         <div class="col-lg-2 mb-6 mb-lg-0">
            <figure class="px-3 px-md-0 px-xxl-2"> <img src="<?php echo $img_src; ?>" alt="" /></figure>
         </div>
         <!-- /column -->
         <div class="col-lg-10">
            <div class="row align-items-center counter-wrapper gy-6">
               <?php echo $block->features; ?>
               <!--/features -->
            </div>
            <!--/.row -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->