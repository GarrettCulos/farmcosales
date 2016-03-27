<?php get_header(); ?>

<?php 
/**
 * Template Name: Parts
 *
 * @package WordPress
 * @subpackage Farmco
 * @since Farmco 1.0
 */
?>
<?php $background = get_field('img'); ?>

<div class="fluid-container">
	<img src="<?php echo $background['url'] ?>" id="bg" alt="">
	<div id="parts">
		<div class="container">
			<div class="row">
				<iframe src="http://partstore.agriculture.newholland.com/us/parts-search.html#epc::home" style="width:100%; height:800px;"></iframe>
			</div>	
		</div>
	</div>
</div>

<?php get_footer(); ?>
