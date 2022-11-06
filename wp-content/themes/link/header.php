<?php
/**
 * Theme: Link
 * 
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package link
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 
if(isset($_POST['submit'])){
    if(isset($_POST['disclaimer'])) {
        $to = "email@example.com"; // Tu email
        $from = $_POST['email'];
        $name = $_POST['name'];
        $subject = "Mensaje enviado";
        $subject2 = "Copia del mensaje";
        $message = $name . " escribió lo siguiente:" . "\n\n" . $_POST['message'];
        $message2 = "Esto es una copia del mensaje " . $name . "\n\n" . $_POST['message'];

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // Envia una copia a la persona. Si no lo quieres, borra esta línea.
		echo"<script language='javascript'>window.location='inicio?e=n'</script>;";
    } else {
		echo"<script language='javascript'>window.location='inicio?e=s'</script>;";
    }
}
?>

	
<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>
	
	<?php // Set up the navbar as a header ?>
	<header id="masthead" class="site-header" role="banner">

	<?php
	// Custom off-canvas menu always displayed even for desktop browser
	$navbar = ''
	.'<nav class="offcanvas-menu" id="theMenu"><!-- menu-open -->'
	.'<div class="menu-wrap">'
	.'<span class="fa fa-arrow-left menu-close"></span>';

	// Add site name with link to home. Otherwise there is no branding in the header
	// anywhere on the site ;-)	
	$navbar .= '<h1 class="logo"><a class="custom-header-text-color" href="'
	.esc_url( home_url( '/' ) )
	.'" rel="home">'
	.get_bloginfo( 'name' )
	.'</a></h1>';

	// Primary navbar menu links
	$navbar .= wp_nav_menu( 
		array(  
		'theme_location' 		=> 'primary',
		'container' 			=> false, //<nav> or <div> class
		'menu_class' 			=> 'offcanvas-links', //<ul> class
		'fallback_cb' 			=> 'wp_page_menu',
		'depth'					=> 2,
		'echo'					=> false
		) 
	);
	
	// If Jetpack Social Menu active, use it.
	if ( function_exists( 'jetpack_social_menu' ) AND has_nav_menu( 'jetpack-social-menu' ) ) {
		$navbar .= wp_nav_menu( array(
			'theme_location'	=> 'jetpack-social-menu',
			'container' 		=> 'nav', //<nav> or <div> class
			'container_class' 	=> 'jetpack-social-navigation', //<nav> or <div> class
			//'menu_class' 		=> 'offcanvas-links', //<ul> class
			'link_before'     	=> '<span class="screen-reader-text">',
			'link_after'      	=> '</span>',
			'depth'           	=> 1,
			'echo'				=> false
		) );

	// Otherwise, use the social menu in this theme
	} else {
		$navbar .= wp_nav_menu( 
			array(  
			'theme_location' 	=> 'social',
			'container' 		=> false, //<nav> or <div> class
			'menu_class' 		=> 'offcanvas-links', //<ul> class
			//'link_before'     	=> '<span class="screen-reader-text">',
			//'link_after'      	=> '</span>',
			'fallback_cb' 		=> null,
			'depth'				=> 1,
			'echo'				=> false
			) 
		);
	}
	$navbar .= '</div>';

	// Custom navbar menu toggle button		
	$navbar .= ''
	.'<!-- Menu button -->'
	.'<div id="menuToggle" class="menu-close"><!-- active -->'
	.'<span class="fa fa-bars"></span>'
	.'</div>'
	.'</nav>';
	
	echo apply_filters( 'xsbf_navbar', $navbar ); 
	
	if (isset($_GET["e"])) {
		if ($_GET["e"]=="s") { ?>
			<style type="text/css">
				#miModal{
				  opacity:1;
				  pointer-events:auto;
				  display: block;
				}
			</style>
		<?php }
		else { ?>			
			<style type="text/css">
				#miModal2{
				  opacity:1;
				  pointer-events:auto;
				  display: block;
				}
			</style>
		<?php }
	}

	$direccion = $_SERVER['REQUEST_URI'];
	$direcciones = explode("/", $direccion);
	$ult_direccion = $direcciones[sizeof($direcciones)-2];
	if ($ult_direccion=="eventos" || $ult_direccion=="galeria" || $ult_direccion=="politica-privacidad" || $ult_direccion=="aviso-legal") { ?>
			<style type="text/css">
				.header-image-title{
				  display: none;
				}
			</style>
		<?php }
	?>
	<div id="miModal" class="modal">
		<div class="modal-contenido">
			<a id="cerrarModal" href="#">X</a>
			<h2>Debe aceptar las condiciones de uso y privacidad.</h2>
		</div>  
	</div>
	<div id="miModal2" class="modal">
		<div class="modal-contenido">
			<a id="cerrarModal2" href="#">X</a>
			<h2>Correo enviado. En breve recibirá una respuesta.</h2>
		</div>  
	</div>
	
	</header><!-- #masthead -->

	<?php // Set up the content area (but don't put it in a container) ?>	
	<div id="content" class="site-content">
