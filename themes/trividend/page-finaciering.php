<?php 
/*
  Template Name: Finaciering
*/
get_header(); 
$thisID = get_the_ID();
$pageTitle = get_the_title($thisID);
$formsec = get_field('formsec', $thisID);
?>
<section class="page-banner-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tvd-nieuws-grd-entry-hdr">
          <?php 
            if( !empty($formsec['titel']) ) 
              printf('<h1 class="tvd-nieuws-entry-hdr-title">%s</h1>', $formsec['titel']);
            else
              printf('<h1 class="tvd-nieuws-entry-hdr-title">%s</h1>', $pageTitle);
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php if( !empty( $formsec['shortcode'] ) ): ?>
<section class="steps-form-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form-block clearfix">
            <div class="contact-form-wrp clearfix">
              <?php echo do_shortcode( $formsec['shortcode'] ); ?>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php get_template_part('templates/team'); ?>
<?php get_footer(); ?>