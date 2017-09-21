<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
show_admin_bar( true );
get_header(); ?>
<div class="container single-blog-post">
	<div class="row">
		<div class="col-12">
			<?php 
				the_title('<h1 class="post-title">', '</id>');
			?>
		</div>
		<div class="col-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				if(has_post_thumbnail()){
					the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive single-blog-image', 'style' => 'margin: 2rem 0;']);
				}
			?>
		</div>
		<div class="col-xs-12 col-md-8">
			<?php the_content();?>
			<p><?php the_tags();?></p>
			<?php
				endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
	</div>
</div>


<?php get_footer();?>
