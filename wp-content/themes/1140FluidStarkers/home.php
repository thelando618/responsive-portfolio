<?php
/**
 * Template Name: Home Page Tempalte
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>	
<div class="row home-banner">
	<div class="eightcol home-banner-left">
		<?php the_content(); ?>
	</div>
	<div class="fourcol home-banner-right last">
		<p>Get In Touch</p>
	</div>
</div>



<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>