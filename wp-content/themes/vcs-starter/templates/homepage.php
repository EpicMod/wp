<?php

/* Template Name: Homepage */

get_header();

?>

<!-- Start Point -->

<section class="homepage flex-container" id="id_homepage">
	<div>
		<?php the_field('content'); ?>
	</div>
</section>

<?php
	get_template_part('partials/services');
?>

<?php get_footer(); ?>
