<?php get_header(); ?>

<div class="banner">
	<?php putRevSlider( 'concepto360' ); ?>
</div>

<div class="container">
	<div id="content" class="row">
		<div id="main" role="main">

			<div class="breadcrumbs">
				<p><a href="">Home </a> / <?php the_title(); ?></p>
			</div> <!-- .breadcrumbs -->

			<?php if (is_page(75) || $post->post_parent=="75") { ?>
				<div class="col-sm-3 sidebar-interna">
					<div class="widget-area">
					<h3>Concepto 360°</h3>
					<ul>
					  <?php global $id;
					  wp_list_pages("title_li=&child_of=75&show_date=modified&date_format=$date_format"); ?>
					</ul>
					</div><!-- .widget-area -->
				</div><!-- .sidebar-inner -->

			<?php } elseif (is_page(14) || $post->post_parent=="14") { ?>
				<div class="col-sm-3 sidebar-interna">
					<div class="widget-area">
					<ul>
					  <?php global $id;
					  wp_list_pages("title_li=&child_of=14&show_date=modified&date_format=$date_format"); ?>
					</ul>
					</div><!-- .widget-area -->
				</div><!-- .sidebar-inner -->

			<?php } elseif (is_page(16) || $post->post_parent=="16") { ?>
				<div class="col-sm-3 sidebar-interna">
					<div class="widget-area">
					<ul>
					  <?php global $id;
					  wp_list_pages("title_li=&child_of=16&show_date=modified&date_format=$date_format"); ?>
					</ul>
					</div><!-- .widget-area -->
				</div><!-- .sidebar-inner -->

			<?php } elseif (is_page(18) || $post->post_parent=="18") { ?>
				<div class="col-sm-3 sidebar-interna">
					<div class="widget-area">
					<h3>Estética Corporal</h3>
					<ul>
					  <?php global $id;
					  wp_list_pages("title_li=&child_of=18&show_date=modified&date_format=$date_format"); ?>
					</ul>
					</div><!-- .widget-area -->
				</div><!-- .sidebar-inner -->

			<?php } elseif (is_page(20) || $post->post_parent=="20") { ?>
				<div class="col-sm-3 sidebar-interna">
					<div class="widget-area">
					<h3>Nutrición & Bienestar</h3>
					<ul>
					  <?php global $id;
					  wp_list_pages("title_li=&child_of=20&show_date=modified&date_format=$date_format"); ?>
					</ul>
					</div><!-- .widget-area -->
				</div><!-- .sidebar-inner -->

			<?php } else { ?>

			<?php } ?>
			<div id="primary" class="col-sm-9">
			<div id="content" class="site-content" role="main">

				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="entry-content">
							<h2><?php the_title(); ?></h2>
							<div class="textos-interna">
								<?php the_content(); ?>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	<?php if( get_field('titulo_acordeon_1') ): ?>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="heading1">
	      <h4 class="panel-title">
	        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
	          	<?php the_field('titulo_acordeon_1'); ?>				
	        </a>
	      </h4>
	    </div>
	    <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
	        <div class="panel-body">
				<?php the_field('contenido_acordeon_1'); ?>
		    </div>
	    </div>
	  </div>
	<?php endif; ?>

	<?php if( get_field('titulo_acordeon_2') ): ?>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="heading2">
	      <h4 class="panel-title">
	        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
	          	<?php the_field('titulo_acordeon_2'); ?>				
	        </a>
	      </h4>
	    </div>
	    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
	        <div class="panel-body">
				<?php the_field('contenido_acordeon_2'); ?>
		    </div>
	    </div>
	  </div>
	<?php endif; ?>

	<?php if( get_field('titulo_acordeon_3') ): ?>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="heading3">
	      <h4 class="panel-title">
	        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
	          	<?php the_field('titulo_acordeon_3'); ?>				
	        </a>
	      </h4>
	    </div>
	    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
	        <div class="panel-body">
				<?php the_field('contenido_acordeon_3'); ?>
		    </div>
	    </div>
	  </div>
	<?php endif; ?>

	<?php if( get_field('titulo_acordeon_4') ): ?>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="heading4">
	      <h4 class="panel-title">
	        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
	          	<?php the_field('titulo_acordeon_4'); ?>				
	        </a>
	      </h4>
	    </div>
	    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
	        <div class="panel-body">
				<?php the_field('contenido_acordeon_4'); ?>
		    </div>
	    </div>
	  </div>
	<?php endif; ?>

	<?php if( get_field('titulo_acordeon_5') ): ?>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="heading5">
	      <h4 class="panel-title">
	        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
	          	<?php the_field('titulo_acordeon_5'); ?>				
	        </a>
	      </h4>
	    </div>
	    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
	        <div class="panel-body">
				<?php the_field('contenido_acordeon_5'); ?>
		    </div>
	    </div>
	  </div>
	<?php endif; ?>

	<?php if( get_field('titulo_acordeon_6') ): ?>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="heading6">
	      <h4 class="panel-title">
	        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
	          	<?php the_field('titulo_acordeon_6'); ?>				
	        </a>
	      </h4>
	    </div>
	    <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
	        <div class="panel-body">
				<?php the_field('contenido_acordeon_6'); ?>
		    </div>
	    </div>
	  </div>
	<?php endif; ?>	
</div>


							</div>
						</div><!-- .entry-content -->
					</article><!-- #post -->
				<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #primary -->
	</div>
</div>
</div>

<?php get_footer(); ?>