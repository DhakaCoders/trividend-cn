
<?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $titel = get_field('titel', 'options');
  $address = get_field('address', 'options');
  $map_url = get_field('url', 'options');
  $gmaplink = !empty($map_url)?$map_url: 'javascript:void()';
  $show_telefoon = get_field('telefoon', 'options');
  $telefoon  = phone_preg($show_telefoon);
  $emailadres = get_field('emailadres', 'options');
  $btw = get_field('btw', 'options');
  $copyright_text = get_field('copyright_text', 'options');
?>


<footer class="footer-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ftr-top clearfix">
          <div class="ftr-logo-ctlr">
            <?php if( !empty( $logo_tag ) ) :?>
            <div class="ftr-logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo $logo_tag; ?>
              </a>
            </div>
            <?php endif; ?>

            <?php 
              $ftgallery = get_field('ftgallery', 'options');  
                if( $ftgallery ):
            ?>
            <div class="ftr-btm-logo hide-sm">
              <ul class="reset-list">
                <?php foreach( $ftgallery as $gallery_id ): ?>
                <li> <?php echo cbv_get_image_tag($gallery_id); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php endif; ?>
          </div>

          <div class="ftr-menu ftr-col-1">
            <h4 class="ftr-menu-title fl-h4"><?php _e( 'Navigatie', THEME_NAME ); ?></h4>
            <div class="ftr-menu-des">
              <?php 
                  $mmenuOptions = array( 
                      'theme_location' => 'cbv_fta_menu', 
                      'menu_class' => 'clearfix reset-list',
                      'container' => false,
                    );
                  wp_nav_menu( $mmenuOptions ); 
                ?>
            </div>
          </div>
          <div class="ftr-menu ftr-col-2">
            <h4 class="ftr-menu-title fl-h4"><?php _e( 'Laatste Nieuws', THEME_NAME ); ?></h4>
            <?php 
              $nieuwsQuery = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page'=> 3,
                'orderby' => 'rand',
                'order'=> 'desc',

              ));
              if( $nieuwsQuery->have_posts() ): 
            ?>
            <div class="ftr-menu-des">
              <ul class="reset-list">
                <?php while($nieuwsQuery->have_posts()): $nieuwsQuery->the_post(); ?> 
                <li><a href="<?php the_permalink( ); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
              </ul>
            </div>
            <?php endif; wp_reset_postdata(); ?>
          </div>
          <div class="ftr-menu ftr-col-3">
            <h4 class="ftr-menu-title fl-h4"><?php _e( 'Contact info', THEME_NAME ); ?></h4>
            <div class="ftr-menu-des">
              <?php if( !empty($titel) ) printf('<div class="ftr-cnt-menu-cv"><span>%s</span></div>', $titel); ?>
              <?php if( !empty($address) ) printf('<div class="ftr-cnt-menu-adrs"><a href="%s">%s</a></div>', $gmaplink, $address); ?>
              <?php if( !empty($show_telefoon) ) printf('<div class="ftr-cnt-menu-phn"><a href="tel:%s">%s</a></div>', $telefoon, $show_telefoon); ?>
              <?php if( !empty($emailadres) ) printf('<div class="ftr-cnt-menu-mail"><a href="mailto:%s">%s</a></div>', $emailadres, $emailadres); ?>
              <?php if( !empty($btw) ) printf('<div class="ftr-cnt-menu-vat"><span>BTW: %s</span></div>', $btw); ?>
            </div>
          </div>

          <?php 
            $ftgallery = get_field('ftgallery', 'options');  
              if( $ftgallery ):
          ?>
          <div class="ftr-btm-logo show-sm">
            <ul class="reset-list">
              <?php foreach( $ftgallery as $gallery_id ): ?>
              <li> <?php echo cbv_get_image_tag($gallery_id); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="ftr-btm clearfix">
          <?php if( !empty($copyright_text) ) printf('<div class="ftr-copywrite"><p>%s</p></div>', $copyright_text); ?>
          <div class="ftr-btm-menu">
            <?php 
              $mmenuOptions = array( 
                  'theme_location' => 'cbv_ftb_menu', 
                  'menu_class' => 'clearfix reset-list',
                  'container' => false,
                );
              wp_nav_menu( $mmenuOptions ); 
            ?>
          </div>
          <div class="ftr-btm-designby">
            <a href="#">Webdesign by conversal</a>
          </div>
        </div>
      </div>
    </div>
  </div> 
</footer>
<?php wp_footer(); ?>
</body>
</html>