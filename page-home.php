<?php get_template_part('header'); ?>

	<?php if( get_field('home-slider') && !get_field('home-video') ): ?>
		
		<h1 class="home-logo">
			<a href="<?php echo esc_url( home_url( ) ); ?>/works"  title="Enter site">
				<?php get_template_part('logo'); ?>
			</a>
		</h1>
		
	<?php elseif ( get_field('home-video') && !get_field('home-slider') ): ?>
		
		 <h1 class="home-logo">
			<a href="<?php echo esc_url( home_url( ) ); ?>/works"  title="Enter site"></a>
		</h1>
		
	<?php endif; ?>

	<div class="home-cover">
		<?php // If video and not slide ?>
		<?php if ( get_field('home-video') && !get_field('home-slider') ): ?>

			 <?php if( get_field('home-video-loop') == 'yes' ): ?>
				<video preload="auto" autoplay loop src="<?php the_field('home-video'); ?>"></video>
			<?php else: ?>
				<video preload="auto" autoplay src="<?php the_field('home-video'); ?>"></video>
			<?php endif; ?>

		<?php endif; ?>
	</div>

<?php get_template_part('footer'); ?>
