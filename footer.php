
  </div><!-- #content -->

  <footer id="colophon" class="site-footer">
    <div class="footer-content container-lg">
      <div class="footer-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/logo.svg" alt="Logo">
      </div>
      <?php wp_nav_menu( array( 'theme_location' => 'menu-footer', 'menu_id' => 'menu-footer' ) ); ?>
      <div class="footer-text">
        <p> &copy; Tanja Kobler</p>
      </div>
    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
