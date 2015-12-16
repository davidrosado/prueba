<?php
//Template Name: Blog
?>

<?php get_header(); ?>

<div class="banner">
	<?php putRevSlider( 'concepto360' ); ?>
</div>

<div class="container">
	<div id="content" class="row">

		<div id="main" class="col-sm-8 col-xs-12 espaciado-interna" role="main">

			<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>
			
	             <ul class="listado-pagina-blog">
	                <?php $catquery = new WP_Query( 'cat=5&posts_per_page=2&order=asc' );
	                    while($catquery->have_posts()) : $catquery->the_post(); ?>
	                        <li id="post-<?php the_ID(); ?>" class="post-blog">
		                        <span class="col-sm-12 col-xs-12 destacada">
		                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
		                        </span>                                             
		                        <span class="col-sm-12 col-xs-12 detalles">    
		                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		                            <?php simple_bootstrap_display_post_meta() ?>
		                            <?php echo excerpt(100); ?>
		                            <p><a href="<?php the_permalink(); ?>">Leer más</a></p>
		                        </span>
	                        </li>
	                <?php endwhile; ?>

						<?php simple_boostrap_page_navi(); ?>	

	                <?php wp_reset_query(); ?>                                  
	            </ul>
			
			<?php endwhile; ?>	
			

			
			<?php else : ?>
			
			<article id="post-not-found" class="block">
			    <p><?php _e("No existen post.", "simple-bootstrap"); ?></p>
			</article>
			
			<?php endif; ?>

		</div>

		<div id="sidebar-blog" class="col-sm-4 col-xs-12" role="secundary">
			<?php dynamic_sidebar('sidebar-blog'); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>