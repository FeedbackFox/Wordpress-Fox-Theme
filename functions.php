<?php if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer Widget Area',
    'before_widget' => '<div class = "footer__widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 style="display:none;">',
    'after_title' => '</h3>',
  )
);
?>