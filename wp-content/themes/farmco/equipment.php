<?php get_header(); ?>

<?php 
/**
 * Template Name: Equipment
 *
 * @package WordPress
 * @subpackage Farmco
 * @since Farmco 1.0
 */

$args = array( 'post_type' => 'product_post');
$loop = new WP_Query( $args );
$background = get_field('img');

?>

<div class="fluid-container">
	<img src="<?php echo $background['url'] ?>" id="bg" alt="">
	<div id="equipment" >
		<?php while ( $loop->have_posts() ) : $loop->the_post();?>
			<div class="container">
				<div class="row">
					<a href="<?php the_permalink() ?>" >	
						<div class="post-container">
							<div class="col-sm-offset-2 col-sm-3">
							<?php $post_meta = (get_fields($post));?>
								<div class="entry-content">
									<h3>Model - <?php echo $post_meta['model'] ?></h3>
									<h2>Price - $<?php echo $post_meta['price'] ?></h2>
									<h2>Year - <?php echo $post_meta['year'] ?></h2>
									<p><?php the_content(); ?></p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="entry-content">
									<img src="<?php echo $post_meta['main_image']['url'] ; ?>" alt="">
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>			
		<?php endwhile; ?>
	</div>
</div>



<?php get_footer(); ?>
