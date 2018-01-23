<?php /* Template Name: Productos */ ?>
<?php get_header(); ?>
  <body>
  	<?php include('include-main-nav.php'); ?>
  	<div class="titulo-seccion">
  		<h4>productos</h4>
  	</div>
  <section class="productos section">
  	<div class="container">
  		<div class="row">
			<?php
				$category = get_category_by_slug( 'productos' );
				$args = array(
					'type' => 'post',
					'child_of' => $category->term_id,
					'orderby' => 'name',
					'order' => 'ASC',
					'hide_empty' => FALSE,
					'hierarchical' => 1,
					'taxonomy' => 'category'
				);
				$child_categories = get_categories($args );
				//echo '<pre>';
				//	print_r($child_categories);
				 //echo '</pre>';

				foreach ($child_categories as $child) {
					$arr_imagen = $child->term_thumbnail;
					$imagen = json_decode($arr_imagen);
					//print_r($imagen);
					?>
				 	<div class="col-sm-4">
				 		<div class="box">
				 			<a href="<?php bloginfo('url')?>/category/<?php echo $child->cat_name; ?>">
								<img class="img-responsive" src="<?php echo $imagen->url;?>" alt="">
				 			</a>
				 			<div class="box-title">
				 				<h3> <?php echo $child->category_nicename; ?> </h3>
				 			</div>
				 		</div>
				 	</div>
				<? } ?>








  		</div> <!-- row -->
  	</div> <!-- container -->

  </section> <!-- productos -->

<?php get_footer(); ?>
