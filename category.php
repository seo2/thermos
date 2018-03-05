<?php get_header(); ?>
  <body>
  	<?php include('include-main-nav.php'); ?>
  	<div class="titulo-seccion">
  		<h4><?php single_cat_title(); ?></h4>
  	</div>
  	<?php
	  	$term = get_queried_object();
	  	$categoria =  $term->slug;
	  	?>
  <section class="productos section">
  	<div class="container">
  		<div class="row">
<!--
  			 <?php
          if (have_posts()) :
          	while (have_posts()) :
          		the_post(); ?>
  			 	<div class="col-sm-3">
  			 		<div class="box">
  			 			<a href="<?php the_permalink(); ?>">
  							<img class="img-responsive" src="<?php echo get('imagenes_slider_imagen_grande'); ?>" alt="">
  			 			</a>
  			 			<div class="box-title">
  			 				<h3> <?php the_title();?> </h3>
  			 			</div>
  			 		</div>
  			 	</div>
  		 <?php
          	endwhile;
          endif;
        ?>
-->

<?php
				$args = array(
					'post_type' 	=> 'producto',
					'category_name' => $categoria
				);
				$the_query = new WP_Query( $args );

					
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
				?>						

				 	<div class="col-sm-4">
				 		<div class="box">
				 			<a href="<?php the_permalink(); ?>">
<!-- 								<img class="img-responsive" src="<?php echo get('imagenes_slider_imagen_grande'); ?>" alt=""> -->
								<?php the_post_thumbnail('productos', array('class' => 'img-responsive ')); ?>
				 			</a>
				 			<div class="box-title">
				 				<h3> <?php the_title(); ?> </h3>
				 			</div>
				 		</div>
				 	</div>						
				<?php		
					}
				?>


  		</div> <!-- row -->
  	</div> <!-- container -->

  </section> <!-- productos -->

<?php get_footer(); ?>
