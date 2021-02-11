<?php 
get_header(); 
while( have_posts() ): the_post();
  $author_id = get_the_author_meta( 'ID' );
  $gridtag = cbv_get_image_tag( get_post_thumbnail_id(get_the_ID()), 'postsingle');
  if( empty($gridtag) ){
    $gridtag = '<img src="'.THEME_URI.'/assets/images/single-post-df-img.jpg" alt="'.get_the_title().'">';
  }
  $permalink = get_the_permalink();
?>
<section class="innerpage-con-wrap" id="fl-nieuws-details">
  <div class="container-sm">
    <div class="row">
      <div class="col-md-12">
        <article class="default-page-con">
          <div class="dfp-promo-module clearfix">
            <div class="dfp-promo-module-hdr">
              <strong class="dfp-promo-module-title"><?php the_title(); ?></strong>
            </div>
            <div class="dfp-promomodule-author">
              <span>Author:</span>
              <strong><?php echo ucwords(get_the_author_meta( 'display_name', $author_id )); ?></strong>
            </div>
            <div class="dfp-plate-one-img-bx">
              <?php echo $gridtag; ?>
              <div class="tvd-triangle">
                <div class="tvd-tringle-border">
                  
                </div>
                <div class="tvd-date">
                    <strong><?php echo get_the_date('d'); ?></strong>
                    <span><?php echo get_the_date('M'); ?></span>
                  </div>
              </div>
            </div>
            <div class="dfp-promo-share-module">
              <span>Deel op:</span>
              <div class="dfp-social-media-module">
                <ul class="reset-list">
                  <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://twitter.com/home?status=<?php echo $permalink; ?>"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="https://www.instagram.com/?url=<?php echo $permalink; ?>"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <?php if(have_rows('inhoud')){  ?>
            <?php while ( have_rows('inhoud') ) : the_row();  ?>
            <?php 
            if( get_row_layout() == 'introductietekst' ){ 
              $title = get_sub_field('titel');
              $afbeelding = get_sub_field('afbeelding');
          ?>
          <div class="dfp-promo-module clearfix">
            <?php 
              if( !empty($title) ) printf('<div class="dfp-promo-module-hdr"><strong class="dfp-promo-module-title">%s</strong></div>', $title); 
              if( !empty($afbeelding) ){
                echo '<div class="dfp-plate-one-img-bx">'. cbv_get_image_tag($afbeelding).'</div>';
              }
            ?>
          </div>
          <?php 
          }elseif( get_row_layout() == 'teksteditor' ){ 
          $beschrijving = get_sub_field('fc_teksteditor');
          ?>
          <div class="dfp-text-module clearfix">
            <?php if( !empty( $beschrijving ) ) echo wpautop($beschrijving); ?>
          </div>
          <?php }elseif( get_row_layout() == 'galerij' ){ ?>
          <?php     
            $galleries = get_sub_field('afbeeldingen');
            $lightbox = get_sub_field('lightbox');
            $kolom = get_sub_field('kolom');
            if( $galleries ): 
          ?>
            <div class="gallery-wrap clearfix">
              <div class="gallery gallery-columns-<?php echo $kolom; ?>">
                <?php foreach( $galleries as $image ): ?>
                <figure class="gallery-item">
                  <div class="gallery-icon portrait">
                    <?php 
                          if( $lightbox ){
                    echo "<a data-fancybox='gallery' href='{$image['url']}'>";
                    echo cbv_get_image_tag( $image, 'dfpageg1' );
                    echo "</a>";
                          }else{
                            echo cbv_get_image_tag( $image, 'dfpageg1' );
                          }
                    ?>
                  </div>
                </figure>
              <?php endforeach; ?>
              </div>
            </div>
            <?php endif; ?>        
          <?php }elseif( get_row_layout() == 'fcvideo' ){ ?>
          <?php     
            $poster = get_sub_field('poster');
            $video_url = get_sub_field('video_url');
            $postersrc = !empty($poster)? cbv_get_image_src($poster, 'cargrid'): '';
          ?>
          <div class="ac-fancy-module">
              <div class="fancy-img inline-bg" style="background-image: url(<?php echo $postersrc; ?>);"></div>
              <?php if( $video_url ): ?>
                <a class="overlay-link" data-fancybox="" href="<?php echo $video_url; ?>"></a>
                <div class="fancy-border"></div>
              <span class="ms-video-play-cntlr">
                <i>
                  <svg class="play-icon-white-svg" width="72" height="72" viewBox="0 0 72 72" fill="#ffffff">
                    <use xlink:href="#play-icon-white-svg"></use>
                  </svg> 
                </i>
              </span>
              <?php endif; ?>
          </div>
   <?php 
      }elseif( get_row_layout() == 'fcnieuws' ){
      $fc_nieuwsIDs = get_sub_field('fc_nieuws');
      if( !empty($fc_nieuwsIDs) ){
        $nieucount = count($fc_nieuwsIDs);
        $nieuwsQuery = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page'=> $nieucount,
          'post__in' => $fc_nieuwsIDs,
          'orderby' => 'rand'

        ));
            
      }else{
        $nieuwsQuery = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page'=> 6,
          'orderby' => 'rand',
          'order'=> 'desc',

        ));
      }
    if( $nieuwsQuery->have_posts() ): 
    ?>
          <div class="dfp-nieuws-module bnwsSlider clearfix">
            <?php 
                while($nieuwsQuery->have_posts()): $nieuwsQuery->the_post();
                $gridurl = cbv_get_image_src( get_post_thumbnail_id(get_the_ID()), 'dftnieuws' );
                if( empty($gridurl) ){
                  $gridurl = THEME_URI.'/assets/images/post-df-img.jpg';
                }
              ?>             
              <div class="tvd-nieuws-grds">
                <div class="tvd-nieuws-grd-item">
                  <div class="tvd-nieuws-img-ctlr">
                    <a class="overlay-link" href="<?php the_permalink( ); ?>"></a>
                    <div class="tvd-nieuws-img inline-bg" style="background: url('<?php echo $gridurl; ?>');"></div>
                    <div class="tvd-triangle">
                      <div class="tvd-tringle-border">
                        
                      </div>
                      <div class="tvd-date">
                          <strong><?php echo get_the_date('d'); ?></strong>
                          <span><?php echo get_the_date('M'); ?></span>
                        </div>
                    </div>
                  </div>
                  <div class="tvd-nieuws-grd-item-des mHc" style="height: 168px;">
                    <h3 class="tvd-nieuws-grd-item-des-title mHc1" style="height: 48px;">
                      <a href="<?php the_permalink( ); ?>"><?php the_title(); ?></a>
                    </h3>
                    <div class="tvd-nieuws-grd-item-con mHc2" style="height: 61px;">
                      <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink( ); ?>">Lees meer</a>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
          <hr>
          <?php endif; wp_reset_postdata(); ?>
        <?php 
          }elseif( get_row_layout() == 'fccta' ){
            $fc_type = get_sub_field('type');
            $fc_titel = get_sub_field('titel');
            $fc_tekst = get_sub_field('tekst');
            $fc_knop = get_sub_field('knop');
            $iconID = get_sub_field('icon');
            $iconImg = !empty($iconID)? cbv_get_image_tag( $iconID ): '';
        ?>
        <?php if( $fc_type == 1 ): ?>
          <div class="dfp-fin-module clearfix orange">
            <div class="tvd-fin">
              <div class="tvd-fin-inr">
                <i>
                  <?php echo $iconImg; ?>
                </i>                
                <?php 
                  if( !empty($fc_titel) ) printf('<h2 class="tvd-fin-title fl-h2">%s</h2>', $fc_titel); 
                  if( !empty($fc_tekst) ) echo wpautop( $fc_tekst ); 
                  if( is_array( $fc_knop ) &&  !empty( $fc_knop['url'] ) ){
                    printf('<a href="%s" target="%s">%s</a>', $fc_knop['url'], $fc_knop['target'], $fc_knop['title']); 
                  }
                ?> 
              </div>
            </div>
          </div>
          <?php elseif($fc_type == 2): ?>
            <div class="dfp-fin-module clearfix">
            <div class="tvd-fin">
              <div class="tvd-fin-inr">
                <i>
                  <?php echo $iconImg; ?>
                </i>                
                <?php 
                  if( !empty($fc_titel) ) printf('<h2 class="tvd-fin-title fl-h2">%s</h2>', $fc_titel); 
                  if( !empty($fc_tekst) ) echo wpautop( $fc_tekst ); 
                  if( is_array( $fc_knop ) &&  !empty( $fc_knop['url'] ) ){
                    printf('<a href="%s" target="%s">%s</a>', $fc_knop['url'], $fc_knop['target'], $fc_knop['title']); 
                  }
                ?> 
                </div>
            </div>
          </div>
          <?php endif; ?>
          <?php }elseif( get_row_layout() == 'afbeelding_tekst' ){ 
            $fc_afbeelding = get_sub_field('fc_afbeelding');
            $imgsrc = !empty($fc_afbeelding)? cbv_get_image_src($fc_afbeelding, 'dfpageg1'): '';
            $imgtag = !empty($fc_afbeelding)? cbv_get_image_tag($fc_afbeelding, 'dfpageg1'): '';
            $fc_tekst = get_sub_field('fc_tekst');
            $positie_afbeelding = get_sub_field('positie_afbeelding');
            $imgposcls = ( $positie_afbeelding == 'right' ) ? ' fl-dft-rgtimg-lftdes' : '';
          ?>
          <div class="fl-dft-overflow-controller">
            <div class="fl-dft-lftimg-rgtdes clearfix<?php echo $imgposcls; ?>">
              <div class="fl-dft-lftimg-rgtdes-lft fl-dft-lftimg-rgtdes-lft-img-scale mHc">
                <div class="fl-dft-lftimg-rgtdes-lft-img-inr" style="background-image: url(<?php echo $imgsrc; ?>);">
                  <?php echo $imgtag; ?>
                </div>
              </div>
              <div class="fl-dft-lftimg-rgtdes-rgt mHc">
                <?php echo wpautop($fc_tekst); ?>
              </div>
            </div>
          </div>
          <?php }elseif( get_row_layout() == 'tekst_tekst' ){ 
            $fc_tekst1 = get_sub_field('fc_tekst1');
            $fc_tekst2 = get_sub_field('fc_tekst2');
          ?>
          <div class="dfp-des-module clearfix">
            <?php if( !empty($fc_tekst1) ): ?>
            <div class="dfp-des-lft">
              <?php echo wpautop($fc_tekst1); ?>
            </div>
            <?php endif; ?>
            <?php if( !empty($fc_tekst2) ): ?>
            <div class="dfp-des-rgt">
              <?php echo wpautop($fc_tekst2); ?>
            </div>
            <?php endif; ?>
          </div>
            <?php 
            }elseif( get_row_layout() == 'getuigenis' ){ 
            $fc_getuigenis = get_sub_field('fc_getuigenis');
            $fc_naam = get_sub_field('fc_naam');
            ?>
            <div class="dft-blockquote">
              <div class="dft-blockquote-triangle">
                <div class="dft-blockquote-border">
                  
                </div>
                <i>
                  <svg class="blockqoute-icon-svg" width="31" height="25" viewBox="0 0 31 25" fill="#ffffff">
                    <use xlink:href="#blockqoute-icon-svg"></use> </svg>
                  </i>
              </div>
              
              <blockquote>
                <?php 
                  if( !empty($fc_getuigenis) ) echo wpautop( $fc_getuigenis ); 
                  if( !empty($fc_naam) ) printf('<strong>- %s</strong>', $fc_naam); 
                ?>
              </blockquote>
            </div>
            <?php 
            }elseif( get_row_layout() == 'klant_conversatie' ){ 
            $fc_icon = get_sub_field('icon');
            $fc_tekst = get_sub_field('tekst');
            $fc_topnoot = get_sub_field('topnoot');
            $selecteer_doelen = get_sub_field('selecteer_doelen');
            $onderste_opmerking = get_sub_field('onderste_opmerking');
            $imgtag = !empty($fc_icon)? cbv_get_image_tag($fc_icon): '';
            ?>
            <div class="dfp-convarsal-module">
            <div class="dfp-convarsal-triangle">
                <div class="dfp-convarsal-border">
                  
                </div>
                <i><img src="<?php echo THEME_URI; ?>/assets/images/blockqoute-icon.png"></i>
              </div>
            <div class="dfp-conversal-module-inr">
              
              <div class="dfp-covesal-logo">
                <?php echo $imgtag; ?>
              </div>
              <div class="dfp-text-module">
              <?php 
                if( !empty($fc_tekst)) echo wpautop($fc_tekst);
                if( !empty($fc_topnoot) ) printf('<p><strong>%s</strong></p>', $fc_topnoot); 
              ?>
              </div>
               <?php 
                  if( !empty($selecteer_doelen) ){
                    $goalcount = count($selecteer_doelen);
                    $goalQuery = new WP_Query(array(
                      'post_type' => 'goal',
                      'posts_per_page'=> $goalcount,
                      'post__in' => $selecteer_doelen,
                      'orderby' => 'rand'

                    ));
                        
                  }else{
                    $goalQuery = new WP_Query(array(
                      'post_type' => 'goal',
                      'posts_per_page'=> 3,
                      'orderby' => 'rand',
                      'order'=> 'desc',

                    ));
                  }
                if( $goalQuery->have_posts() ): 
                ?>
              <div class="dfp-goal clearfix">
              <?php 
                while($goalQuery->have_posts()): $goalQuery->the_post();
                $goalIcon = cbv_get_image_tag( get_post_thumbnail_id(get_the_ID()));
                $goalcolor = !empty(get_field( 'selecteer_kleur'))? get_field( 'selecteer_kleur'):'';
              ?>
                <div class="dfp-goal-1<?php echo ' '.$goalcolor; ?>">
                  <div class="dfp-goal-img">
                    <i><?php echo $goalIcon; ?></i>
                  </div>
                  <div class="dfp-goal-des">
                    <p><strong><?php the_title(); ?></strong></p>
                    <?php the_excerpt(); ?>
                  </div>
                </div>
                <?php endwhile; ?>
              </div>
              <?php endif; wp_reset_postdata(); ?>
              <div class="dfp-text-module dfp-conversal-text-module">
              <?php 
                if( !empty($onderste_opmerking)) echo wpautop($onderste_opmerking);
              ?>
                <p><strong>- Conversal</strong></p>
              </div>
            </div>
          </div>
          <?php 
            }elseif( get_row_layout() == 'fcfaq' ){
            $fc_titel = get_sub_field('fc_titel'); 
            $fc_faqs = get_sub_field('fc_faqs'); 
            if( $fc_faqs ):
          ?>
          <div class="dfp-accordion-module">
            <?php if( !empty($fc_titel) ) printf('<h3>%s</h3>', $fc_titel); ?>
            <?php 
              foreach( $fc_faqs as $fcfaq ):
            ?>
            <div class="dfp-accordion">
              <?php 
                if( !empty($fcfaq['titel']) ) printf('<h5>%s</h5>', $fcfaq['titel']);
                if( !empty($fcfaq['tekst']) ) echo wpautop( $fcfaq['tekst'] );
              ?>
            </div>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
          <?php 
          }elseif( get_row_layout() == 'fcknop' ){
            $oranje_knop = get_sub_field('oranje_knop');
            $groen_knop = get_sub_field('groen_knop');
            $witte_knop = get_sub_field('witte_knop');
          ?>
          <div class="dfp-btn">
            <div class="dfp-btn-inr">
              <ul class="reset-list">
            <?php 
              if( is_array( $oranje_knop ) &&  !empty( $oranje_knop['url'] ) ){
                printf('<li><a class="orange-btn" href="%s" target="%s">%s</a></li>', $oranje_knop['url'], $oranje_knop['target'], $oranje_knop['title']); 
              }
              if( is_array( $groen_knop ) &&  !empty( $groen_knop['url'] ) ){
                printf('<li><a class="green-btn" href="%s" target="%s">%s</a></li>', $groen_knop['url'], $groen_knop['target'], $groen_knop['title']); 
              }
              if( is_array( $witte_knop ) &&  !empty( $witte_knop['url'] ) ){
                printf('<li><a class="transparen-bg" href="%s" target="%s">%s</a></li>', $witte_knop['url'], $witte_knop['target'], $witte_knop['title']); 
              }
            ?>
              </ul>
            </div>
          </div>
          <?php }elseif( get_row_layout() == 'table' ){
              $fc_table = get_sub_field('fc_table');
              cbv_table($fc_table);
          }elseif( get_row_layout() == 'gap' ){ 
            $fc_gap = get_sub_field('fc_gap');
          ?>  
          <div style="height: <?php echo $fc_gap; ?>"></div>
          <?php }elseif( get_row_layout() == 'fcklanten' ){ ?>
          <?php 
            $showhide_klanten = get_field('showhide_klanten', HOMEID);
            $home_klanten = get_field('home_klanten', HOMEID);
            if( $showhide_klanten ):
          ?>
          <div class="dfp-klanten-module">
            <div class="tvd-customer-hdr">
              <?php if( !empty($home_klanten['titel']) ) printf('<h2 class="tvd-customer-title">%s</h2>', $home_klanten['titel']); ?>
            </div>
          <?php 
            $klanten_logos = $home_klanten['klanten_logo'];
            if( $klanten_logos ):
          ?> 
            <div class="tvd-customer-slider-ctlr">
              <div class="tvd-customer-slider bnpgnSlider">
                <?php  
                  foreach( $klanten_logos as $klanten_logo ): 
                    $klanten_logoIcon = !empty($klanten_logo['icon'])? cbv_get_image_tag( $klanten_logo['icon'], 'full' ): '';
                ?>
                <div class="tvd-customer-grd">
                  <div class="tvd-customer-grd-img mHc">
                    <?php if( !empty($klanten_logo['knop']) ): ?>
                      <a class="overlay-link" href="<?php echo $klanten_logo['knop']; ?>"></a>
                    <?php endif; ?>
                    <?php echo $klanten_logoIcon;?>
                  </div>
                </div>
                <?php endforeach ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php } ?>
          <?php endwhile; ?>
          <?php } ?>
          <div class="dfp-backlink-module">
            <a href="javascript: history.go(-1)">
              Terug naar overzicht
              <i>
                <svg class="backlink-arrow-svg" width="16" height="12" viewBox="0 0 16 12" fill="#E0861A">
                  <use xlink:href="#backlink-arrow-svg"></use>
                </svg>
              </i>
            </a>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<?php 
  $terms = get_the_terms( get_the_ID(), 'category' );
  if( !empty($terms) ){
    $term_ids = array();
    foreach( $terms as $term ){
      $term_ids[] = $term->term_id;
    }
    $query = new WP_Query(array( 
        'post_type'=> 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'orderby' => 'rand',
        'tax_query' => array(
             array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $term_ids
            )
        ) 
      ) 
    );
  }else{
    $query = new WP_Query(array( 
        'post_type'=> 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'orderby' => 'rand',  
      ) 
    );
  }
  if($query->have_posts()){
    $rel_nieuws = get_field('gerelateerdnieuws', 'options');
?>
<section class="tvd-related-nieuws-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tvd-related-nieuws-sec-inr">
          <div class="tvd-related-niuews-entry-hdr fl-entry-hdr">
          <?php 
            if( !empty($rel_nieuws['titel']) ) 
              printf('<h2 class="tvd-rneh-title fl-h2">%s</h2>', $rel_nieuws['titel']);
            else
              printf('<h2 class="tvd-rneh-title fl-h2">Gerelateerd Nieuws</h2>');

            if( !empty($rel_nieuws['beschrijving'])) echo wpautop($rel_nieuws['beschrijving']); 
          ?>
            <span>
              <i><img src="<?php echo THEME_URI; ?>/assets/images/team-border-btm.svg"></i>
            </span>
          </div>
          <div class="tvd-rn-grds-item">
            <div class="tvd-nieuws-slider rnSlider clearfix">
            <?php 
                while($query->have_posts()): $query->the_post();
                $re_gridurl = cbv_get_image_src( get_post_thumbnail_id(get_the_ID()), 'dftnieuws' );
                if( empty($re_gridurl) ){
                  $re_gridurl = THEME_URI.'/assets/images/post-df-img.jpg';
                }
              ?> 
              <div class="tvd-nieuws-grds">
                <div class="tvd-nieuws-grd-item">
                  <div class="tvd-nieuws-img-ctlr">
                    <a class="overlay-link" href="<?php the_permalink( ); ?>"></a>
                    <div class="tvd-nieuws-img inline-bg" style="background: url('<?php echo $re_gridurl; ?>');"></div>
                    <div class="tvd-triangle">
                      <div class="tvd-tringle-border">
                        
                      </div>
                      <div class="tvd-date">
                          <strong><?php echo get_the_date('d'); ?></strong>
                          <span><?php echo get_the_date('M'); ?></span>
                        </div>
                    </div>
                  </div>
                  <div class="tvd-nieuws-grd-item-des mHc">
                    <h3 class="tvd-nieuws-grd-item-des-title fl-h3 mHc1">
                      <a href="<?php the_permalink( ); ?>"><?php the_title( ); ?></a>
                    </h3>
                    <div class="tvd-nieuws-grd-item-con mHc2">
                      <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink( ); ?>">Lees meer</a>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } wp_reset_postdata();?>
<?php endwhile; ?>
<?php get_footer(); ?>