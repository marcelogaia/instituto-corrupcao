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
			<h3 class="general-title col-xs-10 col-xs-offset-1">PORTFÓLIO DE PROJETOS</h3>
			<div class="description col-xs-10 col-xs-offset-1">
				<p>Acreditamos que, para enfrentar a corrupção, devemos primeiro estudá-la, mensurá-la e entendê-la. Analisar as políticas públicas de prevenção e combate, e testar sua eficácia. Levantar as boas práticas e disseminá-las. Trabalhamos com objetivos de longo prazo. Somos técnicos, rigorosamente apartidários e temos mais perguntas do que respostas. Vamos usar a inteligência para derrubar a cultura da corrupção e, assim, contribuir para a construção de um Brasil mais ético e justo para as próximas gerações. </p>
			</div>
		</div>
	</section>
	<section class="projetos">
		<div class="container">
			<h3 class="general-title">Projetos</h3>
			<div class="description">
				<p>Conheça mais sobre nossos projetos, os que já realizamos e os que estamos planejando. Veja como você pode ajudar a realizá-los!</p>
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
				<li class="radio educacao realizados col-xs-12 col-sm-4">
					<div>
						<h4 class="big-title">Radiografia</h4>
					</div>
					<div class="post-hover">
						<h4 class="small-title">Radiografia</h4>
						<p>Pessoas mais bem informadas são mais conscientes de seus direitos e deveres, comportam-se melhor em sociedade e votam melhor. Pessoas mobilizadas em prol de temas como combate à corrupção e incentivo à transparência contribuem para chamar a atenção das instituições para a importância do tema e cobrar providências.</p>
						<?php /*<a href="javascript:void(0);<?=  site_url('projeto/3a-corrida-e-caminhada-contra-a-corrupcao') ?>">Quero Ver</a> */ ?>
					</div>
				</li>
				<li class="mapa pesquisa andamento col-xs-12 col-sm-4">
					<div>
						<h4 class="big-title">mapa da corrupção</h4>
					</div>
					<div class="post-hover">
						<h4 class="small-title">mapa da corrupção</h4>
						<p>O primeiro passo para o sucesso de um projeto é um diagnóstico bem feito do cenário e de experiências passadas. Quanto melhor for essa avaliação, maiores as chances de se atingir um resultado efetivo. Há informações extremamente superficiais sobre corrupção no Brasil. Nosso objetivo é construir esse conhecimento e, assim, contribuir para a prevenção e o enfrentamento desse crime e de ilícitos relacionados.</p>
						<?php /*<a href="javascript:void(0);<?=  site_url('projeto/3a-corrida-e-caminhada-contra-a-corrupcao') ?>">Quero Ver</a> */ ?>
					</div>
				</li>
				<li class="corrida politicas captacao col-xs-12 col-sm-4">
					<div>
						<h4 class="big-title">Corrida contra corrupção</h4>
					</div>
					<div class="post-hover">
						<h4 class="small-title">Corrida contra corrupção</h4>
						<p>A seguir, usaremos esses dados para aprimorar leis, projetos de leis e outras normas sobre os temas a que o Instituto se dedica. Os projetos deste eixo englobam a construção, participação e disseminação de iniciativas legislativas dedicadas à prevenção e ao combate à corrupção.</p>
						<?php /*<a href="javascript:void(0);<?=  site_url('projeto/3a-corrida-e-caminhada-contra-a-corrupcao') ?>">Quero Ver</a> */ ?>
					</div>
				</li>
			</ul>
		</div>
	</section>
	
<?php
  get_footer();
?>