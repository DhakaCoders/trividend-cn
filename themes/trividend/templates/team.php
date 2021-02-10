<!-- <?php 
  $thisID = get_the_ID();
  $teamsec = get_field('teamsec', $thisID);
  if( $teamsec ):
?> -->

<section class="tvd-team-member-wec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tvd-team-member-wrp">
          <div class="tvd-nieuws-enty-hdr">
<!--             <h2 class="fl-h2 tvd-nieuws-enty-hdr-title">Team</h2>
            <p>Accumsan pharetra lectus ut purus nec quam massa non.</p> -->
            <?php 
              if( !empty($teamsec['titel']) ) printf('<h2 class="fl-h2 tvd-nieuws-enty-hdr-title">%s</h2>', $teamsec['titel']);
              if( !empty($teamsec['beschrijving'])) echo wpautop($teamsec['beschrijving']); 
            ?>
            <span><i><img src="<?php echo THEME_URI; ?>/assets/images//team-border-btm.svg"></i></span>
          </div>
          <div class="tvd-team-grid-wrp">
            <div class="tvd-team-grid-slider">
              <div class="tvd-team-grid-slide-item">
                <div class="tvd-team-grid-slide-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images//tvd-team-grid-slide-item-img-1.png');">
                  <img src="<?php echo THEME_URI; ?>/assets/images//tvd-team-grid-slide-item-img-1.png">
                  <div class="tvd-team-grid-hover">
                    <p>Diam aenean in cursus sollicitudin.<br> Accumsan pharetra lectus ut purus nec<br> quam massa non.</p>
                  </div>
                </div>
                <div class="tvd-team-grid-dsc-inr">
                  <div class="tvd-team-grid-tp clearfix">
                    <div class="tvd-team-grid-mk">
                      <h3 class="fl-h3 tvd-team-mk-title">Marie K.</h3>
                      <span>Functie</span>
                    </div>
                    <div class="tvd-team-grid-social clearfix">
                      <ul class="reset-list">
                        <li>
                          <a href="#">
                            <i>
                            <svg class="cotact-facebook-svg" width="17" height="16" viewBox="0 0 17 16" fill="#4B4B4B">
                              <use xlink:href="#cotact-facebook-svg"></use>
                            </svg>
                          </i>
                        </a>
                       </li>
                        <li>
                          <a href="#">
                            <i>
                            <svg class="contact-twiter-svg" width="17" height="16" viewBox="0 0 17 16" fill="#4B4B4B">
                              <use xlink:href="#contact-twiter-svg"></use>
                            </svg>
                          </i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i>
                            <svg class="contact-ins-svg" width="17" height="16" viewBox="0 0 17 16" fill="#4B4B4B">
                              <use xlink:href="#contact-ins-svg"></use>
                            </svg>
                          </i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="tvd-team-grid-info">
                    <ul class="reset-list clearfix">
                    <li>
                      <a href="tel:02 274 14 51">
                        <i>
                        <svg class="contact-phone-svg" width="16" height="16" viewBox="0 0 16 16" fill="#E0861A">
                          <use xlink:href="#contact-phone-svg"></use>
                        </svg>
                      </i>
                      02 274 14 51</a></li>
                    <li>
                      <a href="mailto:info@trividend.be">
                        <i>
                        <svg class="contact-mail-svg" width="16" height="13" viewBox="0 0 16 13" fill="#E0861A">
                          <use xlink:href="#contact-mail-svg"></use>
                        </svg>
                      </i>
                      marie.k@trividend.be</a>
                    </li>
                  </ul>
                  </div>
                </div>
              </div>
              <div class="tvd-team-grid-slide-item">
                <div class="tvd-team-grid-slide-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images//tvd-team-grid-slide-item-img-1.png');">
                  <img src="<?php echo THEME_URI; ?>/assets/images//tvd-team-grid-slide-item-img-1.png">
                  <div class="tvd-team-grid-hover">
                    <p>Diam aenean in cursus sollicitudin.<br> Accumsan pharetra lectus ut purus nec<br> quam massa non.</p>
                  </div>
                </div>
                <div class="tvd-team-grid-dsc-inr">
                  <div class="tvd-team-grid-tp clearfix">
                    <div class="tvd-team-grid-mk">
                      <h3 class="fl-h3 tvd-team-mk-title">Marie K.</h3>
                      <span>Functie</span>
                    </div>
                    <div class="tvd-team-grid-social clearfix">
                      <ul class="reset-list">
                        <li>
                          <a href="#">
                            <i>
                            <svg class="cotact-facebook-svg" width="17" height="16" viewBox="0 0 17 16" fill="#4B4B4B">
                              <use xlink:href="#cotact-facebook-svg"></use>
                            </svg>
                          </i>
                        </a>
                       </li>
                        <li>
                          <a href="#">
                            <i>
                            <svg class="contact-twiter-svg" width="17" height="16" viewBox="0 0 17 16" fill="#4B4B4B">
                              <use xlink:href="#contact-twiter-svg"></use>
                            </svg>
                          </i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i>
                            <svg class="contact-ins-svg" width="17" height="16" viewBox="0 0 17 16" fill="#4B4B4B">
                              <use xlink:href="#contact-ins-svg"></use>
                            </svg>
                          </i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="tvd-team-grid-info">
                    <ul class="reset-list clearfix">
                    <li>
                      <a href="tel:02 274 14 51">
                        <i>
                        <svg class="contact-phone-svg" width="16" height="16" viewBox="0 0 16 16" fill="#E0861A">
                          <use xlink:href="#contact-phone-svg"></use>
                        </svg>
                      </i>
                      02 274 14 51</a></li>
                    <li>
                      <a href="mailto:info@trividend.be">
                        <i>
                        <svg class="contact-mail-svg" width="16" height="13" viewBox="0 0 16 13" fill="#E0861A">
                          <use xlink:href="#contact-mail-svg"></use>
                        </svg>
                      </i>
                      marie.k@trividend.be</a>
                    </li>
                  </ul>
                  </div>
                </div>
              </div>
              <div class="tvd-team-grid-slide-item">
                <div class="tvd-team-grid-slide-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images//tvd-team-grid-slide-item-img-1.png');">
                  <img src="<?php echo THEME_URI; ?>/assets/images//tvd-team-grid-slide-item-img-1.png">
                  <div class="tvd-team-grid-hover">
                    <p>Diam aenean in cursus sollicitudin.<br> Accumsan pharetra lectus ut purus nec<br> quam massa non.</p>
                  </div>
                </div>
                <div class="tvd-team-grid-dsc-inr">
                  <div class="tvd-team-grid-tp clearfix">
                    <div class="tvd-team-grid-mk">
                      <h3 class="fl-h3 tvd-team-mk-title">Marie K.</h3>
                      <span>Functie</span>
                    </div>
                    <div class="tvd-team-grid-social clearfix">
                      <ul class="reset-list">
                        <li>
                          <a href="#">
                            <i>
                            <svg class="cotact-facebook-svg" width="17" height="16" viewBox="0 0 17 16" fill="#4B4B4B">
                              <use xlink:href="#cotact-facebook-svg"></use>
                            </svg>
                          </i>
                        </a>
                       </li>
                        <li>
                          <a href="#">
                            <i>
                            <svg class="contact-twiter-svg" width="17" height="16" viewBox="0 0 17 16" fill="#4B4B4B">
                              <use xlink:href="#contact-twiter-svg"></use>
                            </svg>
                          </i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i>
                            <svg class="contact-ins-svg" width="17" height="16" viewBox="0 0 17 16" fill="#4B4B4B">
                              <use xlink:href="#contact-ins-svg"></use>
                            </svg>
                          </i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="tvd-team-grid-info">
                    <ul class="reset-list clearfix">
                    <li>
                      <a href="tel:02 274 14 51">
                        <i>
                        <svg class="contact-phone-svg" width="16" height="16" viewBox="0 0 16 16" fill="#E0861A">
                          <use xlink:href="#contact-phone-svg"></use>
                        </svg>
                      </i>
                      02 274 14 51</a></li>
                    <li>
                      <a href="mailto:info@trividend.be">
                        <i>
                        <svg class="contact-mail-svg" width="16" height="13" viewBox="0 0 16 13" fill="#E0861A">
                          <use xlink:href="#contact-mail-svg"></use>
                        </svg>
                      </i>
                      marie.k@trividend.be</a>
                    </li>
                  </ul>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="tvd-team-grid-bdr"></div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- <?php endif; ?> -->