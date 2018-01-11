
	<section class="slider-productos section">
		<div class="container">
			<img class="img-fluid d-block mx-auto section-title" src="<?php bloginfo('template_url') ?>/assets/img/tit-destacados.png">
			<div id="slider-productos" class="owl-carousel owl-theme">
				<?php
					$args = array (
					'post_type' => 'slider_destacados',
					'posts_per_page'=> -1
					);
					$the_query = new WP_Query ($args);
				?>
				<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					  	<?
					  	$f = 0;
					  	$bloques = get_order_group('slider_producto_imagen'); // guarda el bloque en un array //poner uno de los campos

					  	foreach($bloques as $bloque){ // recorre cada bloque de edición

								$e = $e +1;
								$f++;
								$items = get_order_field('slider_producto_imagen', $bloque); // guarda las items en un array
								foreach ($items as $item) {
								?>
								<a href="<?php echo get('slider_producto_link', $e, $item ); ?>" class="item">
									<!-- 600x600 -->
									<img class="img-fluid owl-lazy" data-src="<?php echo get('slider_producto_imagen', $e, $item); ?>" src="<?php echo get('slider_producto_imagen', $e, $item); ?>">
									<h3><?php echo get('slider_producto_nombre', $e, $item ); ?></h3>
									<p><?php echo get('slider_producto_texto', $e, $item ); ?></p>
								</a>

						 	<? } ?>

						<? } ?>
				<?php endwhile; else: ?>
		        <?php endif; ?>
		        <?php wp_reset_postdata()?>

			</div> <!-- slider productos -->

			<div class="text-center">
				<a class="btn btn-primary btn-blanco-lg" href="<?php bloginfo('url'); ?>/productos" role="button">ver más</a>
			</div>
		</div>
	</section>


