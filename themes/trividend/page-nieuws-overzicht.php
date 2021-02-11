<?php 
/*Template Name: Nieuws Overview*/
get_header(); 
$filter_ids = get_option( 'filter_ids' );
if ( ($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST['category']) ) {
    update_option( 'filter_ids', $_POST['category'] );
    $filter_ids = get_option( 'filter_ids' );
}
$queryIDs = ( !empty($filter_ids) )? $filter_ids: '';
?>
<section class="tvd-nieuws-grd-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tvd-nieuws-grd-sec-inr">
          <div class="tvd-nieuws-grd-entry-hdr">
            <h1 class="tvd-nieuws-entry-hdr-title fl-h1"><?php echo get_the_title(); ?></h1>
            <?php 
              $terms = get_terms( array(
                'taxonomy' => 'category',
                'hide_empty' => false,
                'parent' => 0
              ) );
            ?>
            <?php if( $terms ): ?>
            <form action="" method="post">
            <ul class="reset-list">
              <?php
                $i = 1;
                foreach( $terms as $term ):
                if( $term->slug != 'uncategorized' ){
                if( empty($filter_ids) && ($i == 1)){
                  $queryIDs = $term->term_id;
                  update_option( 'filter_ids', array($term->term_id) );
                  $checked = 'checked';
                }else{
                  if( in_array($term->term_id, $filter_ids) ){
                    $checked = 'checked';
                  }else{
                    $checked = '';
                  }
                  
                }
              ?>
              <li>
                <label for="cat-<?php echo $i; ?>"><input type="checkbox" name="category[]" value="<?php echo $term->term_id; ?>" <?php echo $checked; ?> onclick="this.form.submit();" id="cat-<?php echo $i; ?>"><?php echo $term->name; ?></label>
              </li>
              <?php } ?>
              <?php $i++; endforeach; ?>
            </ul>
            </form>
            <?php endif; ?>
          </div>
          <div class="tvd-nieuws-grds-item">
      		<?php 
      			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      			$nieuwsQuery = new WP_Query(array(
      				'post_type' => 'post',
      				'posts_per_page'=> 9,
      				'orderby' => 'date',
      				'order' => 'ASC',
      				'paged' => $paged,
      				'tax_query' => array(
      					array(
      					'taxonomy' => 'category',
      					'field'    => 'term_id',
      					'terms'    => $queryIDs,
      					)
      				)
      			));
      			if( $nieuwsQuery->have_posts() ): 
      		?>
            <ul class="reset-list clearfix">
            <?php 
                while($nieuwsQuery->have_posts()): $nieuwsQuery->the_post();
                $gridurl = cbv_get_image_src( get_post_thumbnail_id(get_the_ID()), 'dftnieuws' );
                if( empty($gridurl) ){
                  $gridurl = THEME_URI.'/assets/images/tvd-nieuws-grd-img-02.jpg';
                }
            ?> 
              <li>
               <div class="tvd-nieuws-grd-item">
                 <div class="tvd-nieuws-grd-item-img-ctlr">
                  <a class="overlay-link" href="<?php the_permalink( ); ?>"></a>
                   <div class="tvd-nieuws-grd-item-img inline-bg" style="background: url('<?php echo $gridurl; ?>');"></div>
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
                   <h3 class="tvd-ngid-title fl-h3 mHc1">
                   	<a href="<?php the_permalink( ); ?>"><?php the_title(); ?></a></h3>
                   <div class="tvd-nieuws-grd-item-con mHc2">
                     <?php the_excerpt(); ?>
                   </div>
                   <a href="<?php the_permalink( ); ?>">Lees meer</a>
                 </div>
               </div>
              </li>
          	<?php endwhile; ?>
            </ul>
          </div>
          <?php else: ?>
            <div class="no-results">Geen resultaten.</div>
		      <?php endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
    <?php if( $nieuwsQuery->max_num_pages > 1 ): ?>
    <div class="row">
      <div class="col-md-12">
        <div class="fl-pagination-ctlr">
        <?php 
          $big = 999999999; // need an unlikely integer
          echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $nieuwsQuery->max_num_pages,
            'type'  => 'list',
            'show_all' => false,
            'prev_text' => '<span>Vorige</span><i><svg class="fl-pgnt-prev-svg" width="16" height="12" viewBox="0 0 16 12" fill="#4B4B4B"><use xlink:href="#fl-pgnt-prev-svg"></use></svg></i>',
            'next_text' => '<span>Volgende</span><i><svg class="fl-pgnt-next" width="16" height="12" viewBox="0 0 16 12" fill="#4B4B4B"><use xlink:href="#fl-pgnt-next"></use></svg></i>',
            'type'      => 'list',
            'end_size'  => 3,
            'mid_size'  => 3,
          ) ); 
        ?>
        </div>
      </div>
    </div>
	<?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>