<?php


function gt_setup(){
wp_enqueue_style('google-fonts','file:///E:/RAD%20proj/font.css');
wp_enqueue_style('fontawsome','file:///E:/RAD%20proj/fontawesome-free-5.12.0-web/css/all.css');
wp_enqueue_style('style',get_stylesheet_uri('C:/Users/User/Local Sites/yb-news/app/public/wp-content/themes/ybnews/style.css'),NULL,microtime(),);

wp_enqueue_style('main',get_theme_file_uri(),NULL,microtime(),);

}
add_action('wp_enqueue_scripts','gt_setup'); 

    function gt_init(){
          add_theme_support ('post-thumbnails');
          add_theme_support ('title-tag');
          add_theme_support ('html5',
          array ('comment-list','comment-form','search-form')
    );
    }
    add_action('after_setup_theme','gt_init');
    
    
    //news post type
    function gt_custom_post_type(){
        register_post_type('project',
        array(
            'rewrite'=>array('slug'=>'projects'),
            'labels' =>array(
                'name' =>'projects',
                'singular_name'=>'project',
                'add_new_item'=>'add new news',
                'edit_item'=>'edit project'
            ),
            'menu-icon'=>'dashicon-clipboard',
            'public'=>true,
            'has_archive'=>true,
            'supports'=>array(
                'title','thumbnail','editor','excerpt','comments'
            )

            )
        
            );
    }
    add_action('init','gt_custom_post_type');
