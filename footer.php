        <footer class="footer" role="contentinfo">
            Developer & Designer by <a href="http://vitormelo.com.br">Vitor Melo</a>
        </footer>

        <!-- Scripts -->
		<script src="<?php bloginfo( 'template_url' ); ?>/dist/js/script.js"></script>

		<?php if ( is_front_page() ): ?>

			<?php // If slider and not video ?>
			<?php if( get_field('home-slider') && !get_field('home-video') ): ?>			

				<script>
					<?php $images = get_field('home-slider'); ?>

					// Vegas
					$('body').vegas({
						slides: [
							<?php foreach( $images as $image ): ?>
								{ src: "<?php echo $image['url']; ?>" },
							<?php endforeach; ?>
						],

						shuffle: true,
						timer: false,

						<?php if ( get_field('home-slider-delay') ): ?>
							delay: <?php the_field('home-slider-delay') ?>,
						<?php endif; ?>

						<?php if ( get_field('home-slider-transition') ): ?>
							transitionDuration: <?php the_field('home-slider-transition') ?>,
						<?php endif; ?>
					});
				</script>

			<?php endif; ?>

	<?php endif; ?>
    </body>
</html>
