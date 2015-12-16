<?php
/*
Template Name: Home
*/

get_header(); ?>

<?php putRevSlider( 'inicio' ); ?>

	<?php /* The loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div id="servicios-home">
			<div class="container">
				<div class="row">
						<ul class="listado-servicios">
						 	<?php $catquery = new WP_Query( 'cat=1&posts_per_page=4&order=asc' );
								while($catquery->have_posts()) : $catquery->the_post(); ?>
									<li id="post-<?php the_ID(); ?>" class="item-servicio col-sm-6">
										<span class="col-sm-6">
											<?php the_post_thumbnail('large'); ?> 
										</span>
										<span class="col-sm-6 texto-servicio">
											<h4><?php the_title(); ?></h4>
											<?php the_content(); ?>
										</span>

									</li>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>									
						</ul>
				</div>
			</div> <!-- #container -->
		</div> <!-- #servicios home -->

	<?php endwhile; ?>

<?php get_footer(); ?>