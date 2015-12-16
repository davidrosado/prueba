		
    	   </div>
        </div>

        <div id="widgets-home">
            <div class="container">
                <div class="row">
                    <div class="fila-widgets">
                        <div class="widget-home col-xs-12" id="testimonios-home">
                            <h4>¿CÓMO SE SIENTEN NUESTROS CLIENTES?</h4>
                            <ul class="listado-servicios">
                                <?php $catquery = new WP_Query( 'cat=4&posts_per_page=1&order=asc' );
                                    while($catquery->have_posts()) : $catquery->the_post(); ?>
                                        <li id="post-<?php the_ID(); ?>" class="item-testimonio">
                                        <span class="col-sm-3">
                                            <?php the_post_thumbnail('large'); ?> 
                                        </span>                                             
                                        <span class="col-sm-9 enlinea">                                               
                                            <?php the_content(); ?>
                                        </span>
                                        </li>
                                <?php endwhile; ?>
                                <?php wp_reset_query(); ?>                                  
                            </ul>
                        </div>
                        
                        <div class="widget-home col-xs-12" id="promociones-home">
                            <?php dynamic_sidebar('promociones-home'); ?>
                        </div>

                        <div class="widget-home col-xs-12" id="corporativo-home">
                            <?php dynamic_sidebar('corporativo-home'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>  <!-- widgets home -->          


        <?php if ( ( is_home() || is_front_page() ) && have_posts() ) : ?>
        <div id="profesionales-contacto">
            <div class="container">
                <div class="row">
                    <div id="profesionales-home" class="col-sm-7 col-xs-12">
                         <?php the_field('profesionales_a_tu_disposicion'); ?>
                    </div>
                   <div id="contacto-home" class="col-sm-5 col-xs-12">
                        <div class="row">
                            <?php the_field('separa_tu_cita'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <?php endif ?> <!-- formulario home -->

        <footer class="site-footer">

            <div id="suscripcion">
                <div class="container">
                    <div class="row">
                            <?php dynamic_sidebar( 'modulo-suscripcion' ); ?>
                    </div>
                </div>
            </div>

            <div id="zona-widgets">
                <div class="container">
                    <div class="row">
                        <div class="fila-widgets">
                            <div class="widget-footer col-xs-12">
                                <?php dynamic_sidebar( 'concepto360' ); ?>
                            </div>
                            <div class="widget-footer col-xs-12">
                                    <?php dynamic_sidebar('donde-nosencuentran'); ?>
                            </div>
                            <div class="widget-footer col-xs-12 servicios-horarios">
                                    <?php dynamic_sidebar('nuestros-servicios'); ?>
                            </div>

                            <div class="widget-footer col-xs-12">
                                <aside class="widget widget_text contenedor-blog">
                                    <h3 class="widget-title">BLOG</h3>
                                    <ul class="listado-blog">
                                        <?php $catquery = new WP_Query( 'cat=5&posts_per_page=2&order=asc' );
                                            while($catquery->have_posts()) : $catquery->the_post(); ?>
                                                <li id="post-<?php the_ID(); ?>" class="item-blog">
                                                <span class="col-sm-4 col-xs-12 destacada">
                                                    <?php the_post_thumbnail(''); ?> 
                                                </span>                                             
                                                <span class="col-sm-8 col-xs-12 detalles">    
                                                    <h4><?php the_title(); ?></h4>
                                                    <span class="entry-date"><?php echo get_the_date(); ?></span>
                                                    <?php echo excerpt(5); ?>
                                                </span>
                                                </li>
                                        <?php endwhile; ?>
                                        <?php wp_reset_query(); ?>                                  
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- zona widgets -->

            <div class="site-info">
                <div class="container">
                    <div class="row">
                        <?php dynamic_sidebar('copyright-footer'); ?>
                    </div>
                </div>
            </div><!-- .site-info -->
        </footer><!-- .site-footer -->

    </div>      

    <script type="text/javascript">
        var a = jQuery.noConflict();
        a(document).ready(function() {
            a('#accordion-1').show();
            function close_accordion_section() {
                a('.accordion .accordion-section-title').removeClass('active');
                a('.accordion .accordion-section-content').slideUp(300).removeClass('open');
            }
         
            a('.accordion-section-title').click(function(e) {
                // Grab current anchor value
                var currentAttrValue = a(this).attr('href');
         
                if(a(e.target).is('.active')) {
                    close_accordion_section();
                }else {
                    close_accordion_section();
         
                    // Add active class to section title
                    a(this).addClass('active');
                    // Open up the hidden content panel
                    a('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
                }
         
                e.preventDefault();
            });
        });
    </script>

	<?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>