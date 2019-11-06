<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage PrimaSolv
 * @since 1.0.0
 */

get_header();
?>

	<!-- Breadcrumbs -->
<div class="b-crumbs-wrap">
        <div class="container b-crumbs">
            <ul>
                <li>
                    <a href="index.html">PrimaSolv</a>
                </li>
                <li>
                    <span><?php the_title(); ?></span>
                </li>
            </ul>
        </div>
    </div>
<?php
get_footer();
