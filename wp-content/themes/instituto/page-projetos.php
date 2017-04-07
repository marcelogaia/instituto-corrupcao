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

	<section class="chamada">
		<div class="container">
			<h3 class="general-title col-xs-10 col-xs-offset-1">Titulo chamativo</h3>
			<div class="description col-xs-10 col-xs-offset-1">
				<p>Acreditamos que, para enfrentar a corrupção, devemos primeiro estudá-la, mensurá-la e entendê-la. Analisar as políticas públicas de prevenção e combate, e testar sua eficácia. Levantar as boas práticas e disseminá-las. Trabalhamos com objetivos de longo prazo. Somos técnicos, rigorosamente apartidários e temos mais perguntas do que respostas. Vamos usar a inteligência para derrubar a cultura da corrupção e, assim, contribuir para a construção de um Brasil mais ético e justo para as próximas gerações. </p>
			</div>
		</div>
	</section>
	<section class="projetos">
		<div class="container">
			<h3 class="general-title">Projetos</h3>
			<div class="description">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. </p>
			</div>
			<ul class="categories"
				><li class="todos"><a href="#">Ver Todos</a></li
				><li class="pesquisa"><a href="#">Pesquisa</a></li
				><li class="politicas"><a href="#">Políticas Públicas</a></li
				><li class="educacao"><a href="#">Educação e Mobilização</a></li
			></ul><ul class="categories"
				><li class="captacao"><a href="#">Em Captação</a></li
				><li class="andamento"><a href="#">Em Andamento</a></li
				><li class="realizados"><a href="#">Realizados</a></li
			></ul>
			<ul class="the-projects">
				<li class="radio realizados col-xs-12 col-sm-4">
					<div>
						<h4 class="big-title">Radiografia</h4>
					</div>
					<div class="post-hover">
						<h4 class="small-title">Radiografia</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. Morbi id libero eu quam venenatis condimentum. Nulla vel risus sed odio dignissim vulputate. Mauris pulvinar dui ac euismod aliquet. Nulla facilisi.</p>
						<a href="#">Quero Ver</a>
					</div>
				</li>
				<li class="mapa andamento col-xs-12 col-sm-4">
					<div>
						<h4 class="big-title">mapa da corrupção</h4>
					</div>
					<div class="post-hover">
						<h4 class="small-title">mapa da corrupção</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. Morbi id libero eu quam venenatis condimentum. Nulla vel risus sed odio dignissim vulputate. Mauris pulvinar dui ac euismod aliquet. Nulla facilisi.</p>
						<a href="#">Quero Ver</a>
					</div>
				</li>
				<li class="corrida captacao col-xs-12 col-sm-4">
					<div>
						<h4 class="big-title">Corrida contra corrupção</h4>
					</div>
					<div class="post-hover">
						<h4 class="small-title">Corrida contra corrupção</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. Morbi id libero eu quam venenatis condimentum. Nulla vel risus sed odio dignissim vulputate. Mauris pulvinar dui ac euismod aliquet. Nulla facilisi.</p>
						<a href="#">Quero Ver</a>
					</div>
				</li>
			</ul>
		</div>
	</section>
	
<?php
  get_footer();
?>