<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<!--
	<a href="?php the_permalink(); ?>">
		<h2 class="blog-post-title">?php the_title(); ?></h2>
	</a>
	-->

	<?php get_template_part( 'content', get_post_format() ); ?>

<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
