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

		<div id="o-instituto-page">
		<div class="porque-somos-diferentes" >
			<div class="container">
				<div class="row">
					<h2>Porque somos diferentes</h2>
					<div>
						<div class="wp-caption">
							<div class="wp-video"><!--[if lt IE 9]><script>document.createElement('video');</script><![endif]--><video class="wp-video-shortcode" id="video-172-1" width="640" height="360" preload="metadata" controls="controls"><source type="video/mp4" src="img/movie.mp4?_=1" />Colocar um titulo para o vídeo<a href="img/movie.mp4">img/movie.mp4</a></video></div>
							<p class="wp-caption-text"><em>Assista nosso manifesto - "UNIÃO"</em></p>
						</div>
						<p>O Instituto Não Aceito Corrupção é uma associação apartidária, sem fins lucrativos, fundada em julho de 2015 (leia nosso estatuto). A entidade surgiu da articulação de um grupo de cidadãos que viu na crise política instalada a partir de junho de 2013, com os protestos de rua, uma oportunidade para transformar indignação em esforços estruturados para o enfrentamento da corrupção.</p>
						<p>Somos pessoas com backgrounds diferentes e formações profissionais bastante distintas, o que nos traz uma vocação multidisciplinar. Usaremos o Direito, a Estatística e a Comunicação como principais ferramentas de trabalho. Entendemos que o conhecimento atual sobre corrupção é superficial, e que seu aprofundamento é indispensável para prevenir e combater a corrupção de forma eficiente, tanto nas instâncias oficiais, quanto na percepção da sociedade.</p>
						<p>Atuaremos em três frentes: pesquisa, políticas públicas e educação/mobilização. Levantaremos informações sobre incidência e repressão à corrupção, e aos atos ilícitos relacionados, como fraudes a licitações, enriquecimento sem causa, improbidade administrativa e lavagem de dinheiro, entre outros. Usaremos esses dados para fazer uma discussão qualificada de leis e projetos de lei, de modo a contribuir para a adoção de regras eficientes no enfrentamento ao mau uso dos recursos públicos. E, por fim, disseminaremos conhecimento sobre compliance empresarial e estatal, ferramentas de fiscalização do Poder Público, transparência e acesso à informação, entre outros, com o objetivo de reverter a cultura de corrupção que, por tanto tempo, vigorou no Brasil.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="diretoria-e-conselho-estrategico" >
			<div class="container">
				<div class="row">
					<h2>Diretoria e Conselho Estrategico</h2>
					<div>
						<h3>O INAC é administrado por uma Diretoria Executiva que faz a gestão das tarefas do dia-a-dia, e que responde ao Conselho Estratégico, cuja função é definir os rumos do Instituto. Há ainda o Conselho de Novos Associados e Compliance que discute as questões ligadas a esses temas.</h3>
						<ul class="legend">
							<li style="text-align: center;">Diretoria</li>
							<li style="text-align: center;">Conselho Estratégico</li>
						</ul>
						<ul>
<?php 
	query_posts( array(	
		'post_type' => "pt_diretoria",
		'order' => "ASC"	
	));

	$left = true;
	while(have_posts()): the_post();
?>
							<li<?= $left ? "" : " class='right'"?>>
								<div class="img-circle" style="background-image: url(<?= the_post_thumbnail_url() ?>);">
									<a href="mailto:contato@naoaceitocorrupcao.org.br" class="email"><img src="img/dark-mail.png" alt=""></a>
								</div>
								<h4 class="<?= implode(" ", get_field('categoria')) ?>"><?php the_title() ?></h4>
								<h5><?php the_field('cargo') ?></h5>
								<p><?php the_content() ?></p>
							</li>
<?php 
	$left = !$left;
endwhile; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="fundadores-associados" >
			<div class="container">
				<div class="row">
					<h2>Fundadores &#038; Associados</h2>
					<div>
						<p>Entre nossos fundadores e associados estao os seguintes:</p>
						<ul>
							<li>Elli Doubleday</li>
							<li>Darrick Reeser</li>
							<li>Sparkle Spargo</li>
							<li>Jeanette Poudrier</li>
							<li>Freeman Rahm</li>
							<li>Reynalda Wilmeth</li>
							<li>Santa Ravelo</li>
							<li>Leia Keener</li>
							<li>Sunshine Ralph</li>
							<li>Carli Mackay</li>
							<li>Phyliss Mccloud</li>
							<li>Asuncion Kearse</li>
							<li>Mercedez Kimbro</li>
							<li>Elanor Vanleer</li>
							<li>Glen Hume</li>
							<li>Ouida Hylton</li>
							<li>Mazie Eby</li>
							<li>Blossom Greek</li>
							<li>Orval Cooney</li>
							<li>Carmela Paek</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="transparencia">
			<div class="container">
				<div class="row">
					<h2>transparência</h2>
					<div>
						<p>Para baixar nosso balancete, escolha o período qual gostaria de ver.</p>
						<p>
							<select class="selectpicker" data-style="btn-warning" name="" id="">
								<option value="">2015  |  2º Semestre</option>
							</select>
							<button>OK</button>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="parceiros" >
			<div class="container">
				<div class="row">
					<h2>Parceiros</h2>
					<p class="col-sm-8 col-sm-offset-2">Morbi at consequat magna, ac imperdiet ligula. Nam feugiat suscipit nisl. Quisque erat ipsum, placerat ac quam at, lobortis rhoncus libero.</p>
					<div class="row">
						<h4>Ouro</h4>
						<ul class="slick-carousel-ouro">
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
						</ul>

						<h4>Prata</h4>
						<ul class="slick-carousel-prata">
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
						</ul>
						<h4>Bronze</h4>
						<ul class="slick-carousel-bronze">
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
							<li><img src="img/partner-placeholder.png"></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="obrigado" >
			<div class="container">
				<div class="row">
					<h2>A todos que de alguma forma vêm nos ajudando a enfrentar a corrupção:</h2>
					<div>
						<h2>muito obrigado!</h2>
						<ul>
							<li>Elli Doubleday</li>
							<li>Darrick Reeser</li>
							<li>Sparkle Spargo</li>
							<li>Jeanette Poudrier</li>
							<li>Freeman Rahm</li>
							<li>Reynalda Wilmeth</li>
							<li>Santa Ravelo</li>
							<li>Leia Keener</li>
							<li>Sunshine Ralph</li>
							<li>Carli Mackay</li>
							<li>Phyliss Mccloud</li>
							<li>Asuncion Kearse</li>
							<li>Mercedez Kimbro</li>
							<li>Elanor Vanleer</li>
							<li>Glen Hume</li>
							<li>Ouida Hylton</li>
							<li>Mazie Eby</li>
							<li>Blossom Greek</li>
							<li>Orval Cooney</li>
							<li>Elli Doubleday</li>
							<li>Darrick Reeser</li>
							<li>Sparkle Spargo</li>
							<li>Jeanette Poudrier</li>
							<li>Freeman Rahm</li>
							<li>Reynalda Wilmeth</li>
							<li>Santa Ravelo</li>
							<li>Leia Keener</li>
							<li>Sunshine Ralph</li>
							<li>Carli Mackay</li>
							<li>Phyliss Mccloud</li>
							<li>Asuncion Kearse</li>
							<li>Mercedez Kimbro</li>
							<li>Elanor Vanleer</li>
							<li>Glen Hume</li>
							<li>Ouida Hylton</li>
							<li>Mazie Eby</li>
							<li>Blossom Greek</li>
							<li>Orval Cooney</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="duvidas">
			<div class="container">
				<div class="row">
					<h2>dúvidas?</h2>
					<button>saiba mais aqui</button>
				</div>
			</div>
		</div>
	</div>
  
<?php
  get_footer();
?>