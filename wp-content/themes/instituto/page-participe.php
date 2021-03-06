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
					<p>Seja um embaixador, ajude a divulgar a causa e os projetos do instituto em suas redes sociais, compartilhando nossos conteúdos e postagens.</p>
				</li>
				<li class="col-sm-10 col-sm-offset-1">
					<h4>Doador</h4>
					<p>Precisamos sempre de recursos financeiros para viabilizar nossos projetos e os custos institucionais. Faça uma doação, é simples e seguro.</p>
				</li>
				<li class="col-sm-10 col-sm-offset-1">
					<h4>Voluntário</h4>
					<p>Você também pode doar seu tempo, sua energia, sua experiência e conhecimento para nos ajudar a viabilizar nossos projetos de combate à corrupção.</p>
				</li>
			</ul>
		</div>
	</section>
	<section class="buscamos">
		<div class="container">
			<h3 class="general-title">buscamos embaixadores</h3>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-1 seja-embaixador">
					<p>Que tal ajudar no combate à corrupção apertando algumas vezes o botão de compartilhar em suas redes sociais? É esse convite que queremos fazer para você hoje. Se torne um embaixador digital do Instituto Não Aceito Corrupção, é fácil e o resultado para a causa é imenso.O embaixador digital tem como função ajudar a divulgar nossos conteúdos para que nossa mensagem alcance o máximo de pessoas possível. Para se tornar embaixador é muito simples, basta seguir todos os canais sociais do Instituto, baixar nosso Kit de Imagens para personalizar seus canais sociais e começar a compartilhar nossos conteúdos. Quanto mais pessoas engajadas maior o impacto da nossa luta, contamos com você!</p>
				</div>
				<a href="javascript:void(0);">
					<div class="baixar-wrapper">
							<span>baixar</span><span>Kit de imagens</span><span>INAC</span>
					</div>
				</a>
			</div>

			<div class="wp-video" style="border:none;">
				<center><iframe width="560" height="315" src="https://www.youtube.com/embed/-g6AUHINKs4" frameborder="0" allowfullscreen></iframe></center>
			</div>
<?php
	$socialArr = array();

	if(!empty($GLOBALS['cgv']['linkedin'])) $socialArr['linkedin'] = $GLOBALS['cgv']['linkedin'];
	if(!empty($GLOBALS['cgv']['facebook'])) $socialArr['facebook'] = $GLOBALS['cgv']['facebook'];
	if(!empty($GLOBALS['cgv']['twitter'])) $socialArr['twitter'] = $GLOBALS['cgv']['twitter'];
	if(!empty($GLOBALS['cgv']['instagram'])) $socialArr['instagram'] = $GLOBALS['cgv']['instagram'];
	if(!empty($GLOBALS['cgv']['google-plus'])) $socialArr['google-plus'] = $GLOBALS['cgv']['google-plus'];
	if(!empty($GLOBALS['cgv']['youtube'])) $socialArr['youtube'] = $GLOBALS['cgv']['youtube'];

	if(!empty($socialArr)):
?>
			<h4>conecte-se com nossas redes</h4>
			<ul class="social">
	<?php if(!empty($socialArr['linkedin'])): ?>
				<li class="linkedin"><a href="<?= $socialArr['linkedin'] ?>">LINKEDIN</a></li>
	<?php endif; ?>
	<?php if(!empty($socialArr['facebook'])): ?>
				<li class="facebook"><a href="<?= $socialArr['facebook'] ?>">FACEBOOK</a></li>
	<?php endif; ?>
	<?php if(!empty($socialArr['twitter'])): ?>
				<li class="twitter"><a href="<?= $socialArr['twitter'] ?>">TWITTER</a></li>
	<?php endif; ?>
	<?php if(!empty($socialArr['instagram'])): ?>
				<li class="instagram"><a href="<?= $socialArr['instagram'] ?>">INSTAGRAM</a></li>
	<?php endif; ?>
	<?php if(!empty($socialArr['google-plus'])): ?>
				<li class="gplus"><a href="<?= $socialArr['google-plus'] ?>">GOOGLE+</a></li>
	<?php endif; ?>
	<?php if(!empty($socialArr['youtube'])): ?>
				<li class="youtube"><a href="<?= $socialArr['youtube'] ?>">YOUTUBE</a></li>
	<?php endif; ?>
			</ul>
<?php endif; ?>
		</div>
	</section>
	<section class="quer-doar">
		<div class="container">
			<div class="row">
				<div>
					<header>
						<h3 class="general-title">quero doar</h3>
						<p>Somos um Instituto e dependemos de doações financeiras para continuar a promover o combate à corrupção. Contamos com você para continuarmos nossa luta. Veja abaixo nossas diferentes formas de doação.</p>
					</header>
					<ul class="items">
						<li class="direta">
							<h4><span>doação direta</span></h4>
							<div>
								<p>As doações direta nos ajudam a manter os custos fixos do Instituto em dia. Essas doações são para o pagamentos de nossa estrutura e equipe.</p>
								<img src="img/pagseguro-logo.png" alt="">
							</div>
							<!-- <a href="https://pag.ae/bkjpKBb" target="_blank"> -->
							<a href="<?= site_url('participe/doacao-direta') ?>" class="my-modal">
								<button>eu<br>quero</button>
							</a>
						</li>
						<li class="projetos">
							<h4><span>doar para <br>um de nossos projetos</span></h4>
							<div>
								<p>Outra forma de nos ajudar é doando diretamente para um de nossos projetos. Veja qual projeto que você mais se identifica e faça parte dessa realização.</p>
								<br>
								<label for="projeto">escolha o projeto</label>
								<select class="selectpicker" id="projeto" data-style="btn-warning" name="" id="">
									<option value="">2ª Corrida Anual</option>
									<option value="">2ª Corrida Anual</option>
									<option value="">2ª Corrida Anual</option>
								</select>
							</div>
							<a href="<?= site_url('participe/doacao-por-projeto') ?>" class="my-modal">
								<button>eu<br>quero</button>
							</a>
						</li>
						<li class="empresa">
							<h4><span>doação <br>por empresa</span></h4>
							<div>
								<p>Se você é uma empresa e deseja nos ajudar ao mesmo tempo que associa sua marca à nossa causa, esse é o formato ideal para fazer isso acontecer.</p>
							</div>
							<a href="<?= site_url('participe/doacao-por-empresa') ?>" class="my-modal">
								<button>eu<br>quero</button>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="voluntarios">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-xs-offset-2 seja-voluntario">
					<h3 class="general-title">precisamos de voluntários</h3>
					<p>Todas as habilidades e conhecimentos profissionais podem ser úteis à nossa luta. Se você quer ajudar, clique no botão abaixo e nos diga como pode contribuir!</p>
					<a href="<?= site_url('participe/seja-um-voluntario') ?>" class="my-modal"><button>quero ser um</button></a>
				</div>
			</div>
		</div>
	</section>
<?php
  get_footer();
?>
