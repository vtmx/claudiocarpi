<?php get_template_part('header'); ?>

<main class="main single-works">
	<h2 class="title-single animated fade-in"><?php the_title(); ?></h2>

	<div class="masonry-single animated fade-in-up">
		<?php if ( get_field('works-images') ): ?>

			<?php // Get works images ?>
			<?php $images = get_field('works-images'); ?>

			<?php foreach ($images as $image): ?>

				<?php // Get work size ?>
				<?php $imageSize = get_field('work-size', $image[id]); ?>
				<?php $size = $image['url']; ?>

				<?php if ( $imageSize == 4 ): ?>
					<?php $col = '4'; ?>
				<?php elseif ( $imageSize == 3 ): ?>
					<?php $col = '3'; ?>
				<?php elseif ( $imageSize == 2 ): ?>
					<?php $col = '2'; ?>
				<?php else: ?>
					<?php $col = '1'; ?>
				<?php endif; ?>

				<div class="work w<?php echo $col; ?>">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
				</div>

			<?php endforeach; ?>

		<?php elseif (get_field('works-video') ): ?>

			<?php $video = get_field('works-video'); ?>
			<div class="work">
				<video src="<?php echo $video; ?>" autoplay controls></video>
			</div>

		<?php endif; ?>
	</div>


	<div class="social-links animated fade-in-up">
		<h3 class="title">Share to:</h3>
		<a class="link facebook" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="Share to Facebook" target="_blank"></a>
		<a class="link twitter" href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>" title="Share to Twitter" target="_blank"></a>
		<a class="link tumblr" href="http://www.tumblr.com/share/link?url=<?php the_permalink(); ?>" title="Share to Thumblr" target="_blank"></a>
		<a class="link google" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="Share to Google+" target="_blank"></a>
		<a class="link pinterest" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>" title="Share to Pinterest" target="_blank"></a>
		<a class="link mail" href="mailto:claudio@claudiocarpi.com" title="Share to Mail" target="_blank"></a>
	</div>

	<a href="<?php echo esc_url( home_url( ) ); ?>/works" class="icon-link icon-close animated fade-in">
		<svg class="icon"><use xlink:href="#close"></use></svg>
	</a>

	<a href="#" class="icon-link icon-scrolltop animated fade-in">
		<svg class="icon"><use xlink:href="#arrow-up"></use></svg>
	</a>
</main>

<?php get_template_part('footer'); ?>
