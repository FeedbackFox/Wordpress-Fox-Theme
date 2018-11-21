</body>

<footer>


  <div class="footer__buttonwrapper">
    <?php $page_id = get_queried_object_id();
     if ($page_id != 145 && $page_id != 142 && $page_id != 131) {
      echo "    <h3 class='footer__header'>Let's Work Together</h3>
      <a href='" . get_page_link( get_page_by_title( 'Contact' )->ID ) . "'><button class='footer__button' >
        Contact me";
      } 
      
      else {
        echo "<h3 class='footer__header'>Wil je samenwerken?</h3>
        <a href='" . get_page_link( 142 ) . "'><button class='footer__button' >
          Neem contact op";
      }
      ?>

    </button></a>
  </div>
  <div class="footer__copyrightsection">
        <p class="footer__copyright">



          <?php $page_id = get_queried_object_id();
        if($page_id != 145 && $page_id != 142 && $page_id != 131) {
          echo "© 2018 Timo Raterink. All rights reserved.
          </p><div class='footer__navbarwrapper'><a href='" . esc_url( home_url() ) . "' class='footer__navbaritem'>Home</a><a href='" . get_page_link( get_page_by_title( 'Projects' )->ID ) . "' class='footer__navbaritem'>Projects</a>
          <a href='" . get_page_link( get_page_by_title( 'Contact' )->ID ) . "' class='footer__navbaritem'>Contact</a>";
        }
        else {
          echo "© 2018 Timo Raterink. Alle rechten gereserveerd.
          </p><div class='footer__navbarwrapper'><a href='" . esc_url( home_url() ) . "' class='footer__navbaritem'>Home</a><a href='" . get_page_link( 145 ) . "' class='footer__navbaritem'>Portfolio</a>
          <a href='" . get_page_link( 142 ) . "' class='footer__navbaritem'>Contact</a>";
        }
      
      ?>
      </div>

              <?php if ( !function_exists('dynamic_sidebar') ||
          !dynamic_sidebar('Footer Widget Area') ) : ?>
          <?php endif; ?>

  </div>
</footer>

</html>
