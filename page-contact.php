<?php get_template_part('header'); ?>
<?php get_template_part('nav'); ?>

<div class="container">
	<main id="content" class="main contact animated fade-in-up" role="main">
		<?php if ( have_rows('contact') ): ?>

			<?php  while ( have_rows('contact') ) : the_row(); ?>
				<?php $contact_logo = get_sub_field('contact-logo'); ?>

				<div class="client">
					<a href="<?php the_sub_field('contact-link'); ?>" target="_blank">
						<img src="<?php echo $contact_logo['url'] ?>" alt="<?php echo $contact_logo['title'] ?>">
					</a>

					<?php the_sub_field('contact-description'); ?>
				</div>
			<?php endwhile; ?>

			<div class="social-links">
				<h3 class="title">Share to:</h3>
				<a class="link facebook" href="http://www.facebook.com/sharer/sharer.php?u=http://claudiocarpi.com" title="Share to Facebook" target="_blank"></a>
				<a class="link twitter" href="https://twitter.com/intent/tweet?text=http://claudiocarpi.com" title="Share to Twitter" target="_blank"></a>
				<a class="link tumblr" href="http://www.tumblr.com/share/link?url=http://claudiocarpi.com" title="Share to Thumblr" target="_blank"></a>
				<a class="link google" href="https://plus.google.com/share?url=http://claudiocarpi.com" title="Share to Google+" target="_blank"></a>
				<a class="link pinterest" href="http://pinterest.com/pin/create/button/?url=http://claudiocarpi.com" title="Share to Pinterest" target="_blank"></a>
				<a class="link mail" href="mailto:claudio@claudiocarpi.com" title="Share to Mail" target="_blank"></a>
			</div>
		<?php else: ?>
			<h2>…COMING SOON…</h2>
		<?php endif; ?>
	</main>
</div> <!-- .container-->

<?php get_template_part('script'); ?>
<?php get_template_part('footer'); ?>
