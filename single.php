<?php include('header.php'); ?>
<?php include('include-main-nav.php'); ?>
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	$noticias = get_group('noticias');
	 foreach($noticias as $noticia){
        //$imagen_vertical = $noticia['noticias_imagen_vertical'][1];
        $imagen_vertical = get_image('noticias_imagen_vertical',1,1,0);
        $imagen_horizontal = get_image('noticias_imagen_horizontal',1,1,0);
       	$titulo_con_formato = $noticia['noticias_titulo_con_formato'][1];
		$titulo_receta = $noticia['noticias_titulo_receta'][1];
		$porciones = $noticia['noticias_porciones'][1];
		$ingredientes = $noticia['noticias_ingredientes'][1];
		$imagen_receta = get_image('noticias_imagen_receta',1,1,0);
		$texto_btn = $noticia['noticias_texto_btn'][1];
		$pasos = $noticia['noticias_pasos'][1];

		if($imagen_horizontal == ""){
			$imagen_horizontal = $imagen_vertical;
		}
      }
     $author = get_the_author_meta('display_name');
 ?>

  	<div class="titulo-seccion">
  		<h4>noticias / <?php the_title(); ?> </h4>
  	</div>
  <section class="noticia section">
  	<div class="container container-news">
  		<div class="row">
  			<div class="col-sm-4">
  				<div class="box-texto">
  					<?php echo $titulo_con_formato;?>
  				</div><!-- box-texto -->
  			</div>
  			<div class="col-sm-8">
  				<div class="box-imagen">
  					<img class="img-fluid" src="<?php echo $imagen_horizontal;?>" alt="">
  				</div>
  			</div>
			<div class="col-sm-12">
				<div class="intro-noticia">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="col-sm-4">
				<h2><?php echo $titulo_receta;?></h2>
				<ul class="autor">
					<li>Autor: <?php echo $author;?></li>
					<li>Porciones: <?php echo $porciones;?></li>
				</ul>
				<h2>INGREDIENTS</h2>
				<div class="ingredientes">
					<?php echo $ingredientes;?>
				</div> <!-- ingredientes -->
			</div>
			<div class="col-sm-8">
				<img class="img-fluid float-right" src="<?php echo $imagen_receta;?>" alt="">
			</div>
			<div class="col-sm-12">
				<div class="pasos">
					<?php echo $pasos;?>
				</div> <!-- pasos -->
			</div>
  		</div>
  	</div>
  </section> <!-- noticia -->
<?php endwhile; else: ?>
<?php endif; ?>
<?php wp_reset_postdata()?>
<?php include('footer.php'); ?>
