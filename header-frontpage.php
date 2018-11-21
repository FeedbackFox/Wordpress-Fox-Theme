<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/frontpage.css">
  <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/resources/favicon.ico" type="image/x-icon">
  
  <title>Timo Raterink</title>
</head>

<body>
  <div class="navbar">
      <a href="<?php echo esc_url( home_url() ); ?>" class="navbar__item">Home</a>
      <?php $page_id = get_queried_object_id();
        if($page_id == 129) {
          echo "<a href='" . get_page_link( get_page_by_title( 'Projects' )->ID ) . "' class='navbar__item'>Projects</a>
          <a href='" . get_page_link( get_page_by_title( 'Contact' )->ID ) . "' class='navbar__item'>Contact</a>";
        }
        else if ($page_id == 131) {
          echo "<a href='" . get_page_link( 145 ) . "' class='navbar__item'>Portfolio</a>
          <a href='" . get_page_link( 142 ) . "' class='navbar__item'>Contact</a>";
        }
      
      ?>
  </div>
