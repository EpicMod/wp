<section class="gallery_page flex_container" id="id_gallery_page">
	<h2><?php echo get_field('featured_projects_page_title'); ?> </h2>
	<div class="gallery">
		<div class="owl-carousel owl-theme">
			<?php 
			$images = get_field('gallery_1');

			if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<div>
							<img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo $image['alt']; ?>" />
							</a>
							<p><?php echo $image['caption']; ?></p>
						</div>
					<?php endforeach; ?>
			<?php endif; ?>
		</div>
		<div class="owl-carousel owl-theme">
			<?php 
			$images = get_field('gallery_2');

			if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<div>
							<img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo $image['alt']; ?>" />
							</a>
							<p><?php echo $image['caption']; ?></p>
						</div>
					<?php endforeach; ?>
			<?php endif; ?>
		</div>
		<div><h3><a class="nostyle" href="">WATCH ALL PHOTOS</a></h3></div>
	</div>
</section>


