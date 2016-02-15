<?php require_once 'credits.php'?>
<!-- Footer -->
<p class="pull-right"><a href="#">Back to top</a></p>
    <footer class="footer">
      <div class="container">
        <p class="text-muted"><a href="<?php echo esc_url( __( 'http://wordpress.org/' ) ); ?>"><?php printf( __( 'Powered by %s' ), 'WordPress' ); ?></a> Designed by <a href="<?php echo esc_url(  $inform['web'] ); ?>"><?php echo $inform['name']?></a> </p>
      </div>
    </footer>


	<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri() ?>/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo get_template_directory_uri() ?>/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>