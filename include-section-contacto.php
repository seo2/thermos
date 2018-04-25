<section class="contacto">
	<div id="contacto" class="banderita-contacto"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img class="img-fluid d-block mx-auto titulo-contacto" src="<?php bloginfo('template_url'); ?>/assets/img/tit-contacto.png" alt="">
			</div>
			<div class="col-sm-6">
				<!--<form id="contacto">
				  	<div class="form-group">
				    	<input type="text" class="form-control" id="nombre" aria-describedby="nombre" placeholder="nombre y apellido*">
				  	</div>
				  	<div class="form-group">
				    	<input type="email" class="form-control" id="email" aria-describedby="email" placeholder="email*">
				  	</div>
				  	<div class="form-group">
				    	<textarea class="form-control" id="mensaje" rows="3" placeholder="mensaje*"></textarea>
	  				</div>
	  				<div class="text-center">
				  		<button type="submit" class="btn btn-primary btn-negro-lg">enviar</button>
	  				</div>
				</form>-->
				<?php echo do_shortcode( '[contact-form-7 id="174" title="Formulario de contacto 1" html_id="contacto"]' ); ?>
			</div>
			<!-- <div class="col-sm-12">
				<img class="img-fluid mapa-chile-h" src="<?php bloginfo('template_url'); ?>/assets/img/mapa-chile-h.png" alt="mapa chile">
				<img class="img-fluid mapa-chile-v" src="<?php bloginfo('template_url'); ?>/assets/img/mapa-chile.png" alt="mapa chile">
			</div> -->
			<div class="col-sm-6 hidden-xs">
				<img class="img-fluid mapa-l" src="<?php bloginfo('template_url'); ?>/assets/img/mapal.png" alt="mapa chile">
			</div>
			<div class="col-sm-6 hidden-xs">
				<img class="img-fluid mapa-r" src="<?php bloginfo('template_url'); ?>/assets/img/mapar.png" alt="mapa chile">
			</div>


			<div class="col-sm-12 visible-xs">
				<img class="img-fluid mapa-chile-v" src="<?php bloginfo('template_url'); ?>/assets/img/mapa-chile.png" alt="mapa chile">
			</div>

		</div>

	</div>
</section>
