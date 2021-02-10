<?php 
  $thisID = get_the_ID();
  $teamsec = get_field('teamsec', 'options');
  if( $teamsec ):
?>

<section class="tvd-team-member-wec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tvd-team-member-wrp">
          <div class="tvd-nieuws-enty-hdr">
            <?php 
              if( !empty($teamsec['titel']) ) printf('<h2 class="fl-h2 tvd-nieuws-enty-hdr-title">%s</h2>', $teamsec['titel']);
              if( !empty($teamsec['beschrijving'])) echo wpautop($teamsec['beschrijving']); 
            ?>
            <span><i><img src="<?php echo THEME_URI; ?>/assets/images//team-border-btm.svg"></i></span>
          </div>
          <?php 
          $teamIDS = $teamsec['selecteerteam'];
          if( !empty($teamIDS) ){
            $count = count($teamIDS);
            $args =array(
              'post_type' => 'team',
              'posts_per_page'=> $count,
              'post_status' => 'publish',
              'post__in' => $teamIDS,
              'orderby' => 'date',
              'order'=> 'asc',

            );   
          }else{
            $args = array(  
              'post_type' => 'team',
              'posts_per_page' => 3,
              'post_status' => 'publish',
              'orderby' => 'date',
              'order' => 'ASC'
            );
          }
            $loop = new WP_Query( $args ); 
            if( $loop->have_posts() ):
           ?>
          <div class="tvd-team-grid-wrp">
            <div class="tvd-team-grid-slider">
            <?php 
              while ( $loop->have_posts() ) : $loop->the_post();  
              $functie = get_field('functie', get_the_ID());
              $telefoon = get_field('telefoon', get_the_ID());
              $emailadres = get_field('emailadres', get_the_ID());
              $smedia = get_field('social_contacts', get_the_ID());
              $imgID = get_post_thumbnail_id(get_the_ID());
              $imgsrc = !empty($imgID)? cbv_get_image_src($imgID):'';
              $imgtag = !empty($imgID)? cbv_get_image_tag($imgID):'';
            ?>
              <div class="tvd-team-grid-slide-item">
                <div class="tvd-team-grid-slide-item-img inline-bg" style="background: url('<?php echo $imgsrc; ?>');">
                  <?php echo $imgtag; ?>
                  <div class="tvd-team-grid-hover">
                    <?php the_excerpt(); ?>
                  </div>
                </div>
                <div class="tvd-team-grid-dsc-inr">
                  <div class="tvd-team-grid-tp clearfix">
                    <div class="tvd-team-grid-mk">
                      <h3 class="fl-h3 tvd-team-mk-title"><?php the_title(); ?></h3>
                      <?php if( !empty($functie) ) printf('<span>%s</span>', $functie); ?>
                    </div>
                    <?php if( $smedia ): ?>
                    <div class="tvd-team-grid-social clearfix">
                      <ul class="reset-list">
                        <?php if( !empty($smedia['facebook_url']) ): ?>
                        <li>
                          <a href="<?php echo $smedia['facebook_url']; ?>">
                            <i>
                            <svg class="cotact-facebook-svg" width="17" height="16" viewBox="0 0 17 16" fill="#4B4B4B">
                              <use xlink:href="#cotact-facebook-svg"></use>
                            </svg>
                          </i>
                        </a>
                       </li>
                     <?php endif; ?>
                     <?php if( !empty($smedia['twitter_url']) ): ?>
                        <li>
                          <a href="<?php echo $smedia['twitter_url']; ?>">
                            <i>
                            <svg class="contact-twiter-svg" width="17" height="16" viewBox="0 0 17 16" fill="#4B4B4B">
                              <use xlink:href="#contact-twiter-svg"></use>
                            </svg>
                          </i>
                          </a>
                        </li>
                        <?php endif; ?>
                        <?php if( !empty($smedia['instagram_url']) ): ?>
                        <li>
                          <a href="<?php echo $smedia['instagram_url']; ?>">
                            <i>
                            <svg class="contact-ins-svg" width="17" height="16" viewBox="0 0 17 16" fill="#4B4B4B">
                              <use xlink:href="#contact-ins-svg"></use>
                            </svg>
                          </i>
                          </a>
                        </li>
                        <?php endif; ?>
                      </ul>
                    </div>
                    <?php endif; ?>
                  </div>
                  <div class="tvd-team-grid-info">
                    <ul class="reset-list clearfix">
                      <?php if( !empty($telefoon) ): ?>
                    <li>
                      <a href="tel:<?php echo phone_preg($telefoon);?>">
                        <i>
                        <svg class="contact-phone-svg" width="16" height="16" viewBox="0 0 16 16" fill="#E0861A">
                          <use xlink:href="#contact-phone-svg"></use>
                        </svg>
                      </i>
                      <?php echo $telefoon; ?>
                      </a></li>
                    <?php endif; ?>
                    <?php if( !empty($emailadres) ): ?>
                    <li>
                      <a href="mailto:<?php echo $emailadres; ?>">
                        <i>
                        <svg class="contact-mail-svg" width="16" height="13" viewBox="0 0 16 13" fill="#E0861A">
                          <use xlink:href="#contact-mail-svg"></use>
                        </svg>
                      </i>
                      <?php echo $emailadres; ?>
                    </a>
                    </li>
                  <?php endif; ?>
                  </ul>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
            </div>
          </div>
          <?php endif; wp_reset_postdata();?>

          <div class="tvd-team-grid-bdr"></div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php endif; ?>