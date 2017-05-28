<?php get_template_part('header-project'); ?>
<section id="single-projeto">
	<section class="summary">
		<div class="featured-picture" style="background-image: url(<?php the_post_thumbnail_url() ?>);"><!-- --></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<span class="status">Realizados</span>
					<span class="date">13 de Agosto de 2016</span>

					<h2>3ª Corrida e Caminhada Contra a Corrupção</h2>

					<p>O Instituto Não Aceito Corrupção, a Secretaria da Educação do Estado de São Paulo e a Ouvidoria-Geral do Estado de São Paulo lançaram na última sexta-feira (29) a primeira edição da ação “Diálogos”. A iniciativa consiste em um ciclo de palestras sobre temas que abordam o acesso à informação e as ferramentas disponíveis para a obtenção dos dados pretendidos. Por exemplo, informações sobre orçamento do Poder Público, a cultura de transparência e seus reflexos positivos para a qualidade da democracia e o controle social, por meio da atuação das ONGs.</p>

					<span class="previous">Edições Anteriores</span>
					<ul class="previous-items">
						<li><a href="javascript:void(0);">2015</a></li>
						<li><a href="javascript:void(0);">2014</a></li>
					</ul>
				</div>
			</div>
			<div class="row texts">
				<div class="col-sm-4 col-xs-12">
					<h3>Problema Abordado</h3>
					<p>O Instituto Não Aceito Corrupção, a Secretaria da Educação do Estado de São Paulo e a Ouvidoria Geral do Estado de São Paulo lançaram na última sexta-feira (29) a primeira edição da ação Diálogos.</p>
				</div>
				<div class="col-sm-4 col-xs-12">
					<h3>Resultados Esperados</h3>
					<p>O Instituto Não Aceito Corrupção, a Secretaria da Educação do Estado de São Paulo e a Ouvidoria Geral do Estado de São Paulo lançaram na última sexta-feira (29) a primeira edição da ação Diálogos.</p>
				</div>
				<div class="col-sm-4 col-xs-12">
					<h3>Público Alvo</h3>
					<p>O Instituto Não Aceito Corrupção, a Secretaria da Educação do Estado de São Paulo e a Ouvidoria Geral do Estado de São Paulo lançaram na última sexta-feira (29) a primeira edição da ação Diálogos.</p>
				</div>
			</div>
			<div class="custo-prazo">
				<div>Custo <span class="value"><span>R$</span>1.500.000,00</span></div>
				<div>Previsão de Lançamento <span class="value">20/11/2017</span></div>
			</div>
		</div>
<?php
	$socialArr = array();

	if(!empty($GLOBALS['cgv']['linkedin'])) $socialArr['linkedin'] = $GLOBALS['cgv']['linkedin'];
	if(!empty($GLOBALS['cgv']['facebook'])) $socialArr['facebook'] = $GLOBALS['cgv']['facebook'];
	if(!empty($GLOBALS['cgv']['twitter'])) $socialArr['twitter'] = $GLOBALS['cgv']['twitter'];
	if(!empty($GLOBALS['cgv']['instagram'])) $socialArr['instagram'] = $GLOBALS['cgv']['instagram'];
	if(!empty($GLOBALS['cgv']['google-plus'])) $socialArr['google-plus'] = $GLOBALS['cgv']['google-plus'];

	if(!empty($socialArr)):
?>
		<div class="social">
			<ul>
				<li class="share"><!-- --></li>
				<li><a href="<?= $socialArr['linkedin'] ?>" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="<?= $socialArr['facebook'] ?>" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="<?= $socialArr['twitter'] ?>" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="<?= $socialArr['instagram'] ?>" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
				<li><a href="<?= $socialArr['google-plus'] ?>" title="Google+" target="_blank"><i class="fa fa-google-plus"></i></a></li>
				<!-- <li><a href="javascript:void(0);"><img src="" alt=""></a></li> -->
			</ul>
		</div>
<?php endif; ?>
	</section>

	<section class="results">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h3>Resultados</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut egestas mauris ac dui faucibus dictum. Morbi at est leo. Maecenas iaculis dolor libero, non hendrerit turpis porta id. Ut malesuada lacinia mi, ut sollicitudin nunc blandit a. Cras ac convallis tellus. Integer quis sollicitudin lacus, id molestie leo. Curabitur convallis congue blandit. Aliquam at ornare nulla. Nulla et massa vitae enim luctus laoreet. Praesent convallis turpis quis quam sagittis venenatis. Nulla elementum efficitur eros, ut commodo nisi condimentum accumsan. Sed molestie ipsum sed convallis gravida. Ut id sagittis turpis, ac auctor est. Nunc egestas, ex et mollis consectetur, libero nibh laoreet lacus, sed mattis leo velit mattis arcu. Proin metus enim, volutpat vitae iaculis vel, luctus sed neque.</p>
					<p>Aenean tincidunt nisl mi, et fermentum lorem posuere ac. Integer eleifend augue ut magna venenatis, non faucibus libero maximus. Nam tincidunt vel tortor euismod cursus. Nulla et iaculis quam. Vivamus maximus ligula lorem, vitae ultricies tellus pulvinar nec. Quisque facilisis luctus arcu, ac semper turpis. Mauris ut orci eu lacus accumsan tempus non egestas sem. Aliquam erat volutpat. Etiam varius id massa at vulputate. Proin blandit massa nec nisi sodales commodo. In facilisis ipsum metus, eu semper ipsum dictum non. Mauris luctus ligula et nisi viverra tincidunt. Maecenas accumsan augue vitae fringilla ultricies.</p>
				</div>
				<div class="col-xs-12 col-sm-6">
					<h4>Tabela de Whatever</h4>
					<img src="img/projects-table1.png" alt="">
				</div>
				<div class="col-xs-12 col-sm-6">
					<h4>Tabela de Whatever mais extendida e recheada de informações</h4>
					<img src="img/projects-table2.png" alt="">
				</div>
			</div>
		</div>
	</section>
	
	<section class="video">
		<div class="container">
			<iframe src="https://www.youtube.com/embed/rDtIqCuDTlQ"></iframe>
		</div>
	</section>

	<section class="pictures">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ul class="slick-project">
					<?php for($i = 0; $i < 6; $i++): ?>
						<li style="background: url(img/project-picture1.jpg)">
							<a href="javascript:void(0);">
								<h4>O Instituto Não Aceito Corrupção, a Secretaria da Educação do Estado de São Paulo e a Ouvidoria-Geral do Estado de São Paulo lançaram na última sexta-feira (29) a primeira edição da ação “Diálogos”.</h4>
							</a>
						</li>
					<?php endfor; ?>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="news">
		<div class="container">
			<h3>Na Imprensa</h3>
			<p><b>13/11/17</b> | O Instituto Não Aceito Corrupção, a Secretaria da Educação do Estado de São Paulo e a Ouvidoria-Geral do Estado de São Paulo lançaram na última sexta-feira (29) a primeira edição da ação “Diálogos”.</p>
			<p><b>13/11/17</b> | O Instituto Não Aceito Corrupção, a Secretaria da Educação do Estado de São Paulo e a Ouvidoria-Geral do Estado de São Paulo lançaram na última sexta-feira (29) a primeira edição da ação “Diálogos”.</p>
			<p><b>13/11/17</b> | O Instituto Não Aceito Corrupção, a Secretaria da Educação do Estado de São Paulo e a Ouvidoria-Geral do Estado de São Paulo lançaram na última sexta-feira (29) a primeira edição da ação “Diálogos”.</p>
			<p><b>13/11/17</b> | O Instituto Não Aceito Corrupção, a Secretaria da Educação do Estado de São Paulo e a Ouvidoria-Geral do Estado de São Paulo lançaram na última sexta-feira (29) a primeira edição da ação “Diálogos”.</p>
			<p><b>13/11/17</b> | O Instituto Não Aceito Corrupção, a Secretaria da Educação do Estado de São Paulo e a Ouvidoria-Geral do Estado de São Paulo lançaram na última sexta-feira (29) a primeira edição da ação “Diálogos”.</p>
			<p><b>13/11/17</b> | O Instituto Não Aceito Corrupção, a Secretaria da Educação do Estado de São Paulo e a Ouvidoria-Geral do Estado de São Paulo lançaram na última sexta-feira (29) a primeira edição da ação “Diálogos”.</p>
			<p><b>13/11/17</b> | O Instituto Não Aceito Corrupção, a Secretaria da Educação do Estado de São Paulo e a Ouvidoria-Geral do Estado de São Paulo lançaram na última sexta-feira (29) a primeira edição da ação “Diálogos”.</p>
			<p><b>13/11/17</b> | O Instituto Não Aceito Corrupção, a Secretaria da Educação do Estado de São Paulo e a Ouvidoria-Geral do Estado de São Paulo lançaram na última sexta-feira (29) a primeira edição da ação “Diálogos”.</p>
			<p><b>13/11/17</b> | O Instituto Não Aceito Corrupção, a Secretaria da Educação do Estado de São Paulo e a Ouvidoria-Geral do Estado de São Paulo lançaram na última sexta-feira (29) a primeira edição da ação “Diálogos”.</p>
			<p><b>13/11/17</b> | O Instituto Não Aceito Corrupção, a Secretaria da Educação do Estado de São Paulo e a Ouvidoria-Geral do Estado de São Paulo lançaram na última sexta-feira (29) a primeira edição da ação “Diálogos”.</p>
		</div>
	</section>

	<section class="staff">
		<div class="container">
			<ul class="slick-project-staff">
				<li>
					<img src="img/project-staff-face.jpg" alt="">
					<h4>Monica Braizat</h4>
					<h5>Diretora de Mkt | Unilever</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget sem lacus. Ut porta feugiat finibus. Maecenas faucibus enim quis laoreet dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis lacinia augue. Duis posuere varius aliquet. Pellentesque elit sapien, volutpat id venenatis sit amet, scelerisque sit amet urna. Praesent nec feugiat justo. Quisque vitae egestas lectus, a blandit quam. Proin viverra porta eros quis dignissim. Maecenas auctor nisl ut quam dictum, id aliquam ligula luctus. Morbi pulvinar augue nec leo dictum efficitur. Mauris scelerisque felis efficitur porta viverra.</p>
					<a href="javascript:void(0);">www.unilever.com.br</a>
				</li>
			</ul>
		</div>
	</section>

	<section class="timeline">
		<div class="container">
			<ul>
				<?php for($i = 0; $i < 6; $i++): ?>
				<li>
					<span class="date-label">
						<b>15<?php //the_time('d'); ?></b> 
						JUN<?php //the_time('M Y'); ?>
					</span>
					<h4>Projeto finalizado com successo!</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget sem lacus. Ut porta feugiat finibus. Maecenas faucibus enim quis laoreet dictum. Lorem ipsum dolor sit amet.</p>
				</li>
				<?php endfor; ?>
				<li><span class="year">2016</span></li>
			</ul>
		</div>
	</section>

	<section class="other">
		<div class="container">
			<ul class="row">
				<li class="col-sm-4">
					<a href="javascript:void(0);">
						<img src="img/initiative-placeholder.jpg<?php //get_the_post_thumbnail_url() ?>" alt="">
						<h4>
							<i class="fa fa-caret-right" aria-hidden="true"></i>
							um titulo para o projeto com maximo duas linhas<?php //the_short_title(35) ?>
						</h4>
						<span class="date-time">13 de Agosto de 2016 <?php //the_time('d \d\e F \d\e Y | G:i' ); ?></span>
					</a>
				</li>
				<li class="col-sm-4">
					<a href="javascript:void(0);">
						<img src="img/initiative-placeholder.jpg<?php //get_the_post_thumbnail_url() ?>" alt="">
						<h4>
							<i class="fa fa-caret-right" aria-hidden="true"></i>
							um titulo para o projeto com maximo duas linhas<?php //the_short_title(35) ?>
						</h4>
						<span class="date-time">13 de Agosto de 2016 <?php //the_time('d \d\e F \d\e Y | G:i' ); ?></span>
					</a>
				</li>
				<li class="col-sm-4">
					<a href="javascript:void(0);">
						<img src="img/initiative-placeholder.jpg<?php //get_the_post_thumbnail_url() ?>" alt="">
						<h4>
							<i class="fa fa-caret-right" aria-hidden="true"></i>
							um titulo para o projeto com maximo duas linhas<?php //the_short_title(35) ?>
						</h4>
						<span class="date-time">13 de Agosto de 2016 <?php //the_time('d \d\e F \d\e Y | G:i' ); ?></span>
					</a>
				</li>
			</ul>
		</div>
	</section>
</section>
<?php
  get_footer();
?>