<?php 
	$args = array( 'post_type' => 'product');
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();?>
	  <?php the_title(); ?>
	  <div class="entry-content">
	  <?php the_content(); ?>
	  </div>
<?php 
	endwhile;
?>