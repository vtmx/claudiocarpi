<?php get_template_part('header'); ?>
<?php get_template_part('nav'); ?>

<?php
// Get number of works display in page
$works_count = get_field('works-count');

// WP_Query arguments

$args = array(
	'post_type' 	 => 'work',
	'posts_per_page' => $works_count,
	'orderby'        => 'rand'
);

// The Query
$query = new WP_Query( $args );
?>

<?php include_once('page-works-loop.php'); ?>

<?php get_template_part('footer'); ?>