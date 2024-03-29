<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage PrimaSolv
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="error-404 not-found">
				<header class="page-header">
					<h1 align="center" ><?php _e( 'Oops! That page can&rsquo;t be found.', 'primasolv' ); ?></h1>
				</header><!-- .page-header -->

			
			</div><!-- .error-404 -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
