<?php 
/*
  Template Name: Overons
*/
get_header(); 
$thisID = get_the_ID();
?>

<?php 
  $introsec = get_field('introsec', $thisID);
  if( $introsec ):
?>
<section class="page-banner-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tvd-nieuws-grd-entry-hdr show-sm">
          <?php 
              if( !empty($introsec['titel']) ) printf('<h1 class="tvd-nieuws-entry-hdr-title">%s</h1>', $introsec['titel']);
            ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>


<?php 
  $introsec = get_field('introsec', $thisID);
  if( $introsec ):
?>
<section class="overons-lft-img-rt-dsc-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="lft-img-rt-dsc-mdul-wrp">
          <?php 
            $introsecafbeelding = !empty($introsec['afbeelding'])? cbv_get_image_src( $introsec['afbeelding'], 'full' ): '';
          ?>
          <div class="lft-img-rt-dsc-mdul-img inline-bg" style="background: url(<?php echo $introsecafbeelding ?>);">
            <img src="<?php echo $introsecafbeelding ?>">
          </div>


          <div class="lft-img-rt-dsc-mdul-dsc">
            <?php 
              if( !empty($introsec['titel']) ) printf('<h1 class="fl-h1 rgt-mdul-dsc-title hide-sm">%s</h1>', $introsec['titel']);
              if( !empty($introsec['subtitel']) ) printf('<h2 class="fl-h2 rgt-mdul-dsc-title-1">%s</h2>', $introsec['subtitel']);
            ?>
            <div>
              <?php 
                if( !empty($introsec['beschrijving'])) echo wpautop($introsec['beschrijving']);
                $intsknop = $introsec['knop'];
                if( is_array( $intsknop ) &&  !empty( $intsknop['url'] ) ){
                    printf('<a href="%s" target="%s">%s</a>', $intsknop['url'], $intsknop['target'], $intsknop['title']); 
                }
              ?>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>




<?php 
  $bloksec = get_field('bloksec', $thisID);
  if( $bloksec ):
?>
<section class="overons-lft-dsc-rt-img-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="lft-img-rt-dsc-mdul-wrp">
          <div class="lft-dsc-rt-img-mdul-dsc">
            <?php 
              if( !empty($bloksec['titel']) ) printf('<h3 class="fl-h3 lft-mdul-dsc-title-1">%s</h3>', $bloksec['titel']);
              if( !empty($bloksec['beschrijving'])) echo wpautop($bloksec['beschrijving']); 
            ?>
          </div>

          <?php 
            $bloksecafbeelding = !empty($bloksec['afbeelding'])? cbv_get_image_src( $bloksec['afbeelding'], 'full' ): '';
          ?>
          <div class="lft-dsc-rt-img-mdul-img inline-bg" style="background: url(<?php echo $bloksecafbeelding ?>);">
            <img src="<?php echo $bloksecafbeelding ?>">
          </div>


          <div class="rt-dsc-dsc-img-mdul-dsc-sm show-sm">
            <?php 
              if( !empty($bloksec['beschrijving'])) echo wpautop($bloksec['beschrijving']); 
            ?>
          </div>


        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>




<?php 
  $ft_financiering = get_field('ft_financiering', 'options');
  if( $ft_financiering ):
?>
<section class="overons-tvd-fin-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="overons-tvd-fin-wrp">
          <div class="tvd-fin-inr">
            <i>
              <img src="<?php echo THEME_URI; ?>/assets/images/tvd-fin-img-01.svg">
            </i>
            <?php 
              if( !empty($ft_financiering['titel']) ) printf('<h2 class="fl-h2 tvd-fin-title">%s</h2>', $ft_financiering['titel']);
              if( !empty($ft_financiering['beschrijving'])) echo wpautop($ft_financiering['beschrijving']); 
              $fincknop = $ft_financiering['knop'];
              if( is_array( $fincknop ) &&  !empty( $fincknop['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $fincknop['url'], $fincknop['target'], $fincknop['title']); 
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>



<div class="overons-team-sec-wrp">
<?php get_template_part('templates/team'); ?>
<div>


<?php get_footer(); ?>