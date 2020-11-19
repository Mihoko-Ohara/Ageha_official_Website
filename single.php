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

<?php if(have_posts()): the_post(); ?>
<article <?php post_class( 'article-content' ); ?>>
  <div class="article-info">
    <!--投稿日を取得-->
    <span class="article-date">
      <i class="far fa-clock"></i>
      <time
      datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
      <?php echo get_the_date(); ?>
      </time>
    </span>
  </div>
  <!--タイトル-->
  <h1><?php the_title(); ?></h1>
  <div class="article-box">
	<!--アイキャッチ取得-->
	<div class="article-img">
		<?php if( has_post_thumbnail() ): ?>
		<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</div>
	<!--本文取得-->
	<div class="article-text">
	<?php the_content(); ?>
	</div>
  </div>
</article>
<?php endif; ?>



<?php
get_footer();
