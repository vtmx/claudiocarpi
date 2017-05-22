<?php get_template_part('header'); ?>
<?php get_template_part('nav'); ?>

<?php
// WP_Query arguments
$args = array(
	'post_type'      => 'works',
	'posts_per_page' => 18,
	'orderby'        => 'rand'
);

// The Query
$query = new WP_Query( $args );
?>

<?php include_once('page-works-loop.php'); ?>

<?php get_template_part('footer'); ?>
