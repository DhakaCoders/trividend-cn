<?php 
/*
  Template Name: Contact
*/
get_header(); 
$thisID = get_the_ID();
$pageTitle = get_the_title($thisID);
$formsec = get_field('formsec', $thisID);
?>
<section class="page-banner-sec-wrp contact-page-bnr">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tvd-nieuws-grd-entry-hdr">
          <?php 
            if( !empty($formsec['titel']) ) 
              printf('<h1 class="fl-h1 tvd-nieuws-entry-hdr-title">%s</h1>', $formsec['titel']);
            else
              printf('<h1 class="fl-h1 tvd-nieuws-entry-hdr-title">%s</h1>', $pageTitle);

            if( !empty($formsec['beschrijving'])) echo wpautop($formsec['beschrijving']); 
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-form-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form-block clearfix">
          <div class="contact-form-lft">
            <?php if( !empty( $formsec['shortcode'] ) ): ?>
            <div class="contact-form-wrp clearfix">
              <div class="wpforms-container">
              <?php echo do_shortcode( $formsec['shortcode'] ); ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
          <?php 
              $address = get_field('address', 'options');
              $map_url = get_field('url', 'options');
              $gmaplink = !empty($map_url)?$map_url: 'javascript:void()';
              $show_telefoon = get_field('telefoon', 'options');
              $telefoon  = phone_preg($show_telefoon);
              $emailadres = get_field('emailadres', 'options');
              $btw = get_field('btw', 'options');
          ?>
          <div class="contact-form-rgt">
            <div class="contact-form-info">
              <h2 class="fl-h2 contact-form-info-title"><?php _e( 'Contact Info', THEME_NAME );?> </h2>
              <ul class="reset-list">
                <?php if( !empty($address) ): ?>
                <li>
                  <i>
                    <svg class="contact-map-svg" width="16" height="20" viewBox="0 0 16 20" fill="#E0861A">
                      <use xlink:href="#contact-map-svg"></use>
                    </svg>
                  </i>
                  <a href="<?php echo $gmaplink; ?>"><?php echo $address; ?></a>
                </li>
                <?php endif; if( !empty($show_telefoon) ): ?>
                <li>
                  <i>
                    <svg class="contact-phone-svg" width="16" height="16" viewBox="0 0 16 16" fill="#E0861A">
                      <use xlink:href="#contact-phone-svg"></use>
                    </svg>
                  </i>
                  <a href="tel:<?php echo $telefoon; ?>"><?php echo $show_telefoon; ?></a>
                </li>
                <?php endif; if( !empty($emailadres) ): ?>
                <li>
                  <i>
                    <svg class="contact-mail-svg" width="16" height="13" viewBox="0 0 16 13" fill="#E0861A">
                      <use xlink:href="#contact-mail-svg"></use>
                    </svg>
                  </i>
                  <a href="mailto:<?php echo $emailadres; ?>"><?php echo $emailadres; ?></a>
                </li>
                <?php endif; if( !empty($btw) ): ?>
                <li class="text-code">
                  <i>
                    <svg class="contact-btw-svg" width="31" height="13" viewBox="0 0 31 13" fill="#E0861A">
                      <use xlink:href="#contact-btw-svg"></use>
                    </svg>
                  </i>
                  <span><?php echo $btw; ?></span>
                </li>
                <?php endif;?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('templates/team'); ?>
<?php get_footer(); ?>