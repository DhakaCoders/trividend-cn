<?php get_header(); ?>


<?php 
  $home_slides = get_field('home_slides', HOMEID);
  if( $home_slides ):
?>
<section class="hm-banner-sec">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-banner-cntlr">

          <div class="hm-prev-nxt">
            <div class="fl-nxt-prev">
              <span class="fl-prev">
                <i>
                  <svg class="fl-pre-svg" width="25" height="17" viewBox="0 0 25 17" fill="#4B4B4B">
                    <use xlink:href="#fl-pre-svg"></use>
                  </svg> 
                </i>
              </span>
              <span class="fl-next">
                <i>
                  <svg class="fl-nxt-svg" width="25" height="17" viewBox="0 0 25 17" fill="#4B4B4B">
                    <use xlink:href="#fl-nxt-svg"></use>
                  </svg> 
                </i>
              </span>
            </div>
          </div>

          <div class="hm-bnr-slider homeBnrSlider">
            <?php 
              foreach( $home_slides as $home_slide ):
            ?>
            <div class="hm-bnr-slider-item-cntlr">
              <?php if( !empty($home_slide['afbeelding']) ): ?>
              <div class="hm-bnr-slider-item inline-bg" style="background: url(<?php echo cbv_get_image_src($home_slide['afbeelding'], 'full'); ?>);">
                <div class="hm-bsi-arrow"></div>

                <div class="hm-bsi-desc-cntlr">
                  <div class="hm-bsi-desc">
                    <?php 
                      if( !empty($home_slide['titel']) ) printf('<h3 class="hm-bsi-desc-sub-title">%s</h3>', $home_slide['titel']);
                      if( !empty($home_slide['titel']) ) printf('<h2 class="hm-bsi-desc-title">%s</h2>', $home_slide['titel']);
                      if( !empty($home_slide['beschrijving']) ) echo wpautop( $home_slide['beschrijving'] );
                    ?>

                    <?php
                      $hsknop = $home_slide['knop'];
                        if( is_array( $hsknop ) &&  !empty( $hsknop['url'] ) ){
                            printf('<div class="hm-bsi-desc-btn"><a class="fl-orange-btn" href="%s" target="%s">%s</a></div>', $hsknop['url'], $hsknop['target'], $hsknop['title']); 
                        }
                     ?>
                  </div>
                </div>
              </div>
              <?php endif; ?>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>


<?php 
  $homeintro = get_field('homeintro', HOMEID);
  if( $homeintro ):
?>
<section class="Our-services">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="Our-services-cntlr">
          <div class="tvd-nieuws-entry-hdr fl-entry-hdr">
            <?php 
              if( !empty($homeintro['titel']) ) printf('<h2 class="tvd-nieuws-enty-hdr-title fl-h2">%s</h2>', $homeintro['titel']);
              if( !empty($homeintro['beschrijving'])) echo wpautop($homeintro['beschrijving']); 
            ?>

            <?php if( !empty($homeintro['titel']) ):  ?>
            <span>
              <i><img src="<?php echo THEME_URI; ?>/assets/images/team-border-btm.svg"></i>
            </span>
            <?php endif; ?>
          </div>

          <div class="Our-services-sliders-cntlr">

            <div class="fl-nxt-prev">
              <span class="fl-prev">
                <i>
                  <svg class="fl-pre-svg" width="25" height="17" viewBox="0 0 25 17" fill="#4B4B4B">
                    <use xlink:href="#fl-pre-svg"></use>
                  </svg> 
                </i>
              </span>
              <span class="fl-next">
                <i>
                  <svg class="fl-nxt-svg" width="25" height="17" viewBox="0 0 25 17" fill="#4B4B4B">
                    <use xlink:href="#fl-nxt-svg"></use>
                  </svg> 
                </i>
              </span>
            </div>

            <div class="Our-services-sliders ourServicesSliders">

              <div class="our-services-grids">
                <div class="our-services-grd-item">
                  <div class="osgi-img-cntlr">
                    <a class="overlay-link" href="#"></a>
                    <div class="osgi-img inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/our-services-grd-item-img-001.jpg');"></div>
                  </div>
                  <div class="osgi-desc-cntlr">
                    <h3 class="osgi-desc-title mHc"><a href="#"><span>01.</span> Dienst naam</a></h3>
                    <div class="osgi-desc mHc1">
                      <p>Diam urna, diam aenean in cursus sollicitudin. Accumsan pharetra lectus ut purus nec quam massa non lacus.</p>
                    </div>
                    <div class="osgi-desc-btn">
                      <a href="#">Lees meer</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="our-services-grids">
                <div class="our-services-grd-item">
                  <div class="osgi-img-cntlr">
                    <a class="overlay-link" href="#"></a>
                    <div class="osgi-img inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/our-services-grd-item-img-002.jpg');"></div>
                  </div>
                  <div class="osgi-desc-cntlr">
                    <h3 class="osgi-desc-title mHc"><a href="#"><span>01.</span> Dienst naam</a></h3>
                    <div class="osgi-desc mHc1">
                      <p>Diam urna, diam aenean in cursus sollicitudin. Accumsan pharetra lectus ut purus nec quam massa non lacus.</p>
                    </div>
                    <div class="osgi-desc-btn">
                      <a href="#">Lees meer</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="our-services-grids">
                <div class="our-services-grd-item">
                  <div class="osgi-img-cntlr">
                    <a class="overlay-link" href="#"></a>
                    <div class="osgi-img inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/our-services-grd-item-img-003.jpg');"></div>
                  </div>
                  <div class="osgi-desc-cntlr">
                    <h3 class="osgi-desc-title mHc"><a href="#"><span>01.</span> Dienst naam</a></h3>
                    <div class="osgi-desc mHc1">
                      <p>Diam urna, diam aenean in cursus sollicitudin. Accumsan pharetra lectus ut purus nec quam massa non lacus.</p>
                    </div>
                    <div class="osgi-desc-btn">
                      <a href="#">Lees meer</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="our-services-grids">
                <div class="our-services-grd-item">
                  <div class="osgi-img-cntlr">
                    <a class="overlay-link" href="#"></a>
                    <div class="osgi-img inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/our-services-grd-item-img-001.jpg');"></div>
                  </div>
                  <div class="osgi-desc-cntlr">
                    <h3 class="osgi-desc-title mHc"><a href="#"><span>01.</span> Dienst naam</a></h3>
                    <div class="osgi-desc mHc1">
                      <p>Diam urna, diam aenean in cursus sollicitudin. Accumsan pharetra lectus ut purus nec quam massa non lacus.</p>
                    </div>
                    <div class="osgi-desc-btn">
                      <a href="#">Lees meer</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>




<?php 
  $home_klanten = get_field('home_klanten', HOMEID);
  if( $home_klanten ):
?>
<section class="tvd-customer-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tvd-customer-sec-inr">
          <?php if( !empty($home_klanten['titel']) ) printf('<div class="tvd-customer-hdr"><h2 class="tvd-customer-title fl-h2">%s</h2></div>', $home_klanten['titel']); ?>

          <?php 
            $klanten_logos = $home_klanten['klanten_logo'];
            if( $klanten_logos ):
          ?>
          <div class="tvd-customer-slider-ctlr">
            <div class="tvd-customer-slider customerSlider">
              <?php  
                foreach( $klanten_logos as $klanten_logo ): 
                  $klanten_logoIcon = !empty($klanten_logo['icon'])? cbv_get_image_tag( $klanten_logo['icon'], 'full' ): '';
              ?>
              <div class="tvd-customer-grd">
                <div class="tvd-customer-grd-img">
                  <?php echo $klanten_logoIcon;?>
                </div>
              </div>
              <?php endforeach ?>
            </div>
          </div>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>


<?php 
  $home_nieuws = get_field('home_nieuws', HOMEID);
  if( $home_nieuws ):
?>
<section class="tvd-nieuws-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tvd-nieuws-sec-inr">
          <div class="tvd-nieuws-entry-hdr fl-entry-hdr">
            <?php 
              if( !empty($home_nieuws['titel']) ) printf('<h2 class="tvd-nieuws-enty-hdr-title fl-h2">%s</h2>', $home_nieuws['titel']);
              if( !empty($home_nieuws['beschrijving'])) echo wpautop($home_nieuws['beschrijving']); 
            ?>
            <?php if(!empty($home_nieuws['titel'])): ?>
            <span>
              <i><img src="<?php echo THEME_URI; ?>/assets/images/team-border-btm.svg"></i>
            </span>
            <?php endif; ?>
          </div>

          <div class="tvd-nieuws-slider-ctlr">
            <div class="tvd-nieuws-nxt-prev-btn fl-nxt-prev">
              <span class="fl-prev">
                <i>
                  <svg class="fl-pre-svg" width="25" height="17" viewBox="0 0 25 17" fill="#4B4B4B">
                    <use xlink:href="#fl-pre-svg"></use>
                  </svg> 
                </i>
              </span>
              <span class="fl-next">
                <i>
                  <svg class="fl-nxt-svg" width="25" height="17" viewBox="0 0 25 17" fill="#4B4B4B">
                    <use xlink:href="#fl-nxt-svg"></use>
                  </svg> 
                </i>
              </span>
            </div>
            <div class="tvd-nieuws-slider nwSlider clearfix">
              <div class="tvd-nieuws-grds">
                <div class="tvd-nieuws-grd-item">
                  <div class="tvd-nieuws-img-ctlr">
                    <a class="overlay-link" href="#"></a>
                    <div class="tvd-nieuws-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/tvd-nieuws-grd-img-01.jpg');"></div>
                    <div class="tvd-triangle">
                      <div class="tvd-tringle-border">
                        
                      </div>
                      <div class="tvd-date">
                          <strong>20</strong>
                          <span>DEC</span>
                        </div>
                    </div>
                  </div>
                  <div class="tvd-nieuws-grd-item-des mHc">
                    <h3 class="tvd-nieuws-grd-item-des-title mHc1">
                      <a href="#">Dignissim nisi leo pellentesque purus tempor eros eu. </a>
                    </h3>
                    <div class="tvd-nieuws-grd-item-con mHc2">
                      <p>Diam aenean in cursus sollicitudin. Accumsan pharetra lectus ut purus nec quam massa non. </p>
                    </div>
                    <a href="#">Lees meer</a>
                  </div>
                </div>
              </div>
              <div class="tvd-nieuws-grds">
                <div class="tvd-nieuws-grd-item">
                  <div class="tvd-nieuws-img-ctlr">
                    <a class="overlay-link" href="#"></a>
                    <div class="tvd-nieuws-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/tvd-nieuws-grd-img-02.jpg');"></div>
                    <div class="tvd-triangle">
                      <div class="tvd-tringle-border">
                        
                      </div>
                      <div class="tvd-date">
                          <strong>23</strong>
                          <span>DEC</span>
                        </div>
                    </div>
                  </div>
                  <div class="tvd-nieuws-grd-item-des mHc">
                    <h3 class="tvd-nieuws-grd-item-des-title mHc1">
                      <a href="#">Dignissim nisi leo pellentesque purus tempor eros eu. </a>
                    </h3>
                    <div class="tvd-nieuws-grd-item-con mHc2">
                      <p>Diam aenean in cursus sollicitudin. Accumsan pharetra lectus ut purus nec quam massa non. </p>
                    </div>
                    <a href="#">Lees meer</a>
                  </div>
                </div>
              </div>
              <div class="tvd-nieuws-grds">
                <div class="tvd-nieuws-grd-item">
                  <div class="tvd-nieuws-img-ctlr">
                    <a class="overlay-link" href="#"></a>
                    <div class="tvd-nieuws-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/tvd-nieuws-grd-img-03.jpg');"></div>
                    <div class="tvd-triangle">
                      <div class="tvd-tringle-border">
                        
                      </div>
                      <div class="tvd-date">
                          <strong>27</strong>
                          <span>DEC</span>
                        </div>
                    </div>
                  </div>
                  <div class="tvd-nieuws-grd-item-des mHc">
                    <h3 class="tvd-nieuws-grd-item-des-title mHc1">
                      <a href="#">Dignissim nisi leo pellentesque purus tempor eros eu. </a>
                    </h3>
                    <div class="tvd-nieuws-grd-item-con mHc2">
                      <p>Diam aenean in cursus sollicitudin. Accumsan pharetra lectus ut purus nec quam massa non. </p>
                    </div>
                    <a href="#">Lees meer</a>
                  </div>
                </div>
              </div>
              <div class="tvd-nieuws-grds">
                <div class="tvd-nieuws-grd-item">
                  <div class="tvd-nieuws-img-ctlr">
                    <a class="overlay-link" href="#"></a>
                    <div class="tvd-nieuws-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/tvd-nieuws-grd-img-01.jpg');"></div>
                    <div class="tvd-triangle">
                      <div class="tvd-tringle-border">
                        
                      </div>
                      <div class="tvd-date">
                          <strong>20</strong>
                          <span>DEC</span>
                        </div>
                    </div>
                  </div>
                  <div class="tvd-nieuws-grd-item-des mHc">
                    <h3 class="tvd-nieuws-grd-item-des-title mHc1">
                      <a href="#">Dignissim nisi leo pellentesque purus tempor eros eu. </a>
                    </h3>
                    <div class="tvd-nieuws-grd-item-con mHc2">
                      <p>Diam aenean in cursus sollicitudin. Accumsan pharetra lectus ut purus nec quam massa non. </p>
                    </div>
                    <a href="#">Lees meer</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php endif; ?>

<section class="tvd-financing-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tvd-financing-sec-inr clearfix">
          <div class="tvd-fin-left ">
            <?php 
              $ft_financiering = get_field('ft_financiering', 'options');
              if( $ft_financiering ):
            ?>
            <div class="tvd-fin mHc">
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
            <?php endif; ?>

          </div>
          <div class="tvd-nieuws-rgt ">
            <div class="tvd-nieuws mHc">
              <div class="tvd-nieuws-inr">
                <i>
                  <img src="<?php echo THEME_URI; ?>/assets/images/tvd-nieuws-img-01.svg">
                </i>
                <h2 class="tvd-nieuws-title">Abonneren op de nieuwsbrief</h2>
                <p>Egestas pellentesque urna mattis pellentesque placerat tempor dolor sagittis porttitor consectetur pulvinar accumsan.</p>
                <div class="tvd-form-field">
                  <form class="form">
                    <div class="tvd-inputfields-row diveder2 clearfix">
                      <div class="tvd-inputfield">
                        <input type="text" name="firstname" placeholder="Voornaam">
                      </div>
                      <div class="tvd-inputfield">
                        <input type="text" name="lastname" placeholder="Achternaam">
                      </div>
                    </div>
                    <div class="tvd-inputfields-row">
                      <div class="tvd-inputfield">
                        <input type="email" name="email" placeholder="info2conversalbe">
                      </div>
                    </div>
                    <div class="tvd-inputfields-row">
                      <div class="tvd-inputfield">
                        <em><p>Wij respecteren uw <a href="#">privacy.</a> Jouw gegevens worden altijd vertrouwelijk behandeld.</p></em>
                      </div>
                    </div>
                    <div class="cnt-btn">
                      <input type="submit" value="Abonneren">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>