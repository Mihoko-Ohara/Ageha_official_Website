<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<div class="blog-container">
		<div class="blog-main">
		<h1>Blog</h1>

		<?php while(have_posts()): the_post(); ?>
			<div class="post-preview">
				<a href="<?php the_permalink(); ?>">
					<h2 class="post-title">
						<?php the_title(); ?>
					</h2>
				</a>
				<p class="post-date">
					<?php the_time("Y年n月j日"); ?>
				</p>
			</div>
		<?php endwhile; ?>
		</div>
</div>

<?php
get_footer();