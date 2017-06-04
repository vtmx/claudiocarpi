<div class="container">
	<main class="main works masonry animated fade-in-up" role="main">
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>

			<?php // Get thumb images and video ?>
			<?php $imageThumb = get_field('works-image-thumb'); ?>
			<?php $videoThumb = get_field('works-video-thumb'); ?>

			<?php // Get orientation of image ?>
			<?php $orientation = get_field('works-orientation', $imageThumb[id]); ?>


			<?php // If thumb image ?>
			<?php if ( $imageThumb ): ?>

				<?php // If vertical ?>
				<?php if ( $orientation ): ?>
					<a class="work image horizontal <?php echo $post->post_name; ?>" href="<?php the_permalink(); ?>">
						<img src="<?php echo $imageThumb['sizes']['page-works-horizontal']; ?>" alt="<?php the_title(); ?>">
						<h2><?php the_title(); ?></h2>
					</a>
				<?php // If horizontal ?>
				<?php else: ?>
					<a class="work image vertical <?php echo $post->post_name; ?>" href="<?php the_permalink(); ?>">
						<img src="<?php echo $imageThumb['sizes']['page-works-vertical']; ?>" alt="<?php the_title(); ?>">
						<h2><?php the_title(); ?></h2>
					</a>
				<?php endif; ?>

			<?php // If thumb video ?>
			<?php elseif ( !$imageThumb && $videoThumb ): ?>

				<a class="work video <?php echo $post->post_name; ?> horizontal" href="<?php the_permalink(); ?>" data-html="#<?php echo $post->post_name; ?> horizontal">
					<video src="<?php echo $videoThumb; ?>" autoplay loop muted></video>
					<h2><?php the_title(); ?></h2>
				</a>

			<?php endif; ?>
		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>
	</main>
</div><!-- .container -->
