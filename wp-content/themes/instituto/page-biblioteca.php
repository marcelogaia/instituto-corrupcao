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

	<section class="search">
		<div class="container">
			<form action="">
				<input type="text" placeholder="Buscar por palavra(s) chave(s)">
				<button>PROCURAR <i class="fa fa-search"></i></button>
			</form>
		</div>
	</section>

	<section id="videos" class="biblioteca">
		<div class="container">	
			<h3>Vídeos</h3>
			<ul class="slick-carousel-biblioteca">
				<li>
					<div class="wp-video">
						<video style="width:100%">
							<source type="video/mp4" src="img/movie.mp4?_=1">Colocar um titulo para o vídeo<a href="img/movie.mp4">img/movie.mp4</a>
						</video>
					</div>
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
				</li>
				<li>
					<div class="wp-video">
						<video style="width:100%">
							<source type="video/mp4" src="img/movie.mp4?_=1">Colocar um titulo para o vídeo<a href="img/movie.mp4">img/movie.mp4</a>
						</video>
					</div>
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
				</li>
				<li>
					<div class="wp-video">
						<video style="width:100%">
							<source type="video/mp4" src="img/movie.mp4?_=1">Colocar um titulo para o vídeo<a href="img/movie.mp4">img/movie.mp4</a>
						</video>
					</div>
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
				</li>
				<li>
					<div class="wp-video">
						<video style="width:100%">
							<source type="video/mp4" src="img/movie.mp4?_=1">Colocar um titulo para o vídeo<a href="img/movie.mp4">img/movie.mp4</a>
						</video>
					</div>
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
				</li>
				<li>
					<div class="wp-video">
						<video style="width:100%">
							<source type="video/mp4" src="img/movie.mp4?_=1">Colocar um titulo para o vídeo<a href="img/movie.mp4">img/movie.mp4</a>
						</video>
					</div>
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
				</li>
				<li>
					<div class="wp-video">
						<video style="width:100%">
							<source type="video/mp4" src="img/movie.mp4?_=1">Colocar um titulo para o vídeo<a href="img/movie.mp4">img/movie.mp4</a>
						</video>
					</div>
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
				</li>
			</ul>
		</div>
	</section>

	<section id="artigos" class="biblioteca">
		<div class="container">

			<h3>Artigos</h3>
			<ul class="slick-carousel-biblioteca">
				<li>
					<img src="img/article-placeholder.jpg">
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
					<button class="btn btn-default">ler mais</button>
				</li>
				<li>
					<img src="img/article-placeholder.jpg">
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
					<button class="btn btn-default">ler mais</button>
				</li>
				<li>
					<img src="img/article-placeholder.jpg">
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
					<button class="btn btn-default">ler mais</button>
				</li>
				<li>
					<img src="img/article-placeholder.jpg">
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
					<button class="btn btn-default">ler mais</button>
				</li>
				<li>
					<img src="img/article-placeholder.jpg">
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
					<button class="btn btn-default">ler mais</button>
				</li>
				<li>
					<img src="img/article-placeholder.jpg">
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
					<button class="btn btn-default">ler mais</button>
				</li>
			</ul>
		</div>
	</section>

	<section id="livros" class="biblioteca">
		<div class="container">

			<h3>Livros</h3>
			<ul class="slick-carousel-biblioteca">
				<li>
					<img src="img/books-placeholder.jpg">
					<button class="btn btn-default">comprar</button>
					<button class="btn btn-warning">ver mais</button>
				</li>
				<li>
					<img src="img/books-placeholder.jpg">
					<button class="btn btn-default">comprar</button>
					<button class="btn btn-warning">ver mais</button>
				</li>
				<li>
					<img src="img/books-placeholder.jpg">
					<button class="btn btn-default">comprar</button>
					<button class="btn btn-warning">ver mais</button>
				</li>
				<li>
					<img src="img/books-placeholder.jpg">
					<button class="btn btn-default">comprar</button>
					<button class="btn btn-warning">ver mais</button>
				</li>
				<li>
					<img src="img/books-placeholder.jpg">
					<button class="btn btn-default">comprar</button>
					<button class="btn btn-warning">ver mais</button>
				</li>
				<li>
					<img src="img/books-placeholder.jpg">
					<button class="btn btn-default">comprar</button>
					<button class="btn btn-warning">ver mais</button>
				</li>
			</ul>
		</div>
	</section>

	<section id="iniciativas" class="biblioteca">
		<div class="container">

			<h3>boas iniciativas</h3>
			<ul class="slick-carousel-biblioteca">
				<li>
					<img src="img/initiative-placeholder.jpg">
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
					<a href="javascript:void(0);" target="_blank">www.linkdowebsite.com.br</a>
				</li>
				<li>
					<img src="img/initiative-placeholder.jpg">
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
					<a href="javascript:void(0);" target="_blank">www.linkdowebsite.com.br</a>
				</li>
				<li>
					<img src="img/initiative-placeholder.jpg">
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
					<a href="javascript:void(0);" target="_blank">www.linkdowebsite.com.br</a>
				</li>
				<li>
					<img src="img/initiative-placeholder.jpg">
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
					<a href="javascript:void(0);" target="_blank">www.linkdowebsite.com.br</a>
				</li>
				<li>
					<img src="img/initiative-placeholder.jpg">
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
					<a href="javascript:void(0);" target="_blank">www.linkdowebsite.com.br</a>
				</li>
				<li>
					<img src="img/initiative-placeholder.jpg">
					<h4>Título para o vídeo que tenha duas linhas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel.</p>
					<a href="javascript:void(0);" target="_blank">www.linkdowebsite.com.br</a>
				</li>
			</ul>
		</div>
	</section>
	
  
<?php
  get_footer();
?>