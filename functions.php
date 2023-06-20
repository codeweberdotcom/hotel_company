<?php
/*
 * This is the child theme for Codeweber theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action( 'wp_enqueue_scripts', 'hotel_company_enqueue_styles' );
function hotel_company_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
/*
 * Your code goes below
 */

// --- New Gutenberg Block Layout Codeweber---
if (!function_exists('checkCategoryOrder')) {
    function checkCategoryOrder($categories)
    {
        //custom category array
        $temp = array(
            'slug'  => 'codeweber',
            'title' => 'Codeweber Blocks'
        );
        $temp_1 = array(
            'slug'  => 'codeweber_elements',
            'title' => 'Codeweber Elements'
        );
        $temp_2 = array(
            'slug'  => 'child_blocks',
            'title' => 'Child Blocks'
        );
        //new categories array and adding new custom category at first location
        $newCategories = array();
        $newCategories[0] = $temp;
        $newCategories[1] = $temp_1;
        $newCategories[2] = $temp_2;
        //appending original categories in the new array
        foreach ($categories as $category) {
            $newCategories[] = $category;
        }
        //return new categories
        return $newCategories;
    }
}
add_filter('block_categories_all', 'checkCategoryOrder', 99, 1);



// --- ACF Flexible Block
add_action('acf/init', 'my_acf_blocks_init_child');
function my_acf_blocks_init_child()
{

    // Register Child blocks.
    acf_register_block_type(array(
        'name'              => 'childs_blocks',
        'title'             => __('Child blocks'),
        'description'       => __('Child blocks flexible block.'),
        'render_template'   => 'templates/flexible-content/child_blocks.php',
        'category'          => 'child_blocks',
        'align'           => 'full',
        'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
        ),
        'mode' => 'preview',

    ));
};