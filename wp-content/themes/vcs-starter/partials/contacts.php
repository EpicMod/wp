<section class="contact_page flex_container" id="id_contact_page">
	<h2>CONTACT US</h2>
	<div class="contact_form_container flex-container">
		<div class="contact_form">
			<div class="contact">
			<?php 
				echo do_shortcode(get_field('contact_form_shortcode'));						
			?>
			</div>
		</div>
		<div class="contact_details">
			<?php the_field('contact_details'); ?>
			<p class="link_paintings">
			<?php
			
				if(get_field('cp_link')):
					$link = get_field('link_url');
					$target = "_blank";
				else:
					$link = get_field('link_page');
					$target = "";
				endif;						
			?>
				<a class="nostyle" href="<?php echo $link; ?>" target="<?php echo $target; ?>"><?php echo get_field('cp_link_text'); ?></a>
			</p>
		</div>
	</div>
</section>