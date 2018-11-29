<?php

/* Template Name: Paintings Gallery */

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>> 
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title(); ?></title>
				
		<?php wp_head(); ?>
		
	</head>
	<body>
		<section class="hero">
			<div class="hero-overlay">
				<div class="container flex-container">
					<div class="hero-logo-title">
						<div class="hero-logo">
							<a href="<?php home_url(); ?>">
								<?php
									$image = get_field('header_logo', 'option');
									
									echo '<img class="logo" src="'.$image['sizes']['logo'].'" alt="'.get_bloginfo('name').'">';	
									
								?>
							</a>
						</div>
						<div class="logo-text">
							<h1 class="hero-title">
								<?php
									$title = get_field('header_title', 'option');
									
									echo $title;				
								?>							
							</h1>		
						</div>
					</div>
				</div>
				<div class="hero-arrow">
					<i class="fas fa-angle-double-down"></i>
				</div>
			</div>
		</section>
		<header class="main-header">
				<nav class="main-nav">
					<div class="burger">
						<i class="fas fa-bars"></i>
					</div>
					<div class="cross">
						<i class="fas fa-times"></i>
					</div>
					<?php
				
					$args = [
						'menu_class' => 'nav flex-container main',
						'container' => false,
						'theme_location' => 'paintings-gallery-menu'
					];
				
					wp_nav_menu($args);
					
					?>
	
        			<label for="css-toggle-menu" id="css-toggle-menu"></label> 
				</nav>
		</header>
		
		<section class="paintings_gallery flex_container">
			<h2>MY PAINTINGS</h2>

				<?php 

				$images = get_field('paintings_gallery');

				if( $images ): ?>
					<div class="paintings-container">
						<?php foreach( $images as $image ): ?>
							<div class="painting">
								<a href="<?php echo $image['url']; ?>">
									 <img src="<?php echo $image['sizes']['logo']; ?>" alt="<?php echo $image['alt']; ?>" />
								</a>
								<h4><?php echo $image['caption']; ?></h4>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
		<section>

		

		
		
		
<?php get_footer(); ?>
