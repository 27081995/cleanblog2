<?php
     if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'New Sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<div class="title">',
        'after_title' => '</div>',
    ));
    
    ?>