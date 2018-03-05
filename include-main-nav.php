<nav class="navbar navbar-expand-lg navbar-light fixed-top  bg-light">
	 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		    </button>
			<a class="logo-xs nav-link d-block d-lg-none" href="<?php bloginfo('url'); ?>">
				<img class="img-fluid" id="logo-navbar-xs" src="<?php bloginfo('template_url') ?>/assets/img/logo-thermos.png" alt="Thermos">
			</a>
			<div class="rrss d-block d-lg-none h-center">
					<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<!-- 	<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-google-plus-official" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i></a> -->
			</div>
		    <div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?php bloginfo('url'); ?>/nosotros/">nosotros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php bloginfo('url'); ?>/productos/">productos</a>
					</li>
					<li class="nav-item d-none d-lg-block">
						<a class="nav-link" href="<?php bloginfo('url'); ?>">
							<img class="img-fluid" id="logo-navbar-middle" src="<?php bloginfo('template_url') ?>/assets/img/logo-thermos.png" alt="Thermos">
						</a>
					</li>
					<li class="nav-item">
						<?php if(is_home()) { ?>
							<a class="nav-link" href="#noticias">noticias</a>
						<? } else { ?>
							<a class="nav-link" href="<?php bloginfo('url'); ?>#noticias">noticias</a>
						<? } ?>
					</li>

					<li class="nav-item">
						<?php if(is_home()) { ?>
							<a class="nav-link" href="#contacto">contacto</a>
						<? } else { ?>
							<a class="nav-link" href="<?php bloginfo('url'); ?>#contacto">contacto</a>
						<? } ?>

					</li>
				</ul>
				<div class="rrss d-none d-lg-block">
					<a href="https://www.facebook.com/thermoscl/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/thermoscl/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<!-- <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a> -->
			<!-- 		<a href=""><i class="fa fa-google-plus-official" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i></a> -->
				</div>
		    </div>
	</nav>






