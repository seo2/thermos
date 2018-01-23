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
					<div class="img-zoom-wrapper">
						<img class="img-fluid img-zoom" id="img-producto" src="assets/img/demo-producto/img1.jpg" data-zoom-image="assets/img/demo-producto/img1.jpg"/>
						<i class="fa fa-search-plus" aria-hidden="true"></i>
					</div>
					<div id="imagen-tag-producto">
						<img class="img-fluid" src="assets/img/demo-producto/tag-producto.jpg" alt="">
					</div>
					<div id="botonera-producto" class="botonera-zoom-producto owl-carousel owl-theme">
						<a href="javascript:void(0);" data-image="assets/img/demo-producto/img1.jpg" data-zoom-image="assets/img/demo-producto/img1.jpg">
							<img src="assets/img/demo-producto/img1-thumb.jpg" />
						</a>

						<a href="javascript:void(0);" data-image="assets/img/demo-producto/img2.jpg" data-zoom-image="assets/img/demo-producto/img2.jpg">
							<img src="assets/img/demo-producto/img2-thumb.jpg" />
						</a>

						<a href="javascript:void(0);" data-image="assets/img/demo-producto/img3.jpg" data-zoom-image="assets/img/demo-producto/img3.jpg">
							<img class="" src="assets/img/demo-producto/img3-thumb.jpg" />
						</a>
					</div> <!-- botonera producto -->
				</div> <!-- galeria producto -->
  			</div>
  			<div class="col-sm-6">
  				<div class="nombre-producto">
  					<h4>
  					Disney Frozen: FUNtainer Vacío con aislamiento de acero inoxidable tarro de comida 10oz
  					Disney Frozen</h4>
  				</div>
				<div class="caracteristicas-producto">
					<ul class="dashed">
						<li> 5 horas CALIENTE / 7 horas FRIO</li>
						<li>Doble pared de acero inoxidable</li>
						<li>Capacidad de 10 onzas</li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, nisi.</p>
					<a class="btn btn-primary btn-blanco-md" href="#" role="button">ver más</a>
				</div>
  			</div>
  		</div>
  		<div class="row">
  			<section class="info-producto  mt-50">
				<!-- 	<ul class="nav nav-tabs" id="myTab" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">INFORMACIÓN DEL PRODUCTO</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">ESPECIFICACIONES</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">CUIDADO Y USO</a>
					  </li>
					</ul>
						<div class="tab-content clearfix" id="myTabContent">
						  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<p>Perfecto para empacar en un almuerzo escolar, el frasco compacto y
							liviano FUNtainer® de 10 onzas de la marca Genuine Thermos® es una
							excelente opción para mantener los alimentos y los refrigerios a
							su temperatura óptima. La tecnología de aislamiento al vacío Thermos®
							y la construcción duradera de acero inoxidable de doble pared mantendrán
							los alimentos calientes durante hasta 5 horas o en frío durante hasta 7 horas.
							El diseño de boca ancha hace que sea fácil de llenar, comer y limpiar.</p>
						  </div>
						  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						  	 Ipsa, impedit, quia! Vero ipsam nisi provident veritatis blanditiis error et harum reiciendis tempora,
						  	officiis commodi. Repellendus molestias ipsa perferendis iure ipsum cupiditate, velit animi vel quae, earum ipsam fuga quod commodi.</p>
						  </div>
						  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						  	 Voluptates perferendis tenetur unde exercitationem eveniet aliquid ab cum fugiat dolores a quasi
						  	, modi ut maiores neque labore voluptate eaque, iure accusamus expedita dolorum explicabo corporis possimus doloremque. Aspernatur aut odio sequi est, dolores repellat velit ab ullam, id animi doloribus quam!</p>
						  </div>
						</div> -->

						<!-- Tab links -->
<div class="tab">
  <a class="btn btn-default tablinks" onclick="openCity(event, 'info')">información del producto</a>
  <a class="btn btn-default tablinks" onclick="openCity(event, 'specs')">especificaciones</a>
  <a class="btn btn-default tablinks" onclick="openCity(event, 'care')">cuidado y uso</a>
</div>

<!-- Tab content -->
<div id="info" class="tabcontent">

  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt architecto qui dolor quos at fugiat non quaerat eveniet ex cumque magni eligendi illo dolores accusantium in dignissimos ducimus, neque veniam ipsum voluptatum. Excepturi, sunt accusamus ipsa labore provident fugit repellendus.</p>
</div>

<div id="specs" class="tabcontent">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora necessitatibus, blanditiis veniam rerum minima earum cum odio esse temporibus, non ab, error sed iure? Repellendus neque quasi voluptate aperiam nulla!</p>
</div>

<div id="care" class="tabcontent">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi nobis tempora soluta, culpa consequatur, quo molestiae modi laudantium beatae aut.</p>
</div>



				</section>
  		</div>
  	</div>

  </section> <!-- productos -->

<?php include('footer.php'); ?>
