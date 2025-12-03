
  </div><!-- #content -->

  <footer id="colophon" class="site-footer">
    <div class="footer-content container-fluid">
      <div class="footer-left col-12 col-md-4 col-lg-6">
        <div class="footer-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/static/img/logo.svg" alt="Logo">
        </div>
      </div>
      <div class="footer-right col-12 col-md-8 col-lg-6">
        <div class="footer-menu col-lg-12">
          <?php wp_nav_menu( array( 'theme_location' => 'menu-footer', 'menu_id' => 'menu-footer' ) ); ?>
        </div>
        <div class="footer-legal col-lg-12">
          <?php wp_nav_menu( array( 'theme_location' => 'menu-legal', 'menu_id' => 'menu-legal' ) ); ?>
          <div class="footer-text">
            <p> &copy; Alwera AG 2025</p>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
