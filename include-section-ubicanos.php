<section class="ubicanos">
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="bg-negro">
				<img class="img-fluid center" src="<?php bloginfo('template_url'); ?>/assets/img/tit-ubicanos.png" alt="">
			</div>
		</div>
		<div class="col-md-8">
			<div class="row">
				<?php
				   $args = array (
				       'post_type' => 'logos_tiendas',
				       'posts_per_page'=> -1
				     );
				     $the_query = new WP_Query ($args);
				 ?>
				  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-sm-3 text-center">
					<a class="box-logo d-block" href="<?php echo get('enlace_url_sitio'); ?>" target="_blank">
						<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
					</a>
				</div>
				<?php endwhile; else: ?>
				<?php endif; ?>
				<?php wp_reset_postdata()?>

			</div>
		</div>
	</div>
</div>
</section>
