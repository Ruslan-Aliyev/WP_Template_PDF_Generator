<?php get_header(); ?>

<?php  if (have_posts()): while(have_posts()): the_post(); ?>

	<h1><?php the_title() ?></h1>
	<?php the_content() ;?>

	<?php the_post() ;?>

<?php endwhile; ?>
<?php endif;?>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>