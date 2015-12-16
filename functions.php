<?php


/**
 * Register widget areas.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'sidebar-blog', 'twentythirteen' ),
    'id'            => 'sidebar-blog',
    'description'   => __( 'Sidebar de blog y entradas.', 'twentythirteen' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'copyright-footer', 'twentythirteen' ),
    'id'            => 'copyright-footer',
    'description'   => __( 'Copyright en footer.', 'twentythirteen' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'texto-header', 'twentythirteen' ),
    'id'            => 'texto-header',
    'description'   => __( 'Texto cabecera header.', 'twentythirteen' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'concepto360', 'twentythirteen' ),
    'id'            => 'concepto',
    'description'   => __( 'Primer widget del footer, concepto 360', 'twentythirteen' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'donde-nosencuentran', 'twentythirteen' ),
    'id'            => 'donde-nosencuentran',
    'description'   => __( 'Widget donde nos encuentran en footer.', 'twentythirteen' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'nuestros-servicios', 'twentythirteen' ),
    'id'            => 'nuestros-servicios',
    'description'   => __( 'widget nuestros servicios y horarios en footer.', 'twentythirteen' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'footer4', 'twentythirteen' ),
    'id'            => 'footer4',
    'description'   => __( 'widget 4 Footer.', 'twentythirteen' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'modulo-sucripcion', 'twentythirteen' ),
    'id'            => 'modulo-suscripcion',
    'description'   => __( 'widget de suscripcion.', 'twentythirteen' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'promociones-home', 'twentythirteen' ),
    'id'            => 'promociones-home',
    'description'   => __( 'widget promociones.', 'twentythirteen' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'corporativo-home', 'twentythirteen' ),
    'id'            => 'corporativo-home',
    'description'   => __( 'widget 360 corporativo.', 'twentythirteen' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );  
}
add_action( 'widgets_init', 'twentythirteen_widgets_init' );

/*Excerpt limitado por cantidad de caracteres*/
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

?>