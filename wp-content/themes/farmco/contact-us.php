<?php get_header(); ?>

<?php 
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage Farmco
 * @since Farmco 1.0
 */
?>
<?php $background = get_field('img'); ?>

<div class="fluid-container">
	<img src="<?php echo $background['url'] ?>" id="bg" alt="">
	<div id="contact-us">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div class="contact-column">
						<h3>Sales</h3>
						<h4>Paul</h4>
						<a href="mailto:paul@farmcosales.com">paul@farmcosales.com</a>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="contact-column">
						<h3>Parts</h3>
						<h4>Andrew</h4>
						<a href="mailto:andrew@farmcosales.com">andrew@farmcosales.com</a>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="contact-column">
						<h3>Service</h3>
						<h4>Tim</h4>
						<a href="mailto:tim@farmcosales.com">tim@farmcosales.com</a>
					</div>
				</div>	
			</div>
			<div class="row">
				<div class="col-sm-8 col-xs-12">
					<div class="map">
						<iframe class="map-style" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=farmco+sales+kelowna+bc&amp;aq=&amp;sll=49.891235,-97.15369&amp;sspn=36.315092,45.263672&amp;ie=UTF8&amp;hq=farmco+sales&amp;hnear=Kelowna,+Central+Okanagan+Regional+District,+British+Columbia&amp;ll=49.918011,-119.402611&amp;spn=0.06613,0.205479&amp;t=m&amp;output=embed"></iframe>
					</div>
				</div>

				<div class="col-sm-4 col-xs-12">
					<div class="contact-column">
						<ul>
							<li><h3>Address:</h3></li>
							<li><h4>Farmco Sales Ltd.</h4></li>
							<li><h4>150 Campion St</h4></li>
							<li><h4>Suite 201</h4></li>
							<li><h4>Kelowna, BC V1X 7S8</h4></li>
						</ul>
						<ul>
							<li><h3>Phone:</h3></li>
							<li><h4>877.461.7933</h4></li>
							<li><h4>250.765.8266</h4></li>
						</ul>
						<ul>
							<li><h3>Fax:</h3></li>
							<li><h4>250.765.3179</h4></li>
						</ul>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>

<?php get_footer(); ?>
