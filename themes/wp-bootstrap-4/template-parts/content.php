<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

?>

<article class="box-content flex-box <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
	<a href="#">
		<div class="box-img">
			<img class="w-100" src="img/thumb-1.jpg" alt="#">
			<span class="box-date">26 de Nov, 2019</span>
		</div>
		<h2><?php the_title(); ?></h2>
		<span class="btn-action btn-dark"><a href="<?php the_permalink(); ?>">Ver más</a></span>
	</a>
</article>