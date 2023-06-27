<?php

/**
 *  Call to Action Hotel
 */

/** Phone */
$phone = get_field('phone', 'option');


$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Get Consultation',
      'patternTitle' => '<h2 class="fs-24 fw-normal mb-4 mb-lg-0 me-lg-16 %2$s">%1$s</h2>',

      'subtitle' => 'Call Now',
      'patternSubtitle' => '<p class="mb-0 %2$s">%1$s</p>',

      'buttons' => '<span><a class="btn btn-lg btn-white rounded-pill mb-0 text-nowrap">Call Back</a></span>',
      'buttons_pattern' => '<div class="d-flex justify-content-center flex-wrap justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'bg-overlay bg-overlay-400 image-wrapper bg-image bg-cover',
      'background_data_default' => '/dist/img/photos/bg3.jpg',

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="wrapper bg-light position-relative">
   <div class="container">
      <div class="row py-9">
         <div class="bg-cta wrapper col-md-6 position-absolute top-0 start-0 <?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>></div>
         <div class="col-md-6 position-relative pb-6 pb-md-0">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
         </div>
         <div class="col-md-6 d-lg-flex align-items-lg-center">
            <div class="col d-flex text-md-end justify-content-md-end">
               <div class="d-flex mb-4 mb-lg-0">
                  <div>
                     <?php echo $block->subtitle_second; ?>
                     <!--/subtitle -->
                     <?php if (get_sub_field('phone') == 'Option page') : ?>
                        <a href="tel:<?php echo esc_html($phone); ?>" class="me-3"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M13.695 6.01337H16.9766L16.2525 6.74671C16.0817 6.91846 15.9859 7.15079 15.9859 7.39296C15.9859 7.63513 16.0817 7.86746 16.2525 8.03921C16.4242 8.20994 16.6566 8.30577 16.8987 8.30577C17.1409 8.30577 17.3732 8.20994 17.545 8.03921L19.8366 5.74754C20.0074 5.57579 20.1032 5.34346 20.1032 5.10129C20.1032 4.85912 20.0074 4.62679 19.8366 4.45504L17.545 2.16338C17.3696 2.0132 17.144 1.93473 16.9133 1.94364C16.6826 1.95255 16.4638 2.04819 16.3005 2.21144C16.1373 2.3747 16.0416 2.59354 16.0327 2.82424C16.0238 3.05495 16.1023 3.28052 16.2525 3.45588L16.9766 4.18004H13.695C13.4519 4.18004 13.2187 4.27662 13.0468 4.44853C12.8749 4.62044 12.7783 4.85359 12.7783 5.09671C12.7783 5.33982 12.8749 5.57298 13.0468 5.74489C13.2187 5.9168 13.4519 6.01337 13.695 6.01337ZM17.82 11.9167C17.6183 11.9167 17.4075 11.8525 17.2058 11.8067C16.7974 11.7167 16.3961 11.5972 16.005 11.4492C15.5797 11.2945 15.1123 11.3025 14.6926 11.4718C14.2729 11.641 13.9306 11.9595 13.7316 12.3659L13.53 12.7784C12.6371 12.2817 11.8167 11.6648 11.0916 10.945C10.3718 10.22 9.75497 9.39954 9.2583 8.50671L9.6433 8.25004C10.0497 8.05105 10.3682 7.70878 10.5374 7.28909C10.7066 6.86941 10.7147 6.40196 10.56 5.97671C10.4144 5.58476 10.295 5.18361 10.2025 4.77588C10.1566 4.57421 10.12 4.36338 10.0925 4.15254C9.98116 3.50686 9.64296 2.92214 9.13879 2.50368C8.63462 2.08522 7.99761 1.86052 7.34247 1.87004H4.59247C4.19742 1.86633 3.8062 1.94779 3.44545 2.10886C3.08471 2.26994 2.7629 2.50685 2.50195 2.80347C2.24099 3.10009 2.04701 3.44945 1.93321 3.82778C1.81941 4.20611 1.78846 4.60451 1.84247 4.99587C2.33081 8.83614 4.08466 12.4043 6.82698 15.1366C9.56931 17.869 13.1438 19.6098 16.9858 20.0842H17.3341C18.0101 20.0852 18.6628 19.8372 19.1675 19.3875C19.4575 19.1282 19.6891 18.8102 19.8471 18.4547C20.0052 18.0991 20.0859 17.7141 20.0841 17.325V14.575C20.0729 13.9383 19.841 13.3252 19.4281 12.8404C19.0152 12.3556 18.4468 12.0291 17.82 11.9167ZM18.2783 17.4167C18.2781 17.5469 18.2503 17.6755 18.1965 17.794C18.1428 17.9126 18.0644 18.0183 17.9666 18.1042C17.8642 18.1926 17.7444 18.2587 17.615 18.2982C17.4856 18.3376 17.3493 18.3496 17.215 18.3334C13.782 17.8932 10.5932 16.3227 8.15163 13.8695C5.71007 11.4163 4.15468 8.2201 3.7308 4.78504C3.71621 4.65077 3.729 4.51493 3.76839 4.38573C3.80778 4.25654 3.87295 4.13667 3.95997 4.03338C4.04587 3.9356 4.15161 3.85723 4.27015 3.80349C4.38869 3.74975 4.51732 3.72187 4.64747 3.72171H7.39747C7.61064 3.71697 7.81879 3.78668 7.9861 3.91886C8.15341 4.05103 8.26941 4.2374 8.31414 4.44588C8.3508 4.69643 8.39664 4.94393 8.45164 5.18837C8.55753 5.67159 8.69846 6.14646 8.8733 6.60921L7.58997 7.20504C7.48024 7.25539 7.38154 7.32691 7.29953 7.4155C7.21752 7.5041 7.15382 7.60802 7.11209 7.7213C7.07035 7.83459 7.0514 7.955 7.05633 8.07562C7.06126 8.19624 7.08997 8.31471 7.1408 8.42421C8.46007 11.2501 10.7316 13.5216 13.5575 14.8409C13.7806 14.9326 14.031 14.9326 14.2541 14.8409C14.3685 14.8 14.4735 14.7368 14.5632 14.655C14.6529 14.5731 14.7255 14.4743 14.7766 14.3642L15.345 13.0809C15.8189 13.2503 16.3025 13.3912 16.7933 13.5025C17.0377 13.5575 17.2852 13.6034 17.5358 13.64C17.7443 13.6848 17.9306 13.8008 18.0628 13.9681C18.195 14.1354 18.2647 14.3435 18.26 14.5567L18.2783 17.4167Z" fill="#0D325E" />
                           </svg></a><a class="fs-22 fw-normal" href="tel:<?php echo esc_attr($phone); ?>"><?php echo esc_html($phone); ?></a>
                     <?php elseif (get_sub_field('phone') == 'Custom') : ?>
                        <a href="tel:<?php echo esc_html($phone); ?>" class="me-3"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M13.695 6.01337H16.9766L16.2525 6.74671C16.0817 6.91846 15.9859 7.15079 15.9859 7.39296C15.9859 7.63513 16.0817 7.86746 16.2525 8.03921C16.4242 8.20994 16.6566 8.30577 16.8987 8.30577C17.1409 8.30577 17.3732 8.20994 17.545 8.03921L19.8366 5.74754C20.0074 5.57579 20.1032 5.34346 20.1032 5.10129C20.1032 4.85912 20.0074 4.62679 19.8366 4.45504L17.545 2.16338C17.3696 2.0132 17.144 1.93473 16.9133 1.94364C16.6826 1.95255 16.4638 2.04819 16.3005 2.21144C16.1373 2.3747 16.0416 2.59354 16.0327 2.82424C16.0238 3.05495 16.1023 3.28052 16.2525 3.45588L16.9766 4.18004H13.695C13.4519 4.18004 13.2187 4.27662 13.0468 4.44853C12.8749 4.62044 12.7783 4.85359 12.7783 5.09671C12.7783 5.33982 12.8749 5.57298 13.0468 5.74489C13.2187 5.9168 13.4519 6.01337 13.695 6.01337ZM17.82 11.9167C17.6183 11.9167 17.4075 11.8525 17.2058 11.8067C16.7974 11.7167 16.3961 11.5972 16.005 11.4492C15.5797 11.2945 15.1123 11.3025 14.6926 11.4718C14.2729 11.641 13.9306 11.9595 13.7316 12.3659L13.53 12.7784C12.6371 12.2817 11.8167 11.6648 11.0916 10.945C10.3718 10.22 9.75497 9.39954 9.2583 8.50671L9.6433 8.25004C10.0497 8.05105 10.3682 7.70878 10.5374 7.28909C10.7066 6.86941 10.7147 6.40196 10.56 5.97671C10.4144 5.58476 10.295 5.18361 10.2025 4.77588C10.1566 4.57421 10.12 4.36338 10.0925 4.15254C9.98116 3.50686 9.64296 2.92214 9.13879 2.50368C8.63462 2.08522 7.99761 1.86052 7.34247 1.87004H4.59247C4.19742 1.86633 3.8062 1.94779 3.44545 2.10886C3.08471 2.26994 2.7629 2.50685 2.50195 2.80347C2.24099 3.10009 2.04701 3.44945 1.93321 3.82778C1.81941 4.20611 1.78846 4.60451 1.84247 4.99587C2.33081 8.83614 4.08466 12.4043 6.82698 15.1366C9.56931 17.869 13.1438 19.6098 16.9858 20.0842H17.3341C18.0101 20.0852 18.6628 19.8372 19.1675 19.3875C19.4575 19.1282 19.6891 18.8102 19.8471 18.4547C20.0052 18.0991 20.0859 17.7141 20.0841 17.325V14.575C20.0729 13.9383 19.841 13.3252 19.4281 12.8404C19.0152 12.3556 18.4468 12.0291 17.82 11.9167ZM18.2783 17.4167C18.2781 17.5469 18.2503 17.6755 18.1965 17.794C18.1428 17.9126 18.0644 18.0183 17.9666 18.1042C17.8642 18.1926 17.7444 18.2587 17.615 18.2982C17.4856 18.3376 17.3493 18.3496 17.215 18.3334C13.782 17.8932 10.5932 16.3227 8.15163 13.8695C5.71007 11.4163 4.15468 8.2201 3.7308 4.78504C3.71621 4.65077 3.729 4.51493 3.76839 4.38573C3.80778 4.25654 3.87295 4.13667 3.95997 4.03338C4.04587 3.9356 4.15161 3.85723 4.27015 3.80349C4.38869 3.74975 4.51732 3.72187 4.64747 3.72171H7.39747C7.61064 3.71697 7.81879 3.78668 7.9861 3.91886C8.15341 4.05103 8.26941 4.2374 8.31414 4.44588C8.3508 4.69643 8.39664 4.94393 8.45164 5.18837C8.55753 5.67159 8.69846 6.14646 8.8733 6.60921L7.58997 7.20504C7.48024 7.25539 7.38154 7.32691 7.29953 7.4155C7.21752 7.5041 7.15382 7.60802 7.11209 7.7213C7.07035 7.83459 7.0514 7.955 7.05633 8.07562C7.06126 8.19624 7.08997 8.31471 7.1408 8.42421C8.46007 11.2501 10.7316 13.5216 13.5575 14.8409C13.7806 14.9326 14.031 14.9326 14.2541 14.8409C14.3685 14.8 14.4735 14.7368 14.5632 14.655C14.6529 14.5731 14.7255 14.4743 14.7766 14.3642L15.345 13.0809C15.8189 13.2503 16.3025 13.3912 16.7933 13.5025C17.0377 13.5575 17.2852 13.6034 17.5358 13.64C17.7443 13.6848 17.9306 13.8008 18.0628 13.9681C18.195 14.1354 18.2647 14.3435 18.26 14.5567L18.2783 17.4167Z" fill="#0D325E" />
                           </svg></a><a class="fs-22 fw-normal" href="tel:<?php the_sub_field('custom_phone'); ?>"><?php the_sub_field('custom_phone'); ?></a>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
            <div class="col d-flex justify-content-md-end">
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