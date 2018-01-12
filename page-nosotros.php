<?php /* Template Name: Nosotros */ ?>
<?php get_header(); ?>
	<?php
          if (have_posts()) :
          	while (have_posts()) :
          		the_post(); ?>
  	<div class="titulo-seccion">
  		<h4><?php the_title(); ?></h4>
  	</div>
  <section class="nosotros section">
  	<div class="container">
  		<div class="row">
  			<div class="col-sm-12">
  				<img class="img-fluid mb-50" src="<?php the_post_thumbnail_url(); ?>" alt="">
  				<?php the_content(); ?>
		   <?php
          endwhile;
          endif;
        ?>

  				<img class="img-fluid mt-50" src="<?php bloginfo('template_url'); ?>/assets/img/termitos.png" alt="">
  			</div>
  		</div>
  	</div>
  </section> <!-- nosotros -->

<?php get_footer(); ?>
