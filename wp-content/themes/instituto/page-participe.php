<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Instituto
 * @since Instituto 1.0
 */
  get_header();
?>

	<section class="precisamos">
		<div class="container">
			<h3 class="general-title">precisamos de você</h3>
			<ul>
				<li class="col-sm-10 col-sm-offset-1">
					<h4>Embaixador</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. Morbi id libero eu quam venenatis condimentum. </p>
				</li>
				<li class="col-sm-10 col-sm-offset-1">
					<h4>Doador</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. Morbi id libero eu quam venenatis condimentum. </p>
				</li>
				<li class="col-sm-10 col-sm-offset-1">
					<h4>Voluntário</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. Morbi id libero eu quam venenatis condimentum. </p>
				</li>
			</ul>
		</div>
	</section>
	<section class="buscamos">
		<div class="container">
			<h3 class="general-title">buscamos embaixadores</h3>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-1">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. Morbi id libero eu quam venenatis condimentum.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. Morbi id libero eu quam venenatis condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. Morbi id libero eu quam venenatis condimentum.</p>
				</div>
				<a href="#"><span>baixar</span><span>Kit de imagens</span><span>INAC</span></a>
			</div>
			
			<div class="wp-video"><!--[if lt IE 9]><script>document.createElement('video');</script><![endif]-->
				<video controls style="">
					<source type="video/mp4" src="img/movie.mp4?_=1" />
					Colocar um titulo para o vídeo
					<a href="img/movie.mp4">img/movie.mp4</a>
				</video>
			</div>
			<h4>conecte-se com nossas redes</h4>
			<ul class="social">
				<li class="linkedin"><a href="#">LINKEDIN</a></li>
				<li class="facebook"><a href="#">FACEBOOK</a></li>
				<li class="twitter"><a href="#">TWITTER</a></li>
				<li class="instagram"><a href="#">INSTAGRAM</a></li>
				<li class="gplus"><a href="#">GOOGLE+</a></li>
			</ul>
		</div>
	</section>
	<section class="quer-doar">
		<div class="container">
			<div class="row">	
				<div class="col-xs-10 col-xs-offset-1">
					<header>
						<h3 class="general-title">quer doar?</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. Morbi id libero eu quam venenatis condimentum.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</header>
					<ul class="items">
						<li class="direta">
							<h4><span>doação direta</span></h4>
							<div>
								<img src="img/paypal-logo.png" alt="">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. Morbi id libero eu quam venenatis condimentum.  
								</p>
							</div>
							<button>eu quero</button>
						</li>
						<li class="projetos">
							<h4><span>doar para <br>um de nossos projetos</span></h4>
							<div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl.</p>
								<br>
								<label for="projeto">escolha o projeto</label>
								<select class="selectpicker" id="projeto" data-style="btn-warning" name="" id="">
									<option value="">2ª Corrida Anual</option>
									<option value="">2ª Corrida Anual</option>
									<option value="">2ª Corrida Anual</option>
								</select>
							</div>
							<button>eu quero</button>
						</li>
						<li class="empresa">
							<h4><span>doação <br>por empresa</span></h4>
							<div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. Morbi id libero eu quam venenatis condimentum.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. condimentum. </p>
							</div>
							<button>eu quero</button>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="voluntarios">
		<div class="container">
			<div class="row">	
				<div class="col-sm-8 col-xs-offset-2">
					<h3 class="general-title">precisamos de voluntários</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. Morbi id libero eu quam venenatis condimentum.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<button>quero ser um</button>
				</div>
			</div>
		</div>
	</section>
	
<?php
  get_footer();
?>