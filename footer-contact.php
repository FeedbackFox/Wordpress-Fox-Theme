</body>

<footer>
  <div class="footer__copyrightsection">
        <p class="footer__copyright">
            © 2018 Timo Raterink. All rights reserved.
        </p>

      <div class="footer__navbarwrapper">
          <a href="<?php echo esc_url( home_url() ); ?>" class="footer__navbaritem">Home</a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Projects' )->ID ); ?>" class="footer__navbaritem">Projects</a>
          <a href="<?php echo get_page_link( get_page_by_title( 'Contact' )->ID ); ?>" class="footer__navbaritem">Contact</a>
      </div>
      <?php if ( !function_exists('dynamic_sidebar') ||
          !dynamic_sidebar('Footer Widget Area') ) : ?>
          <?php endif; ?>
  </div>
</footer>

</html>






