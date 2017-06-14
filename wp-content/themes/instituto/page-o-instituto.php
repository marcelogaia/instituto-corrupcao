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
							<div class="wp-video" style="border: none;">
                <iframe width="560" height="315" src="http://www.youtube.com/embed/-g6AUHINKs4" frameborder="0" allowfullscreen></iframe>
              </div>
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
					<h2>Diretoria e Conselhos</h2>
					<div>
						<h3>O INAC é administrado por uma Diretoria Executiva que faz a gestão das tarefas do dia-a-dia, e que responde ao Conselho Estratégico, cuja função é definir os rumos do Instituto. Há ainda o Conselho de Novos Associados e Compliance que discute as questões ligadas a esses temas.</h3>
						<ul class="legend">
							<li style="text-align: center;">Diretoria</li>
							<li style="text-align: center;">Conselhos</li>
						</ul>
						<div class="mCustomScrollbar diretoria-scroll" data-mcs-theme="minimal-dark">
							<ul>
<?php
	query_posts( array(
		'post_type' => "pt_diretoria",
		'order' => "ASC", 
		'posts_per_page'   => -1, 
		'numberposts'	   => -1
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
		</div>
		<div class="fundadores-associados" >
			<div class="container">
				<div class="row">
					<h2>Fundadores &#038; Associados</h2>
					<p>Entre nossos fundadores e associados estao os seguintes:</p>
					<div class="mCustomScrollbar founders-list" data-mcs-theme="minimal">
						<ul>
							<?php 
							query_posts( array(	'post_type' => 'pt_fundadores',
								'order' => "ASC", 
								'posts_per_page'   => -1, 
								'numberposts'	   => -1

							));
							$count = 0;
							while(have_posts()): the_post(); ?>
							<li<?= $count < 3 ? ' class="top3"' : "" ?>><?php the_title(); ?> <span class="white">(<?php 
									
									$type = get_field('tipo_de_colaborador');
									if(in_array('associado',$type)) echo "A";
									if(in_array('fundador',$type)) echo "F";
									
									?>)</span></li>
							<?php
							$count++;
							endwhile; ?>
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
						<p>Para baixar nosso balancete, escolha o período que gostaria de ver.</p>
						<p>
							<select class="selectpicker" data-style="btn-warning" name="" id="">
								<option value="">2015  |  2º Semestre</option>
							</select>
							<button class="bt-ok">OK</button>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="parceiros" >
			<span id="parceiros"><!-- temp anchor --></span>
			<div class="container">
				<h2>Parceiros</h2>
				<p class="col-sm-8 col-sm-offset-2">Agradecemos às empresas que se engajaram e de alguma forma contribuíram para o sucesso de nossos projetos. Faça parte desta lista.</p>
				<div class="row">
					<h4>Ouro</h4>
					<ul class="slick-carousel-ouro">
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Ouro/ITAU.jpg"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Ouro/MULTIPLAN.png"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Ouro/Siemens.png"></a></li>
					</ul>

					<h4>Prata</h4>
					<ul class="slick-carousel-prata">
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Prata/BMS_BRYSTOL.png"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Prata/INDOORMIDIA.jpg"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Prata/INSTITUTO_BETTY_JACOB_LAFER.png"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Prata/INSTITUTO_JATOBAS.jpg"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Prata/JOTA.png"></a></li>
					</ul>
					<h4>Bronze</h4>
					<ul class="slick-carousel-bronze">
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Bronze/APMP.png"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Bronze/BLS.jpg"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Bronze/DEFENSORIA_SP.jpg"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Bronze/KLA.jpg"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Bronze/MARCIO_ROSENBERG.jpeg"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Bronze/MP_SP.png"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Bronze/NAVARRO_ADVOGADOS.png"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Bronze/NEO_LAW.png"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Bronze/OAB_SP.jpg"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Bronze/QUARTIER_LATIN.jpg"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Bronze/TJ_SP.jpg"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Bronze/S2_Consultoria.png"></a></li>
						<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Bronze/Staples.png"></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="obrigado" >
			<div class="container">
				<div class="row">
					<h2>A todos que de alguma forma vêm nos ajudando a enfrentar a corrupção:</h2>
					<div><h2>muito obrigado!</h2></div>
					<div class="mCustomScrollbar founders-list" data-mcs-theme="minimal">
						<ul>
							<li class="top3">ABJ - Associação Brasileira de Jurimetria</li>
							<li class="top3">ACMP - Associação Catarinense do Ministério Público</li>
							<li class="top3">Ademar Bueno</li>
							<li>AGMP - Associação Goiana do Ministério Público </li>
							<li>AMMP - Associação Mato-Grossense do Ministério Público</li>
							<li>AMPAC - Associação do Ministério Público do Acre</li>
							<li>AMPAP - Associação do Ministério Público do estado do Amapá</li>
							<li>Ampem - Associação do Ministério Público do estado do Maranhão</li>
							<li>AMPEP - Associação do Ministério Público do estado do Pará</li>
							<li>Amper - Associação do Ministério Público do Estado de Roraima</li>
							<li>Amperj - Associação do Ministério Público do Estado do Rio de Janeiro</li>
							<li>AMPRO - Associação do Ministério Público de Rondônia</li>
							<li>Antonio Roque Citadini</li>
							<li>APMP - Associação Paulista do Ministério Público</li>
							<li>ASMMP - Associação Sul-Mato-Grossense dos Membros do Ministério Público</li>
							<li>ASMP Associação Sergipana do Ministério Público</li>
							<li>Associação Espírito-Santense do Ministério Público</li>
							<li>Associação Paraibana do Ministério Público</li>
							<li>Associação Paranaense do Ministério Público </li>
							<li>ATMP - Associação Tocantinense do Ministério Público</li>
							<li>Banco Itaú</li>
							<li>Belisa Figueiró</li>
							<li>BLS - Brazilian Legal Society (NYU)</li>
							<li>BRISTOL MEYERS SQUIBB</li>
							<li>CADENCE</li>
							<li>Carlos Ayres Britto</li>
							<li>Carlos Melo</li>
							<li>Carolina Carrijo</li>
							<li>Casa do Saber</li>
							<li>CDN Comunicação</li>
							<li>CET - Companhia de Engenharia de Tráfego</li>
							<li>Claudia Rolli</li>
							<li>Clóvis de Barros Filho</li>
							<li>CONACI - CONSELHO NACIONAL DE CONTROLE INTERNO</li>
							<li>Defensoria Pública do Estado de São Paulo</li>
							<li>Denise Auad</li>
							<li>Dona Deôla</li>
							<li>Editora Quartier Latin</li>
							<li>Edson Vismona</li>
							<li>Edy Castro</li>
							<li>Eliane Macedo Ferreira da Silva</li>
							<li>Escola de Formação e Aperfeiçoamento dos Professores</li>
							<li>Eunice Prudente</li>
							<li>Fabiano Angélico</li>
							<li>Fernando Cavalcanti</li>
							<li>Fernando Mello</li>
							<li>FPA - Federação Paulista de Atletismo</li>
							<li>General Mills</li>
							<li>Gianpaolo Smanio</li>
							<li>Gil Catello Branco</li>
							<li>GRUPO GEIA</li>
							<li>Guilherme Esteves</li>
							<li>Guilherme Siqueira de Carvalho</li>
							<li>Gustavo Nishi</li>
							<li>Gustavo Ungaro</li>
							<li>Humberto Dantas</li>
							<li>Indoormidia</li>
							<li>Instituto Ethos</li>
							<li>Instituto Novo Eleitoral - Rio Grande do Norte</li>
							<li>Intituto Betty e Jacob Lafer</li>
							<li>Joara Marchezini</li>
							<li>Jorge Negreiros</li>
							<li>José Álvaro Moisés</li>
							<li>JOTA</li>
							<li>Julio Marcelo de Oliveira</li>
							<li>KLA - Koury Lopes Advogados</li>
							<li>Levi de Mello</li>
							<li>Luis Paulo Rosenberg</li>
							<li>Luis Roberto Barroso</li>
							<li>Luiz Eduardo Soares</li>
							<li>Marcelo Soares</li>
							<li>Márcio Rosenberg</li>
							<li>Marco Aurélio Martorelli</li>
							<li>Marcos Fernandes</li>
							<li>Maria Inês Fornazaro</li>
							<li>Mariana Cordiviola</li>
							<li>Marina Citron</li>
							<li>Ministério Público do Estado de São Paulo</li>
							<li>MO&PC</li>
							<li>Monica Waldvogel</li>
							<li>MPD - Movimento do Ministério Público Democrático</li>
							<li>MULTIPLAN</li>
							<li>NAVARRO ADVOGADOS</li>
							<li>Nuno Coimbra Mesquita</li>
							<li>OAB</li>
							<li>Ouvidria Geral do Governo do Estado de São Paulo</li>
							<li>PONTAL TELECOM</li>
							<li>Professor Luis Candido Rodrigues Maia e Equipe</li>
							<li>Rede do Saber</li>
							<li>REDE GLOBO</li>
							<li>Ronaldo da Costa</li>
							<li>SEAC - SINDICATO DAS EMPRESAS DE ACEIO E CONSERVAÇÃO</li>
							<li>Secretaria de Educação do Estado de São Paulo</li>
							<li>SESI - Serviço Social da Insdústria</li>
							<li>SESVESP - SINDICATO DAS EMPRESAS DE SEGURANÇA PRIVADA, SEGURANÇA ELETRÔNICA E </CURSOS DE 	<li>FORMAÇÃO DO ESTADO DE SÃO PAULO</CURSOS>
							<li>SIEMENS</li>
							<li>SindusCon SP</li>
							<li>Staples</li>
							<li>Transparência Internacional</li>
							<li>Tribunal de Contas do Estado de São Paulo </li>
							<li>Tribunal de Justiça de São Paulo</li>
							<li>UNIMED</li>
							<li>Vander Giordano</li>
							<li>Vera Moreira Comunicação</li>
							<li>VONEX</li>
							<li>Afonso Ghizzo Neto</li>
							<li>Alexandra Fuchs de Araújo  </li>
							<li>Alexandre Jorge Carneiro da Cunha Filho</li>
							<li>Aline Bertolin</li>
							<li>Álvaro A. C. Mariano</li>
							<li>Alvaro Garcia Ortiz </li>
							<li>André Petzhold Dias</li>
							<li>Bruno Grego Santos </li>
							<li>Bruno Mitsuo Nagata</li>
							<li>Daniela Castro </li>
							<li>Dimas Eduardo Ramalho</li>
							<li>Emílio Carazzai</li>
							<li>Eric Alt</li>
							<li>Felipe Mêmolo Portela</li>
							<li>Fernando Mello</li>
							<li>Fernando Menezes de Almeida</li>
							<li>Fernão Borba Franco</li>
							<li>Gianpaolo Poggio Smanio</li>
							<li>Gláucio Roberto Brittes de Araújo</li>
							<li>Glauco Costa Leite</li>
							<li>Gustavo Henrique Justino de Oliveira</li>
							<li>Heleno Taveira Torres</li>
							<li>Henrique Magalhães Filogonio</li>
							<li>Isabel Franco </li>
							<li>Jarbas Luiz dos Santos</li>
							<li>Jose Alvaro Moises</li>
							<li>José Antônio Apparecido Júnior</li>
							<li>José Jair Marques Júnior</li>
							<li>José Vicente de Azevedo Pires Barreto Fonseca</li>
							<li>Julio Marcelo de Oliveira </li>
							<li>Karen Louise Jeanette Kahn </li>
							<li>Kleber Luiz Zanchim</li>
							<li>Laura  Diniz </li>
							<li>Luis  Paulo Rosemberg</li>
							<li>Luis Francisco Segantin Junior</li>
							<li>Luis Manuel Fonseca Pires</li>
							<li>Luiz Felipe Hadlich Miguel</li>
							<li>Márcio Ferro Catapani</li>
							<li>Marcos Alexandre Coelho Zilli</li>
							<li>Marcos Augusto Perez</li>
							<li>Modesto Carvalhosa</li>
							<li>Nivaldo Adão Ferreira Júnior</li>
							<li>Patrícia Maria Nogueira</li>
							<li>Rafael Bistafa</li>
							<li>Rafael Francisco Marcondes de Moraes</li>
							<li>Rafael Hamze Issa</li>
							<li>Rafael Lessa Vieira de Sá Menezes</li>
							<li>Renato Ribeiro de Almeida</li>
							<li>Rita de Cássia Biason</li>
							<li>Roberto Livianu</li>
							<li>Roberto Ricomini Piccelli</li>
							<li>Roberto Romano da Silva </li>
							<li>Robinson Fernandes</li>
							<li>Rodrigo de Pinho Bertoccelli</li>
							<li>Sergio Fernando Moro</li>
							<li>Ulisses Pascolati Júnior</li>
							<li>Wilson Accioli de Barros Filho</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="duvidas">
			<div class="container">
				<div class="row">
					<h2>dúvidas?</h2>
					<a href="<?= site_url('duvidas') ?>"><button>saiba mais aqui</button></a>
				</div>
			</div>
		</div>
	</div>

<?php
  get_footer();
?>
