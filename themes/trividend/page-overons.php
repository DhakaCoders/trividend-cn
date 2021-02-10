<?php 
/*
  Template Name: Overons
*/
get_header(); 
$thisID = get_the_ID();
?>

<section class="page-banner-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tvd-nieuws-grd-entry-hdr show-sm">
          <h1 class="tvd-nieuws-entry-hdr-title">Over Ons</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="overons-lft-img-rt-dsc-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="lft-img-rt-dsc-mdul-wrp">
          <div class="lft-img-rt-dsc-mdul-img inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/lft-img-rt-dsc-mdul-img-1.png);">
            <img src="<?php echo THEME_URI; ?>/assets/images/lft-img-rt-dsc-mdul-img-1.png">
          </div>
          <div class="lft-img-rt-dsc-mdul-dsc">
            <h1 class="fl-h1 rgt-mdul-dsc-title hide-sm">Over Ons</h1>
            <h2 class="fl-h2 rgt-mdul-dsc-title-1">Lorem ipsum dolor sit amet, <br> consectetur elit. </h2>
            <div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna feugiat mattis <br> iaculis magna tincidunt tortor. Magna fermentum hendrerit mi quam quis orci neque. Diam quis senectus aenean id donec. </p>
              <ul>
                <li>Nibh sed tincidunt tellus feugiat. </li>
                <li>Faucibus eu massa praesent non sed id amet.</li>
                <li>Nunc faucibus ante vel turpis aliquam.</li>
              </ul>
              <a href="#">Button</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="overons-lft-dsc-rt-img-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="lft-img-rt-dsc-mdul-wrp">
          <div class="lft-dsc-rt-img-mdul-dsc">
            <h3 class="fl-h3 lft-mdul-dsc-title-1">Lorem ipsum dolor sit amet, consectetur elit. </h3>
            <p>Diam aenean in cursus sollicitudin. Accumsan pharetra lectus ut purus nec quam massa non. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Penatibus nam vulputate amet facilisis in adipiscing. Ut faucibus netus ipsum in. Vitae, sed dui enim, malesuada. Semper quis rhoncus augue tincidunt consequat pulvinar commodo pellentesque blandit. </p>
            <p>Nec viverra nibh vehicula consectetur. Iaculis rutrum feugiat pulvinar sociis a feugiat enim. Turpis scelerisque quis faucibus curabitur varius nulla. Semper massa dictum iaculis id sem euismod leo sed scelerisque. Ut imperdiet eu ut amet, velit. </p>
          </div>
          <div class="lft-dsc-rt-img-mdul-img inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/lft-dsc-rt-img-mdul-img-2.png);">
            <img src="<?php echo THEME_URI; ?>/assets/images/lft-dsc-rt-img-mdul-img-2.png">
          </div>
          <div class="rt-dsc-dsc-img-mdul-dsc-sm show-sm">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Penatibus nam vulputate amet facilisis in adipiscing. Ut faucibus netus ipsum in. Vitae, sed dui enim, malesuada. Semper quis rhoncus augue tincidunt consequat pulvinar commodo pellentesque blandit. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="overons-tvd-fin-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="overons-tvd-fin-wrp">
          <div class="tvd-fin-inr">
            <i>
              <img src="<?php echo THEME_URI; ?>/assets/images/tvd-fin-img-01.svg">
            </i>
            <h2 class="fl-h2 tvd-fin-title">Financiering</h2>
            <p>Egestas pellentesque urna mattis pellentesque et commodo rutrum. Risus placerat tempor dolor<br> sagittis porttitor consectetur pulvinar accumsan.</p>
            <a href="#">Financiering</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="overons-team-sec-wrp">
<?php get_template_part('templates/team'); ?>
<div>


<?php get_footer(); ?>