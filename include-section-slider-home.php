
<section class="slider-home">
	<img id="etiqueta" class="img-fluid img-fluid d-none d-sm-none d-md-block" src="<?php bloginfo('template_url'); ?>/assets/img/bt-kw.png">
	<a href="javascript:void(0);" data-toggle="modal" data-target="#myModal">
		<img id="bpa-free" class="img-fluid d-none d-sm-none d-md-block" src="<?php bloginfo('template_url'); ?>/assets/img/btn-bpa-free.png">
		<img id="bpa-free-xs" class="img-fluid d-block d-sm-block d-md-none" src="<?php bloginfo('template_url'); ?>/assets/img/btn-bpa-free-xs.png">
	</a>

	<img id="etiqueta-xs" class="img-fluid d-block d-sm-block d-md-none" src="<?php bloginfo('template_url'); ?>/assets/img/bt-kw-xs.png">
	<div id="slider-home" class="owl-carousel owl-theme">
		<?php
		   $args = array (
		       'post_type' => 'banner_home',
		       'posts_per_page'=> -1
		     );
		     $the_query = new WP_Query ($args);
		 ?>
		  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		  	<?
		  	$f = 0;
		  	$bloques = get_order_group('banner_imagen_escritorio'); // guarda el bloque en un array //poner uno de los campos
		  	foreach($bloques as $bloque){ // recorre cada bloque de edición
			$e = $e +1;
			$f++;
			$fotos = get_order_field('banner_imagen_escritorio', $bloque); // guarda las fotos en un array
			foreach ($fotos as $foto) {
			?>
			<?
				if(get('banner_link', $e, $foto ) != "") { ?>
					<a href="<?php echo get('banner_link', $e, $foto ); ?>" class="item" target="<?php if(get('enlace_externo', $e, $foto)){?>_blank<?php } ?>">
						<!-- 1920*600 -->
						<img class="img-fluid d-none d-sm-none d-md-block owl-lazy" data-src="<?php echo get('banner_imagen_escritorio', $e, $foto); ?>" src="<?php echo get('banner_imagen_escritorio', $e, $foto); ?>">
						<!-- 800 x 800 -->
						<img class="img-fluid d-block d-sm-block d-md-none owl-lazy" data-src="<?php echo get('banner_imagen_mobile', $e, $foto); ?>" src="<?php echo get('banner_imagen_mobile', $e, $foto); ?>">
					</a>
				<? } else { ?>
					<div class="item">
						<!-- 1920*600 -->
						<img class="img-fluid d-none d-sm-none d-md-block owl-lazy" data-src="<?php echo get('banner_imagen_escritorio', $e, $foto); ?>" src="<?php echo get('banner_imagen_escritorio', $e, $foto); ?>">
						<!-- 800 x 800 -->
						<img class="img-fluid d-block d-sm-block d-md-none owl-lazy" data-src="<?php echo get('banner_imagen_mobile', $e, $foto); ?>" src="<?php echo get('banner_imagen_mobile', $e, $foto); ?>">
					</div>
				<? } ?>
        	<? } ?>
        <? } ?>
        <?php endwhile; else: ?>
        <?php endif; ?>
        <?php wp_reset_postdata()?>
	</div>
</section>


