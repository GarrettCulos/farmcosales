<?php 
/*
	nav
*/ 

$home_permalink 		= get_permalink( get_page_by_path('Home') );
$parts_permalink 		= get_permalink( get_page_by_path('Parts') );
$equipment_permalink 	= get_permalink( get_page_by_path('Equipment') );
$contact_permalink 		= get_permalink( get_page_by_path('Contact') );

?>

<div class="fluid-container">
	<div class="navbar-header">
		<nav class="main-nav navbar  navbar-fixed-top">
			<div class="container">
			    <div class="navbar-header">
					<!-- <h2 class="visible-xs">Farmco</h2> -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
			  	<div class="nav-container">
				    <div class="collapse navbar-collapse" id="bs-navbar-collapse">
					 	<ul class="nav navbar-nav hidden-xs">
							<li  role="presentation" class=" "><a href="<?php echo $home_permalink  ?>">Farmco</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li role="presentation" class=" visible-xs"><a href="<?php echo $home_permalink ?>">Home</a></li>
							<li role="presentation" ><a href="<?php echo $parts_permalink ?>">Parts</a></li>
							<li role="presentation" ><a href="<?php echo $equipment_permalink ?>">Equipment</a></li>
							<li role="presentation" ><a href="<?php echo $contact_permalink ?>">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>
</div>