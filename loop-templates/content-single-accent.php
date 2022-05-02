<?php
/**
 * Single accent post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<div class="row">

	<header class="entry-header">

	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="col-md-4">
		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	</div>

	<div class="col-md-8">
		<div class="entry-content">

		<?php
		the_content();
		// understrap_link_pages();
		?>

		</div><!-- .entry-content -->
	</div>

</div>

</article><!-- #post-## -->
