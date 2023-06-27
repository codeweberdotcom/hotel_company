<?php

/**
 * Contact hotel
 */
if (get_sub_field('class_div')) {
   $class_cust = get_sub_field('class_div');
} else {
   $class_cust = '';
}

$bg_image = '' . get_template_directory_uri() . '/dist/img/photos/tm1.jpg';

if (get_sub_field('cw_image_bg')) {
   $bg_image = get_sub_field('cw_image_bg');
}

$contact_form = get_sub_field('contact_form');
if ($contact_form) {
   foreach ($contact_form as $post_ids) {
      $contact_link =  do_shortcode('[contact-form-7 id="' . $post_ids . '"]');
   }
   $cf_form = $contact_link;
} else {
   $cf_form = $demo_form;
}



$block = new CW_Settings(
   $cw_settings = array(

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-xl-10 mx-auto <?php echo $class_cust; ?>">
            <div class="card rounded-0">
               <div class="row gx-0">
                  <div class="col-lg-6 image-wrapper bg-image bg-cover d-none d-md-block" data-image-src="<?php echo $bg_image; ?> <?php echo $block->column_class_1; ?>">
                  </div>
                  <!--/column -->
                  <div class="col-lg-6 <?php echo $block->column_class_2; ?>">
                     <div class="p-6 p-md-6 p-lg-10">
                        <?php echo $cf_form; ?>
                        <!-- /form -->
                        <!--/div -->
                     </div>
                     <!--/div -->
                  </div>
                  <!--/column -->
               </div>
               <!--/.row -->
            </div>
            <!-- /.card -->
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