<?php 
/*
  Template Name: Overons
*/
get_header(); 
$thisID = get_the_ID();
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
  if( $introsec ):
?>
<section class="overons-lft-img-rt-dsc-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="lft-img-rt-dsc-mdul-wrp">
          <?php 
            $introsecafbeelding = !empty($introsec['afbeelding'])? cbv_get_image_src( $introsec['afbeelding'], 'overonsintro' ): '';
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
  $showhide_blok = get_field('showhide_blok', $thisID);
  $bloksec = get_field('bloksec', $thisID);
  if( $showhide_blok ):
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
            $bloksecafbeelding = !empty($bloksec['afbeelding'])? cbv_get_image_src( $bloksec['afbeelding'], 'overonsblok' ): '';
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
  $showhide_cta = get_field('showhide_cta', $thisID);
  $cta = get_field('ctasec', $thisID);
  if( $showhide_cta ):
?>
<section class="overons-tvd-fin-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="overons-tvd-fin-wrp">
          <div class="tvd-fin-inr">
            <i>
              <?php if( !empty($cta['icon']) ) echo cbv_get_image_tag($cta['icon']); ?>
            </i>
            <?php 
              if( !empty($cta['titel']) ) printf('<h2 class="fl-h2 tvd-fin-title">%s</h2>', $cta['titel']);
              if( !empty($cta['beschrijving'])) echo wpautop($cta['beschrijving']); 
              $fincknop = $cta['knop'];
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