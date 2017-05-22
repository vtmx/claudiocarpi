<?php get_template_part('header'); ?>
<?php get_template_part('nav'); ?>

<div class="container">
    <main id="content" class="main bio animated fade-in-up" role="main">
        <?php if ( get_field('bio-description') ): ?>

            <?php if ( get_field('bio-description') ): ?>
                <div class="description">
                    <?php the_field('bio-description'); ?>
                </div>
            <?php endif; ?>

            <?php if( have_rows('bio-clients') ): ?>
                <div class="clients">
                    <h2>Clients</h2>

                    <?php  while ( have_rows('bio-clients') ) : the_row(); ?>
                        <div class="client">
                            <h3><?php the_sub_field('bio-client-category'); ?></h3>

                            <?php if( have_rows('bio-client-list') ): ?>
                                <ul>
                                    <?php  while ( have_rows('bio-client-list') ) : the_row(); ?>
                                        <li><?php the_sub_field('bio-client-name'); ?></li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        <?php else: ?>
            <h2>…COMING SOON…</h2>
        <?php endif; ?>
    </main>
</div> <!-- .container-->

<?php get_template_part('script'); ?>

<?php get_template_part('footer'); ?>
