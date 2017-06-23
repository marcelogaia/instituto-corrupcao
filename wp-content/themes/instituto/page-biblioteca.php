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
					<a href="https://is.gd/InG6QB">
						<div class="wp-video">
							<img src="img/article-placeholder.jpg">
						</div>
						<h4><?php the_short_text("Especialistas divergem em debate sobre o foro privilegiado",45); ?></h4>
						<p><?php the_short_text("Já está no ar a íntegra do debate que foi realizado na última quarta-feira, no jornal Folha de S. Paulo, sobre o foro privilegiado para políticos. A discussão foi polêmica e os participantes apresentaram pontos de vistas bastante divergentes. O presidente do INAC, Roberto Livianu, foi um dos especialistas convidados.",205); ?></p>
					</a>
				</li>
				<li>
					<a href="http://globosatplay.globo.com/globonews/v/5734082/">
						<div class="wp-video">
							<img src="img/article-placeholder.jpg">
						</div>
						<h4><?php the_short_text("Os bastidores da maior movimentação contra a Lava-Jato, no dia em ela completa 3 anos",45); ?></h4>
						<p><?php the_short_text("O programa Política no Brasil, da Globo News, exibiu ontem um especial sobre os bastidores da Operação Lava Jato, além de discutir o que é Caixa 1 e Caixa 2. O presidente do INAC, Roberto Livianu, foi um dos entrevistados.",205); ?></p>
					</a>
				</li>
				<li>
					<a href="https://youtu.be/vYmJEW7E05s">
						<div class="wp-video">
							<img src="https://img.youtube.com/vi/vYmJEW7E05s/mqdefault.jpg">
						</div>
						<h4><?php the_short_text("Lázaro Ramos entrevista Leandro Karnal no Espelho",45); ?></h4>
						<p><?php the_short_text('O historiador e professor Leandro Karnal concedeu uma entrevista ao ator Lázaro Ramos, no programa Espelho, do Canal Brasil, na qual ele falou sobre corrupção. Em suas palavras, "não existe governo corrupto numa nação ética, e não existe nação corrupta com governo transparente e democrático".',205); ?></p>
					</a>
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
					<h4>Impactos econômicos devem ser considerados no combate à corrupção</h4>
					<p>Para o professor do Departamento de Filosofia e Teoria Geral do Direito da USP, Rafael Diniz, o combate à corrupção também deve promover e enfocar um amplo diálogo sobre os malefícios socioeconômicos que a prática gera à nação. Confira a entrevista que ele concedeu ao jornal da universidade.</p>
					<a href="https://is.gd/rgaAX1"></a><button class="btn btn-default">ler mais</button>
				</li>
				<li>
					<img src="img/article-placeholder.jpg">
					<h4>Os desafios para vencer a corrupção no Brasil</h4>
					<p>Para cientistas políticos e sociólogos, apesar de ter começado a “gritar por transparência e ética na política”, a sociedade brasileira ainda tem dificuldade para escolher seus representantes. Nesta reportagem do Jornal do Commercio de Pernambuco, eles alertam para questões fundamentais.</p>
					<a href="https://is.gd/tYLvUF"></a><button class="btn btn-default">ler mais</button>
				</li>
				<li>
					<img src="img/article-placeholder.jpg">
					<h4>O cálculo econômico da corrupção: incentivos e comportamento de políticos e empresários</h4>
					<p>Nesta entrevista ao jornal Nexo, o professor de Teoria dos Jogos, Economia Política Positiva e Microeconomia da Universidade de Brasília, Mauricio Bugarin, fala sobre o cálculo econômico da corrupção e o que determina os limites do poder público na negociação de uma delação.</p>
					<a href="https://is.gd/6zgXYT"></a><button class="btn btn-default">ler mais</button>
				</li>
				<li>
					<img src="img/article-placeholder.jpg">
					<h4>A ideia de que 'prender todo mundo' acaba com a corrupção é ingênua, diz cientista político</h4>
					<p>Para o economista e cientista político Bruno Pinheiro Wanderley Reis, "prender corruptos não significa extinguir a corrupção". (...) "Você tem que combater a corrupção, sim, é uma tarefa permanente do Estado, mas é mais ou menos como empresa de computação criando antivírus. Ela não vai conseguir extinguir os vírus. Ela vai fazer antivírus o tempo todo. Isso não tem um ponto de chegada". Confira a entrevista concedida à BBC Brasil.</p>
					<a href="https://is.gd/lLQbeI"></a><button class="btn btn-default">ler mais</button>
				</li>
			</ul>
		</div>
	</section>

	<section id="livros" class="biblioteca">
		<div class="container">

			<h3>Livros</h3>
			<ul class="slick-carousel-biblioteca">
				<li>
					<img src="img/Livros/Deltan.jpg">
					<!-- <button class="btn btn-default">comprar</button> -->
					<button class="btn btn-warning">ver mais</button>
				</li>
				<li>
					<img src="img/Livros/Instituto.jpg">
					<!-- <button class="btn btn-default">comprar</button> -->
					<button class="btn btn-warning">ver mais</button>
				</li>
				<li>
					<img src="img/Livros/Luiz_Flavio.png">
					<!-- <button class="btn btn-default">comprar</button> -->
					<button class="btn btn-warning">ver mais</button>
				</li>
			</ul>
		</div>
	</section>

	<section id="iniciativas" class="biblioteca">
		<div class="container">

			<h3>painel de iniciativas</h3>
			<ul class="slick-carousel-biblioteca">
				<li>
					<img src="img/initiative-placeholder.jpg">
					<h4>Diga NÃO à Lei de Abuso de Autoridade!</h4>
					<p>“Sem Promotores e Juízes que possam livremente interpretar a lei não se distribui justiça. O cidadão é protegido por eventuais equívocos pelo sistema de duplo grau de jurisdição. De toda decisão cabe recurso. E no Brasil, como temos o STJ e o STF, na verdade temos quatro graus.
					</p>
					<p>Sem justiça independente compromete-se o conceito elementar da tripartição do poder de Montesquieu assim como há desrespeito frontal ao princípio constitucional da separação de poderes”. Confira o artigo do presidente do Inac, Roberto Livianu, na íntegra</p>
					<a href="https://is.gd/gDC5fG" target="_blank">https://is.gd/gDC5fG</a>
				</li>
				<li>
					<img src="img/initiative-placeholder.jpg">
					<h4>De Real para Realidade</h4>
					<p>Já está no ar a plataforma digital “De Real para Realidade”, criada pela agência de publicidade FCB Brasil para o jornal O Estado de S. Paulo. O projeto pretende mostrar aos leitores os custos da corrupção para a população brasileira. Para isso, o site converte automaticamente o valor informado nas notícias relacionadas a denúncias de corrupção e mostra o que o dinheiro que foi desviado poderia representar em merenda escolar, medicamentos, ambulâncias e quadras esportivas, dentre outros.</p>
					<a href="http://derealpararealidade.com.br/" target="_blank">http://derealpararealidade.com.br/</a>
				</li>
				<li>
					<img src="img/initiative-placeholder.jpg">
					<h4>Lava JOTA</h4>
					<p>Está no ar a nova plataforma Lava JOTA, o maior banco de dados públicos sobre a Operação Lava Jato. A equipe do portal Jota reuniu nessa página mais de 900 ações relacionadas à operação, oferecendo um buscador por palavras-chave diretamente dentro de cada um dos milhões de documentos produzidos nos processos.</p>
					<a href="https://jota.info/lavajota/" target="_blank">https://jota.info/lavajota/</a>
				</li>
				<li>
					<img src="img/initiative-placeholder.jpg">
					<h4>Imagens contra a Corrupção</h4>
					<p>Em Portugal, o Conselho de Prevenção da Corrupção, um organismo ligado ao Tribunal de Contas, criou um concurso para chamar a atenção das escolas de ensino fundamental e médio para o combate ao crime. Intitulado "Imagens contra a Corrupção", a última edição recebeu 120 inscrições, todas enviadas por alunos. O objetivo é “contribuir para a criação de espaços de reflexão dentro da comunidade escolar e na sociedade”.</p>
					<a href="https://is.gd/szjriz" target="_blank">https://is.gd/szjriz</a>
				</li>
				<li>
					<img src="img/initiative-placeholder.jpg">
					<h4>Datapedia</h4>
					<p>Está no ar a plataforma Datapedia, que é uma janela única com os dados públicos e oficiais de municípios e distritos do país. Pelo projeto, as informações de diversas fontes de 5570 localidades são coletadas, organizadas, traduzidas e disseminadas, buscando uma apresentação mais amigável, com análises e contexto.</p>
					<a href="http://www.datapedia.info" target="_blank">http://www.datapedia.info</a>
				</li>
			</ul>
		</div>
	</section>
	
  
<?php
  get_footer();
?>