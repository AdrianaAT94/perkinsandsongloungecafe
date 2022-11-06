<?php
/**
 * Theme: Link
 * 
 * The "sidebar" for the bottom of the page (before the widgetized footer area). If no 
 * widgets added AND preivewing the theme, then display some widgets as samples. Once the
 * theme is actually in use, it will be empty until the user adds some actual widgets.
 *
 * @package link
 */
?>

<?php 
/* If page bottom "sidebar" has widgets, then retrieve them */
$sidebar_pagebottom = get_dynamic_sidebar( 'sidebar-4' );
$sidebar_pagebottom = apply_filters( 'xsbf_pagebottom', $sidebar_pagebottom );

/* If not, then display sample widgets unless turned off in theme options */
global $xsbf_theme_options;
if ( $xsbf_theme_options['sample_widgets'] != false AND ! $sidebar_pagebottom ) {

	$sidebar_pagebottom = '<div class="parallax foto_coctel"><aside id="sample-text-2" class="contenido_parallax widget widget_text section bg-almostblack centered clearfix">'
		.'<div class="container">'
		.'<h2 class="widget-title">' . _x( 'DESCUBRE NUESTROS CÓCTELES', null, 'flat-bootstrap' ) . '</h2>'
		.'<div class="textwidget">'
		.'<div class="row" style="color:#768282;">'
		.'<p>' . _x( "Contamos con un equipo de baristas muy experimentados que tienen el conocimiento para hacer una variedad de bebidas con gran facilidad y perfecto acabado. Aparte de la elaboración de cócteles y combinados, nuestro amable equipo estará siempre listo para ayudarte a conseguir aquella bebida que elijas.", null, 'flat-bootstrap' ) . '</p>'
		.'</div><!-- row -->'
		.'</div><!-- textwidget -->'
		.'</div><!-- container -->'
		.'</aside></div>';

	$sidebar_pagebottom .= '<aside id="sample-text" class="carta widget widget_text section bg-lightgray centered clearfix">'
		.'<div class="container">'
		.'<h2 class="widget-title">' . _x( 'Ven a visitarnos!', null, 'flat-bootstrap' ) . '</h2>'
		.'<div class="textwidget">'
		.'<div class="row">'
		.'<div class="col-lg-8 col-lg-offset-2">'
		.'<p><button type="button" class="boton_carta btn btn-primary btn-lg">' . _x( 'Nuestra carta', null, 'flat-bootstrap' ) . '</button></p>'
		.'</div><!-- col-lg-8 -->'
		.'</div><!-- row -->'
		.'</div><!-- textwidget -->'
		.'</div><!-- container -->'
		.'</aside>';			

	$sidebar_pagebottom .= '<aside id="sample-text-5" class="widget widget_text section clearfix">'
		.'<div class="container">'
		.'<h2 class="widget-title has-text-align-center">' . _x( 'NUESTRO HORARIO', null, 'flat-bootstrap' ) . '</h2>'
		.'<div class="horario">'
		.'<div class="row lunes">'
		.'<div class="col-md-4"><p>Lunes</p></div>'
		.'<div class="col-md-8"><p>Cerrado</p></div>'
		.'</div>'
		.'<div class="row martes">'
		.'<div class="col-md-4"><p>Martes</p></div>'
		.'<div class="col-md-8"><p>09:30 AM - 03:00 AM</p></div>'
		.'</div>'
		.'<div class="row miercoles">'
		.'<div class="col-md-4"><p>Miércoles</p></div>'
		.'<div class="col-md-8"><p>09:30 AM - 03:00 AM</p></div>'
		.'</div>'
		.'<div class="row jueves">'
		.'<div class="col-md-4"><p>Jueves</p></div>'
		.'<div class="col-md-8"><p>09:30 AM - 04:00 AM</p></div>'
		.'</div>'
		.'<div class="row viernes">'
		.'<div class="col-md-4"><p>Viernes</p></div>'
		.'<div class="col-md-8"><p>09:30 AM - 04:00 AM</p></div>'
		.'</div>'
		.'<div class="row sabado">'
		.'<div class="col-md-4"><p>Sábado</p></div>'
		.'<div class="col-md-8"><p>09:30 AM - 04:00 AM</p></div>'
		.'</div>'
		.'<div class="row domingo">'
		.'<div class="col-md-4"><p>Domingo</p></div>'
		.'<div class="col-md-8"><p>12:00 PM - 04:00 AM</p></div>'
		.'</div>'
		.'</div>'
		.'</div><!-- container -->'
		.'</aside>';

	$sidebar_pagebottom .= '<aside id="sample-text-3" class="widget widget_text section clearfix">'
		.'<div class="container">'
		.'<div class="textwidget">'
		.'<p class="has-text-align-center">' . _x( "Sigue nuestras redes sociales para estar al día de todas nuestras novedades.", null, 'flat-bootstrap' ) . '</p>'
		.'</div><!-- textwidget -->'
		.'</div><!-- container -->'
		.'</aside>';

	$sidebar_pagebottom .= '<aside id="sample-text-4" class="widget widget_text section nopadding fullwidth clearfix">'
		.'<div id="sf" class="textwidget social-footer">'
		.'<div class="row">'
		.'<div class="col-md-12 col-sm-12 col-xs-12">
			<p class="centered aligncenter"><a href="https://www.facebook.com/pages/category/Bar/Perkins-and-Songs-Lounge-Caf%C3%A9-102994267730626/" target="_blank"><i class="fa fa-facebook icon-lg"></i></a></p>
		</div>'
		.'</div><!-- row -->'
		.'</div><!-- textwidget -->'
		.'</aside>';

	$sidebar_pagebottom .= '<div class="contact-footer">
				<div class="container">
				<div class="col-md-6">
		        	<div id="mapwrap">
						<iframe height="600" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2936.4553040936007!2d-7.771479049270472!3d42.60929892721596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd3021aca6432bdd%3A0x983a2264ee5d349!2sPerkins%20%26%20Songs%20Lounge%20Caf%C3%A9!5e0!3m2!1ses!2ses!4v1616505858949!5m2!1ses!2ses"></iframe>
					</div>	
				</div><!--col-md-6-->
				<div class="col-md-4">
					<h4>DIRECCIÓN<br/></h4>
					<br>
					<p>
						Travesía Ánxel Gómez Montero 
						27500<br/>
						Chantada, Lugo.
					</p>
					<p>
						P: <a href="tel:982441910">982 44 19 10<br/>
						E: <a href="mailto:djvictorsnachez@gmail.com">djvictorsnachez@gmail.com</a>
					</p>
					<p>Ponte en contacto con nosotros.</p>
					<form action="inicio" method="post" id="formulario-contacto">
						<div class="row">
					        <div class="col-md-2">
					            <label for="name">Nombre:</label>
					        </div>
					        <div class="col-md-4">
					            <input type="text" name="name" id="name">
					        </div>
					        <div class="col-md-2">
					            <label for="email">Email:</label>
					        </div>
					        <div class="col-md-4">
					            <input type="email" name="email" id="email">
					        </div>
				        </div>
						<div class="row text-mensaje">
					        <div class="col-md-2">
					            <label for="message">Mensaje:</label>
					        </div>
					        <div class="col-md-10">
					            <textarea name="message" id="message"></textarea>
				        	</div> 
				        </div>
						<div class="row">
				        	<div class="col-md-12">
			            		<label for="disclaimer">Acepto las <a href="politica-privacidad">condiciones de uso y privacidad</a></label>
			            		<input type="checkbox" name="disclaimer" id="disclaimer">
			        		</div>
				        </div>
						<div class="row">
				        	<div class="col-md-3">
				            	<input type="submit" name="submit" value="Enviar">
			        		</div>
				        <div>
				    </form>
				</div><!--col-md-4-->
				</div><!-- container -->
			</div><!-- contact-footer -->';

}

/* Apply filters and display the widgets */
$sidebar_pagebottom = apply_filters( 'xsbf_pagebottom', $sidebar_pagebottom );

if ( $sidebar_pagebottom ) :
?>
	<div id="sidebar-pagebottom" class="sidebar-pagebottom">
		<?php echo $sidebar_pagebottom; ?>
	</div><!-- .sidebar-pagebottom -->
<?php endif;?>
