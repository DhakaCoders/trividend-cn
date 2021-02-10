<?php 
/*
  Template Name: Contact
*/
get_header(); 

?>

<section class="page-banner-sec-wrp contact-page-bnr">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tvd-nieuws-grd-entry-hdr">
          <h1 class="fl-h1 tvd-nieuws-entry-hdr-title">Contacteer Ons</h1>
          <p>Diam aenean in cursus sollicitudin. Accumsan pharetra <br> lectus ut purus nec quam massa non.</p>
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
            <div class="contact-form-wrp clearfix">
              <div class="wpforms-container">
                <form class="wpforms-form needs-validation" novalidate>
                  
                  <div class="wpforms-field-container">
                    
                    <div class="wpforms-field">
                      <label class="wpforms-field-label">Voornaam</label>
                      <input type="text" name="name" placeholder="Bijv. Jan" required>
                    </div>
                    <div class="wpforms-field">
                      <label class="wpforms-field-label">Familienaam</label>
                      <input type="text" name="name" placeholder="Bijv. Temmerman" required>
                    </div>

                    <div class="wpforms-field wpforms-has-error">
                      <label class="wpforms-field-label">Telefoon</label>
                      <input type="text" name="text" placeholder="Bijv. 0493 20 36 20" required>
                      <label class="wpforms-error">onjuist <span>x</span></label>
                    </div>

                    <div class="wpforms-field wpforms-has-error">
                      <label class="wpforms-field-label">E-mailadres</label>
                      <input type="email" name="email" placeholder="info2conversalbe" class="form-control" required>
                      <label class="wpforms-error">onjuist <span>x</span></label>
                    </div>

                    <div class="wpforms-field wpforms-field-textarea">
                      <label class="wpforms-field-label">Bericht</label>
                      <textarea name="message" placeholder="Jouw bericht"></textarea>
                    </div>
                  </div><!-- end of .wpforms-field-container-->

                  <div class="wpforms-submit-container">
                    <p>Wij respecteren uw <a href="#">privacy.</a> Jouw gegevens worden altijd vertrouwelijk behandeld.</p>
                    <button type="submit" name="submit" class="wpforms-submit">Verzenden</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
          <div class="contact-form-rgt">
            <div class="contact-form-info">
              <h2 class="fl-h2 contact-form-info-title">Contact Info</h2>
              <ul class="reset-list">
                <li>
                  <i>
                    <svg class="contact-map-svg" width="16" height="20" viewBox="0 0 16 20" fill="#E0861A">
                      <use xlink:href="#contact-map-svg"></use>
                    </svg>
                  </i>
                  <a href="#">Vooruitgangstraat 333/12<br>1030 Brussels</a>
                </li>
                <li>
                  <i>
                    <svg class="contact-phone-svg" width="16" height="16" viewBox="0 0 16 16" fill="#E0861A">
                      <use xlink:href="#contact-phone-svg"></use>
                    </svg>
                  </i>
                  <a href="tel:02 274 14 51">02 274 14 51</a></li>
                <li>
                  <i>
                    <svg class="contact-mail-svg" width="16" height="13" viewBox="0 0 16 13" fill="#E0861A">
                      <use xlink:href="#contact-mail-svg"></use>
                    </svg>
                  </i>
                  <a href="mailto:info@trividend.be">info@trividend.be</a>
                </li>
                <li class="text-code">
                  <i>
                    <svg class="contact-btw-svg" width="31" height="13" viewBox="0 0 31 13" fill="#E0861A">
                      <use xlink:href="#contact-btw-svg"></use>
                    </svg>
                  </i>
                  <span>0476 371 651</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="tvd-team-member-wec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tvd-team-member-wrp">
          <div class="tvd-nieuws-enty-hdr">
            <h2 class="fl-h2 tvd-nieuws-enty-hdr-title">Team</h2>
            <p>Accumsan pharetra lectus ut purus nec quam massa non.</p>
            <span><i><img src="<?php echo THEME_URI; ?>/assets/images/team-border-btm.svg"></i></span>
          </div>
          <div class="tvd-team-grid-wrp">
            <div class="tvd-team-grid-slider">
              <div class="tvd-team-grid-slide-item">
                <div class="tvd-team-grid-slide-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/tvd-team-grid-slide-item-img-1.png');">
                  <img src="<?php echo THEME_URI; ?>/assets/images/tvd-team-grid-slide-item-img-1.png">
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
                <div class="tvd-team-grid-slide-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/tvd-team-grid-slide-item-img-1.png');">
                  <img src="<?php echo THEME_URI; ?>/assets/images/tvd-team-grid-slide-item-img-1.png">
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
                <div class="tvd-team-grid-slide-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/tvd-team-grid-slide-item-img-1.png');">
                  <img src="<?php echo THEME_URI; ?>/assets/images/tvd-team-grid-slide-item-img-1.png">
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

<?php get_footer(); ?>