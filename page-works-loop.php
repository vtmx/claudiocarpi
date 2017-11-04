<div class="container works-container">

	<main class="main works masonry animated fade-in-up" role="main" data-masonry-options='{ "columnWidth": ".grid-sizer", "itemSelector": ".item", "gutter": 20 }'>

		<?php while ( $query->have_posts() ) : $query->the_post(); ?>

			<?php // Get thumb images and video ?>
			<?php $imageThumb = get_field('works-image-thumb'); ?>
			<?php $videoThumb = get_field('works-video-thumb'); ?>

			<?php // Get work size ?>
			<?php $imageSize = get_field('works-image-size'); ?>

			<?php // If thumb image ?>
			<?php if ( $imageThumb ): ?>

				<?php // Fullsize ?>
				<?php $size = $imageThumb['url']; ?>

				<?php if ( $imageSize == 3 ): ?>
					<?php $col = '3'; ?>
					<?php //$size = $imageThumb['sizes']['work-gallery-3']; ?>
				<?php elseif ( $imageSize == 2 ): ?>
					<?php $col = '2'; ?>
					<?php //$size = $imageThumb['sizes']['work-gallery-2']; ?>
				<?php else: ?>
					<?php $col = '1'; ?>
					<?php //$size = $imageThumb['sizes']['work-gallery-1']; ?>
				<?php endif; ?>

					<a class="work image w<?php echo $col; ?> <?php echo $post->post_name; ?>" href="<?php the_permalink(); ?>">
						<img src="<?php echo $size; ?>" alt="<?php the_title(); ?>">
						<h2><?php the_title(); ?></h2>
					</a>

			<?php // If thumb video ?>
			<?php elseif ( !$imageThumb && $videoThumb ): ?>

				<a class="work video w2 <?php echo $post->post_name; ?> horizontal" href="<?php the_permalink(); ?>" data-html="#<?php echo $post->post_name; ?> horizontal">
					<video src="<?php echo $videoThumb; ?>" autoplay loop muted></video>
					<h2><?php the_title(); ?></h2>
				</a>

			<?php endif; ?>
		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>
	</main>
</div><!-- .container -->
