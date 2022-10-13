</main>
<footer>
  <div class="container full-width">
    <div class="footer-top">
      <div class="footer-block-left aos-init" data-aos="fade-up" data-aos-duration="1000">
        <a href="">
          <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            
            if ( has_custom_logo() ) {
              echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="lazyload" width="121" height="80">';
            }
          ?>
        </a>
          <?php
            if(is_active_sidebar('footer-content')):?>
            <?php dynamic_sidebar('footer-content'); ?>
          <?php endif; ?>

      </div>
      <div class="footer-block-right aos-init" data-aos="fade-up" data-aos-duration="1000">
                <?php
                  wp_nav_menu(array(
                    'theme_location' => 'footer_left_menu',
                    'menu_id' => 'footer_left_menu',
                    'items_wrap' => '<ul class="aos-init" data-aos="fade-up" data-aos-duration="1000">%3$s</ul>'
                  ))
                ?>
                <?php
                  wp_nav_menu(array(
                    'theme_location' => 'footer_center_menu',
                    'menu_id' => 'footer_center_menu',
                    'items_wrap' => '<ul class="aos-init" data-aos="fade-up" data-aos-duration="1100">%3$s</ul>'
                  ))
                ?>
                <?php
                  wp_nav_menu(array(
                    'theme_location' => 'footer_middle_menu',
                    'menu_id' => 'footer_middle_menu',
                    'items_wrap' => '<ul class="aos-init" data-aos="fade-up" data-aos-duration="1200">%3$s</ul>'
                  ))
                ?>
                <?php
                  wp_nav_menu(array(
                    'theme_location' => 'footer_right_menu',
                    'menu_id' => 'footer_right_menu',
                    'items_wrap' => '<ul class="aos-init" data-aos="fade-up" data-aos-duration="1300">%3$s</ul>'
                  ))
                ?>


      </div>
    </div>
    <div class="footer-bottom aos-init" data-aos="fade-up" data-aos-duration="1000">
    <?php
            if(is_active_sidebar('footer-copyright')):?>
            <?php dynamic_sidebar('footer-copyright'); ?>
          <?php endif; ?> 

    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>