<?php include('header.php'); ?>
  <body>
  	<?php include('include-main-nav.php'); ?>
  	<div class="titulo-seccion">
  	<h4>productos</h4>
  	</div>
  <section class="producto section">

  	<div class="container">
  		<div class="row">
  			<div class="col-sm-6">
				<div id="galeria-producto">
					 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="img-zoom-wrapper">
						<img class="img-fluid img-zoom" id="img-producto" src="<?php echo get('imagenes_slider_imagen_grande'); ?>" data-zoom-image="<?php echo get('imagenes_slider_imagen_grande'); ?>"/>
						<i class="fa fa-search-plus" aria-hidden="true"></i>
					</div>
					<?php if(get('tag_producto_imagen')){?>
						<!-- tag producto -->
						<div id="imagen-tag-producto">
							<img class="img-fluid" src="<?php echo get('tag_producto_imagen'); ?>" alt="">
						</div>
					<? } ?>
					<div id="botonera-producto" class="botonera-zoom-producto owl-carousel owl-theme">
						  	<?
						  	$f = 0;
						  	$bloques = get_order_group('imagenes_slider_imagen_grande'); // guarda el bloque en un array //poner uno de los campos
						  	foreach($bloques as $bloque){ // recorre cada bloque de edición
							$e = $e +1;
							$f++;
							$fotos = get_order_field('imagenes_slider_imagen_grande', $bloque); // guarda las fotos en un array
							foreach ($fotos as $foto) {
							?>

						<a href="javascript:void(0);" data-image="<?php echo get('imagenes_slider_imagen_grande', $e, $foto); ?>" data-zoom-image="<?php echo get('imagenes_slider_imagen_grande', $e, $foto); ?>">
							<img src="<?php echo get('imagenes_slider_imagen_grande', $e, $foto); ?>" />
						</a>
						 <? } ?>
        			<? } ?>

					</div> <!-- botonera producto -->
				</div> <!-- galeria producto -->
  			</div>
  			<div class="col-sm-6">
  				<div class="nombre-producto">
  					<h4> <?php the_title(); ?></h4>
  				</div>
				<div class="caracteristicas-producto">
					<?php the_content(); ?>
				<!-- 	<a class="btn btn-primary btn-blanco-md" href="#" role="button">ver más</a> -->
				</div>
  			</div>
  		</div>
  		<div class="row">
  			<section class="info-producto  mt-50">

						<div class="tab">
						  <a class="btn btn-default tablinks" onclick="openCity(event, 'info')">descripción</a>
						  <a class="btn btn-default tablinks" onclick="openCity(event, 'specs')">especificaciones</a>
						  <a class="btn btn-default tablinks" onclick="openCity(event, 'care')">cuidado y uso</a>
						</div>

						<!-- Tab content -->
						<div id="info" class="tabcontent">
								<?php echo get('informacion_informacion_del_producto'); ?>
						</div>

						<div id="specs" class="tabcontent">
							<?php echo get('informacion_especificaciones'); ?>
						</div>

						<div id="care" class="tabcontent">
							<?php echo get('informacion_cuidado_y_uso'); ?>
						</div>
				</section>
  		</div>

		<?php endwhile; else: ?>
		<?php endif; ?>
		<?php wp_reset_postdata()?>
  	</div>

  </section> <!-- productos -->

<?php include('footer.php'); ?>
