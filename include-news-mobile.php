<?php
$args = array(
	'category_name' => 'noticias',
	'posts_per_page' => 3
	);
// the query
$the_query = new WP_Query( $args ); 
$i = 1;
if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
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
      }

      //echo $imagen_vertical;
	?>
<?php if($i == 1) : ?>	
<div class="box-top">

	<div class="box-imagen">
		<div class="box-texto clearfix">
			<?php echo $titulo_con_formato;?>
			<a class="btn btn-primary btn-transparente float-right" href="<?php the_permalink();?>" role="button"><?php echo $texto_btn;?></a>
		</div><!-- box-texto -->
		<div class="layer"></div>
		<img class="img-fluid" src="<?php echo $imagen_horizontal;?>" alt="">
	</div>
</div>
<?php elseif($i == 2) : 
$titulo_2 = str_replace("<h2>", '<h2 class="text-left">', $titulo_con_formato);
$titulo_2 = str_replace("<h3>", '<h3 class="text-left">', $titulo_2);
$titulo_2 = str_replace("<h4>", '<h4 class="text-left">', $titulo_2);
?>	
<div class="box-mid">
	<div class="box-imagen">
		<div class="box-texto clearfix">
			<?php echo $titulo_2;?>
		<!-- 	<h4>mariana di girolamo</h4> -->
			<a class="btn btn-primary btn-transparente" href="<?php the_permalink();?>" role="button"><?php echo $texto_btn;?></a>
		</div><!-- box-texto -->
		<div class="layer"></div>
		<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/blog2.gif" alt="">
	</div>
</div>
<?php elseif($i == 3) : ?>	
<div class="box-bottom">
	<div class="box-imagen">
		<div class="box-texto clearfix">
			<<?php echo $titulo_con_formato;?>
			<!-- <h4>mariana di girolamo</h4> -->
			<a class="btn btn-primary btn-transparente float-right" href="<?php the_permalink();?>" role="button"><?php echo $texto_btn;?></a>
		</div><!-- box-texto -->
		<div class="layer"></div>
		<img class="img-fluid" src="<?php echo $imagen_horizontal;?>" alt="">
	</div>
</div>
	<?php endif;?>
	<?php $i++; 
	endwhile; ?>
<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php wp_reset_postdata(); ?>