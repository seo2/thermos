<?php /* Template Name: Productos */ ?>
<?php include('header.php'); ?>
  <body>
  	<?php include('include-main-nav.php'); ?>
  	<div class="titulo-seccion">
  		<h4>productos</h4>
  	</div>
  <section class="productos section">
  	<div class="container">
  		<div class="row">


<?php
$list_subcat = array();
if ( !empty($cat) ) $list_subcat = get_categories( ['hide_empty' => false, 'parent' => $cat] );

if ( count($list_subcat)):

	echo "<div class='subcat'>";
	foreach ($list_subcat as $item_subcat) {

		$category_link = get_category_link( $item_subcat->term_id );

		echo '<div>';
		echo '<h3><a href="'.$category_link.'">'.$item_subcat->name.'</a></h3>';
		echo '<div><a href="'.$category_link.'">'.$item_subcat->description.'</a></div>';
		echo '</div>';
	}
	echo "</div>";

endif;
?>



  	<!-- 	 <?php
                      if (have_posts()) :
                        while (have_posts()) :
                          the_post(); ?>
  			<div class="col-sm-4">
  				<div class="box">
  					<a href="<?php the_permalink(); ?>">
  						<img class="img-fluid" src="<?php get_the_category_thumbnail() ?>" alt="">
  					</a>
  					<div class="box-title">
  						<h3><?php echo $this_category; ?></h3>
  					</div>
  				</div>
  			</div>
	      <?php
                    endwhile;
                    endif;
                  ?> -->
  		</div> <!-- row -->
  	</div> <!-- container -->

  </section> <!-- productos -->

<?php include('footer.php'); ?>
