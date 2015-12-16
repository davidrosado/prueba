<?php get_header(); ?>

<div class="container">
	<div id="content" class="row">

		<div id="main" class="col-sm-8 col-xs-12 espaciado-interna" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<?php simple_boostrap_display_post(false); ?>
			
			<?php comments_template('',true); ?>
			
			<?php if (get_next_post() || get_previous_post()) { ?>
			<nav class="block">
				<ul class="pager pager-unspaced">
					<li class="previous"><?php previous_post_link('%link', "&laquo; " . __( 'Previous Post', "simple-bootstrap")); ?></li>
					<li class="next"><?php next_post_link('%link', __( 'Next Post', "simple-bootstrap") . " &raquo;"); ?></li>
				</ul>
			</nav>
			<?php } ?>
			
			<?php endwhile; ?>			
			
			<?php else : ?>
			
			<article id="post-not-found" class="block">
			    <p><?php _e("No hay posts.", "simple-bootstrap"); ?></p>
			</article>
			
			<?php endif; ?>

		</div>

		<div id="sidebar-blog" class="col-sm-4 col-xs-12" role="secundary">
			<?php dynamic_sidebar('sidebar-blog'); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>