<?php get_header(); ?>

<?php 
/**
 *
 * @package WordPress
 * @subpackage Farmco
 * @since Farmco 1.0
 */


$post_meta = (get_fields($post));
$equipment_permalink 	= get_permalink( get_page_by_path('Equipment') );

?>

<div class="fluid-container">
	<img src="<?php echo $background['url'] ?>" id="bg" alt="">
	<div id="single-equipment">
		<a href="<?php echo get_permalink( get_page_by_path('Equipment') );?>">
			<div class="post-container post-container-top">
				<div class="row">
					<div class="entry-content">
						<h3> << Back To Equipment</h3>
					</div>
				</div>	
			</div>
		</a>
		<div class="container">
				<div class="post-container">
					<div class="row">
						<div class="col-xs-12">
							<div class="entry-content">
								<h3>Model - <?php echo $post_meta['model'] ?></h3>
								<h2>Price - $<?php echo $post_meta['price'] ?></h2>
								<h2>Year - <?php echo $post_meta['year'] ?></h2>
								
								<p><?php echo get_the_content(); //print_r( get_post() )?></p>
							</div>
						</div>
					</div>
					<?php 
						$images = [ $post_meta['main_image'], 
									$post_meta['image_1'], 
									$post_meta['image_2'], 
									$post_meta['image_3'], 
									$post_meta['image_4'], 
									$post_meta['image_5']
						];
					?>
					<div class="row">
						<?php foreach($images as $image): ?>
							<?php if($image): ?>
								<div class="col-sm-4 col-xs-10 col-xs-offset-1 col-sm-offset-0">
									<div class="entry-content">
										<img src="<?php echo $image['url'] ?>" alt="">
									</div>
								</div>
							<?php endif;?>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>			
	</div>
</div>



<?php get_footer(); ?>
