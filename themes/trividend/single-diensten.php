<?php 
get_header(); 
while( have_posts() ): the_post();
  $thisID = get_the_ID();
?>
<?php 
$showhide_intro = get_field('showhide_intro', $thisID);
$intro = get_field('intro', $thisID);
if( $showhide_intro ):
?>
<section class="tvd-diensten-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tvd-diensten-sec-inr clearfix">
          <div class="tvd-diensten-lft">
            <?php if( !empty($intro['titel']) ) printf('<h2 class="tvd-diensten-title fl-h1 show-sm">%s</h2>', $intro['titel']); ?>
            <div class="tvd-diensten-img inline-bg" style="background: url('<?php if( !empty($intro['afbeelding']) ) echo cbv_get_image_src($intro['afbeelding']); ?>');">
              <?php if( !empty($intro['afbeelding']) ) echo cbv_get_image_tag($intro['afbeelding']); ?>
            </div>
          </div>
          <div class="tvd-diensten-rgt">
            <?php 
              if( !empty($cta['titel']) ) printf('<h2 class="tvd-diensten-title fl-h1 hide-sm">%s</h2>', $cta['titel']);
              if( !empty($cta['beschrijving'])) echo wpautop($cta['beschrijving']); 
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php 
$showhide_proces = get_field('showhide_proces', $thisID);
$onspro = get_field('onspro', $thisID);
if( $showhide_proces ):
?>
<section class="tvd-process-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tvd-process-sec-inr">
          <div class="tvd-process-entry-hdr fl-entry-hdr">
            <?php 
              if( !empty($onspro['titel']) ) printf('<h2 class="tvd-process-entry-hdr-title fl-h2">%s</h2>', $onspro['titel']);
              if( !empty($onspro['beschrijving'])) echo wpautop($onspro['beschrijving']); 
            ?>
          </div>
          <?php if( $onspro['proces'] ): ?>
          <div class="tvd-process-grds">
            <div class="rvd-process-grd-items proSlider">
              <?php foreach( $onspro['proces'] as $onspro_row ): ?>
              <div class="rvd-process-grd-item-ctlr">
                <div class="tvd-process-grd-item">
                  <div class="tvd-pgi-img">
                    <div class="tvd-pgi-img-border"></div>
                    <i><?php if( !empty($onspro_row['icon']) ) echo cbv_get_image_tag($onspro_row['icon']); ?></i>
                  </div>
                  <div class="tvd-pgi-des">
                    <?php 
                      if( !empty($onspro_row['titel']) ) printf('<h3 class="tvd-pgi-des-title fl-h3 fl-h3">%s</h3>', $onspro_row['titel']);
                      if( !empty($onspro_row['beschrijving'])) echo wpautop($onspro_row['beschrijving']); 
                    ?>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<div class="diensten-ctlr">
<?php 
$showhide_diensten = get_field('showhide_diensten', $thisID);
$diensten = get_field('diensten', $thisID);
if( $showhide_diensten ):
?>
  <section class="Our-services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="Our-services-cntlr">

            <div class="tvd-nieuws-entry-hdr fl-entry-hdr">
              <?php 
                if( !empty($diensten['titel']) ) printf('<h2 class="tvd-nieuws-enty-hdr-title fl-h2">%s</h2>', $diensten['titel']);
                if( !empty($diensten['beschrijving'])) echo wpautop($diensten['beschrijving']); 
              ?>
              <span>
                <i><img src="assets/images/team-border-btm.svg"></i>
              </span>
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
                      <div class="osgi-img inline-bg" style="background-image: url('assets/images/our-services-grd-item-img-001.jpg');"></div>
                    </div>
                    <div class="osgi-desc-cntlr">
                      <h3 class="osgi-desc-title fl-h3 mHc"><a href="#"><span>01.</span> Dienst naam</a></h3>
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
                      <div class="osgi-img inline-bg" style="background-image: url('assets/images/our-services-grd-item-img-002.jpg');"></div>
                    </div>
                    <div class="osgi-desc-cntlr">
                      <h3 class="osgi-desc-title fl-h3 mHc"><a href="#"><span>01.</span> Dienst naam</a></h3>
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
                      <div class="osgi-img inline-bg" style="background-image: url('assets/images/our-services-grd-item-img-003.jpg');"></div>
                    </div>
                    <div class="osgi-desc-cntlr">
                      <h3 class="osgi-desc-title fl-h3 mHc"><a href="#"><span>01.</span> Dienst naam</a></h3>
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
                      <div class="osgi-img inline-bg" style="background-image: url('assets/images/our-services-grd-item-img-001.jpg');"></div>
                    </div>
                    <div class="osgi-desc-cntlr">
                      <h3 class="osgi-desc-title fl-h3 mHc"><a href="#"><span>01.</span> Dienst naam</a></h3>
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
  <div class="tvd-deinsten-con-sec">
    <div class="container-sm">
      <div class="row">
        <div class="col-md-12">
          <div class="tvd-deinsten-con-sec-inr">
            <div class="dfp-text-module clearfix">
              <h2>Dignissim nisi leo pellentesque purus tempor eros eu.</h2>
              <p>Diam aenean in cursus sollicitudin. Accumsan pharetra lectus ut purus nec quam massa non. </p>
            </div>
            <div class="ac-fancy-module" >
                <div class="fancy-img inline-bg" style="background-image: url(assets/images/dfp-img-05.jpg);"></div>
                  <a class="overlay-link" data-fancybox href="https://www.youtube.com/watch?v=ScMzIvxBSi4&t=3s"></a>
                  <div class="fancy-border"></div>
                <span class="ms-video-play-cntlr">
                  <i>
                    <svg class="play-icon-white-svg" width="72" height="72" viewBox="0 0 72 72" fill="#ffffff">
                      <use xlink:href="#play-icon-white-svg"></use>
                    </svg> 
                  </i>
                </span>
            </div>
            <div class="dfp-text-module">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac posuere sagittis pellentesque nisi. Purus imperdiet cursus adipiscing quam diam egestas odio eget a. Id eu habitasse tincidunt pellentesque enim ultricies massa.</p>
              <p>Justo velit lacus volutpat iaculis ac nisl. Ridiculus suscipit neque, ipsum ipsum facilisis. Sed facilisis lectus ut dictum.</p>
            </div>
            <div class="gallery-wrap clearfix">
              <div class="gallery gallery-columns-2">
                <figure class="gallery-item">
                  <div class="gallery-icon portrait">
                    <img src="assets/images/dfp-img-02.jpg">
                  </div>
                </figure>

                <figure class="gallery-item">
                  <div class="gallery-icon portrait">
                    <img src="assets/images/dfp-img-06.jpg">
                  </div>
                </figure>
              </div>
            </div>
            <div class="dft-text-module">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus a suscipit et erat ultrices. Volutpat et iaculis at fermentum, cursus consequat vitae nulla semper. </p>
            </div>
            <div class="fl-dft-overflow-controller">
              <div class="fl-dft-lftimg-rgtdes clearfix fl-dft-rgtimg-lftdes">
                <div class="fl-dft-lftimg-rgtdes-lft fl-dft-lftimg-rgtdes-lft-img-scale mHc">
                  <div class="fl-dft-lftimg-rgtdes-lft-img-inr" style="background-image: url(assets/images/dfp-img-02.jpg);">
                    <img class="align-right" src="assets/images/dfp-img-02.jpg">
                  </div>
                </div>
                <div class="fl-dft-lftimg-rgtdes-rgt mHc">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Penatibus nam vulputate amet facilisis in adipiscing. Ut faucibus netus ipsum in. Vitae, sed dui enim, malesuada. Semper quis rhoncus augue tincidunt consequat pulvinar commodo pellentesque blandit.</p> 
                  <p>Nec viverra nibh vehicula consectetur. Iaculis rutrum feugiat pulvinar sociis a feugiat enim. Turpis scelerisque quis faucibus curabitur varius nulla. Semper massa dictum iaculis id sem euismod leo sed scelerisque. Ut imperdiet eu ut amet, velit. </p>
                </div>
              </div>
            </div>
            <div class="dft-text-module">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus a suscipit et erat ultrices. Volutpat et iaculis at fermentum, cursus consequat vitae nulla semper. </p>
            </div>
            <div class="dfp-convarsal-module">
              <div class="dfp-convarsal-triangle">
                  <div class="dfp-convarsal-border">
                    
                  </div>
                  <i><img src="assets/images/blockqoute-icon.png"></i>
                </div>
              <div class="dfp-conversal-module-inr">
                
                <div class="dfp-covesal-logo">
                  <img src="assets/images/dfp-conversal.png">
                </div>
                <div class="dfp-text-module">
                  <p>Integer facilisis amet senectus amet adipiscing pulvinar ac sed. Ullamcorper ante non purus enim, tortor donec. Tortor, egestas eu etiam eget volutpat enim ut urna vel. In vulputate risus elementum duis.</p>
                  <p><strong>Duurzame Ontwikkelingsdoelstellingen*</strong></p>
                </div>
                <div class="dfp-goal clearfix">
                  <div class="dfp-goal-1 red">
                    <div class="dfp-goal-img">
                      <i><img src="assets/images/dfp-goal-img-01.jpg"></i>
                    </div>
                    <div class="dfp-goal-des">
                      <p><strong>GOAL 8: </strong></p>
                      <p>Decent Work and Economic Growth</p>
                    </div>
                  </div>
                  <div class="dfp-goal-2 green">
                    <div class="dfp-goal-img">
                      <i><img src="assets/images/dfp-goal-img-02.jpg"></i>
                    </div>
                    <div class="dfp-goal-des">
                      <p><strong>GOAL 13: </strong></p>
                      <p>Climate Action</p>
                    </div>
                  </div>
                  <div class="dfp-goal-3 blue">
                    <div class="dfp-goal-img">
                      <i><img src="assets/images/dfp-goal-img-03.jpg"></i>
                    </div>
                    <div class="dfp-goal-des">
                      <p><strong>GOAL 17: </strong></p>
                      <p>Partnerships to achieve the Goal</p>
                    </div>
                  </div>
                </div>
                <div class="dfp-text-module dfp-conversal-text-module">
                  <p>*De Duurzame Ontwikkelingsdoelstellingen zijn in 2015 door de Verenigde Naties vastgesteld als de nieuwe mondiale duurzame ontwikkelingsagenda voor 2030. Ze worden gepromoot als de wereldwijde doelstellingen voor duurzame ontwikkeling. </p>
                  <p><strong>- Conversal</strong></p>
                </div>
              </div>
              
              
              
              
            </div>
            <div class="dfp-corona-module">
              <div class="dfp-corona-module-inr">
                <h2 class="corona-module-title fl-h2">Corona herstelkrediet</h2>
                <p>Egestas pellentesque urna mattis pellentesque et commodo rutrum. Risus placerat tempor dolor sagittis porttitor consectetur pulvinar accumsan.</p>
                <a href="#">BUTTON</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>