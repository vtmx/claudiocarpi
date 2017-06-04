<?php get_template_part('header'); ?>
<?php get_template_part('nav'); ?>

<?php
// Works Front
$ids = get_field('works-front', false, false);

// WP_Query arguments

$args = array(
	'post_type' 	 => 'work',
	'posts_per_page' => 21,
	'post__in'       => $ids,
	'post_status'    => 'any',
	'orderby'        => 'post__in'
);

// The Query
$query = new WP_Query( $args );
?>

<?php include_once('page-works-loop.php'); ?>

<?php get_template_part('footer'); ?>