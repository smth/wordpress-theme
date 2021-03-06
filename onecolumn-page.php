<?php
/*
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 *
 * @package BuddyPress
 * @subpackage BP_Default
 * @since BuddyPress (1.5)
 */

get_header(); ?>
<div class="row">
	<div id="content" class="span12">
		<div class="padder one-column">

		<div class="page" id="blog-page" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h1 class="pagetitle"><?php the_title(); ?></h1>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry">

						<?php the_content( __( '<p class="serif">Read the rest of this page &rarr;</p>', 'buddypress' ) ); ?>

						<?php wp_link_pages( array( 'before' => '<div class="page-link"><p>' . __( 'Pages: ', 'buddypress' ), 'after' => '</p></div>', 'next_or_number' => 'number' ) ); ?>
						<?php edit_post_link( __( 'Edit this page.', 'buddypress' ), '<p class="edit-link">', '</p>'); ?>

					</div>

				</div>

			<?php comments_template(); ?>

			<?php endwhile; endif; ?>

		</div><!-- .page -->

		</div><!-- .padder -->
	</div><!-- #content -->
</div>
<?php get_footer(); ?>
