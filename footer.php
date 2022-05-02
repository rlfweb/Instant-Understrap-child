<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

<!-- RLF adding extra navbar with search (needs hooking up to wordpress search)-->
<nav class="navbar navbar-expand navbar-dark bg-secondary">
	<div class="container">
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'd-block ml-auto',
				'container_id'    => '',
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>

	<form class="d-flex my-2 my-lg-0">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary btn-sm my-2 my-sm-0" type="submit">Search</button>
    </form>

	</div>
</nav>

</div><!-- #page we need this extra closing tag here -->

<!-- a pop up modal about Cookies that appears 3 secs after homepage loads -->
<?php if ( is_front_page() ) : ?>
<div id="ctaModal" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cookies</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>We use cookies to offer you a better browsing experience, analyze site traffic and personalize content. Read about how we use cookies and how you can control them in our Cookie Policy. If you continue to use this site, you consent to our use of cookies.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Got it</button>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>


<?php wp_footer(); ?>

</body>

</html>

