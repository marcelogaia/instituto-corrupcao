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
	<section>
		<div class="container">
			<header class="col-sm-10 col-sm-offset-1">
				<h3 class="general-title">aqui você achará as respostas</h3>
				<p>Basta clicar em um dos campos ou procurar usando palavras chaves</p>
			</header>
			<form action="" class="search">
				<input type="text" placeholder="Buscar por palavra(s) chave(s)">
				<button>PROCURAR <i class="fa fa-search"></i></button>
			</form>
			<article class="pergunta row">
				<h4 data-toggle="collapse" data-target="#resposta-1" aria-expanded="true" aria-controls="resposta-1"><span>Porque é tão difícil achar as palavras certas para colocar nesses campos?</span></h4>
				<div id="resposta-1" class="col-sm-10 col-sm-offset-1 collapse in resposta">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dignissim, erat a mattis auctor, nibh odio consequat leo, a posuere dolor libero a eros. Integer iaculis augue arcu, ac vulputate massa scelerisque a. Donec posuere gravida odio, sed tristique nulla elementum et. Nam fermentum risus vitae vehicula imperdiet. Quisque tincidunt turpis tristique velit porttitor, sollicitudin molestie augue fermentum. Aenean et ante nec tellus rutrum feugiat sit amet nec odio. Maecenas vulputate ante vitae sagittis eleifend. Morbi dui lectus, lacinia eget nisl quis, cursus bibendum dolor. Praesent sit amet ex metus. Nam faucibus est sit amet iaculis commodo. Quisque aliquam mi vel erat dapibus, ut molestie enim blandit. Vivamus tincidunt quis neque et sodales. Vestibulum sed vulputate neque. Proin tristique mattis pulvinar. Nunc felis sapien, sollicitudin eget accumsan at, sagittis et ipsum.</p>
				</div>
			</article>
			<article class="pergunta row">
				<h4 data-toggle="collapse" data-target="#resposta-2" aria-expanded="false" aria-controls="resposta-2" class="collapsed"><span>E para achar as mesmas para uma linha só?</span></h4>
				<div id="resposta-2" class="col-sm-10 col-sm-offset-1 collapse resposta">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dignissim, erat a mattis auctor, nibh odio consequat leo, a posuere dolor libero a eros. Integer iaculis augue arcu, ac vulputate massa scelerisque a. Donec posuere gravida odio, sed tristique nulla elementum et. Nam fermentum risus vitae vehicula imperdiet. Quisque tincidunt turpis tristique velit porttitor, sollicitudin molestie augue fermentum. Aenean et ante nec tellus rutrum feugiat sit amet nec odio. Maecenas vulputate ante vitae sagittis eleifend. Morbi dui lectus, lacinia eget nisl quis, cursus bibendum dolor. Praesent sit amet ex metus. Nam faucibus est sit amet iaculis commodo. Quisque aliquam mi vel erat dapibus, ut molestie enim blandit. Vivamus tincidunt quis neque et sodales. Vestibulum sed vulputate neque. Proin tristique mattis pulvinar. Nunc felis sapien, sollicitudin eget accumsan at, sagittis et ipsum.</p>
				</div>
			</article>
			<article class="pergunta row">
				<h4 data-toggle="collapse" data-target="#resposta-3" aria-expanded="false" aria-controls="resposta-3" class="collapsed"><span>E para achar as mesmas para uma linha só?</span></h4>
				<div id="resposta-3" class="col-sm-10 col-sm-offset-1 collapse resposta">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dignissim, erat a mattis auctor, nibh odio consequat leo, a posuere dolor libero a eros. Integer iaculis augue arcu, ac vulputate massa scelerisque a. Donec posuere gravida odio, sed tristique nulla elementum et. Nam fermentum risus vitae vehicula imperdiet. Quisque tincidunt turpis tristique velit porttitor, sollicitudin molestie augue fermentum. Aenean et ante nec tellus rutrum feugiat sit amet nec odio. Maecenas vulputate ante vitae sagittis eleifend. Morbi dui lectus, lacinia eget nisl quis, cursus bibendum dolor. Praesent sit amet ex metus. Nam faucibus est sit amet iaculis commodo. Quisque aliquam mi vel erat dapibus, ut molestie enim blandit. Vivamus tincidunt quis neque et sodales. Vestibulum sed vulputate neque. Proin tristique mattis pulvinar. Nunc felis sapien, sollicitudin eget accumsan at, sagittis et ipsum.</p>
				</div>
			</article>
			<article class="pergunta row">
				<h4 data-toggle="collapse" data-target="#resposta-4" aria-expanded="false" aria-controls="resposta-4" class="collapsed"><span>E para achar as mesmas para uma linha só?</span></h4>
				<div id="resposta-4" class="col-sm-10 col-sm-offset-1 collapse resposta">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dignissim, erat a mattis auctor, nibh odio consequat leo, a posuere dolor libero a eros. Integer iaculis augue arcu, ac vulputate massa scelerisque a. Donec posuere gravida odio, sed tristique nulla elementum et. Nam fermentum risus vitae vehicula imperdiet. Quisque tincidunt turpis tristique velit porttitor, sollicitudin molestie augue fermentum. Aenean et ante nec tellus rutrum feugiat sit amet nec odio. Maecenas vulputate ante vitae sagittis eleifend. Morbi dui lectus, lacinia eget nisl quis, cursus bibendum dolor. Praesent sit amet ex metus. Nam faucibus est sit amet iaculis commodo. Quisque aliquam mi vel erat dapibus, ut molestie enim blandit. Vivamus tincidunt quis neque et sodales. Vestibulum sed vulputate neque. Proin tristique mattis pulvinar. Nunc felis sapien, sollicitudin eget accumsan at, sagittis et ipsum.</p>
				</div>
			</article>
			<article class="pergunta row">
				<h4 data-toggle="collapse" data-target="#resposta-5" aria-expanded="false" aria-controls="resposta-5" class="collapsed"><span>E para achar as mesmas para uma linha só?</span></h4>
				<div id="resposta-5" class="col-sm-10 col-sm-offset-1 collapse resposta">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dignissim, erat a mattis auctor, nibh odio consequat leo, a posuere dolor libero a eros. Integer iaculis augue arcu, ac vulputate massa scelerisque a. Donec posuere gravida odio, sed tristique nulla elementum et. Nam fermentum risus vitae vehicula imperdiet. Quisque tincidunt turpis tristique velit porttitor, sollicitudin molestie augue fermentum. Aenean et ante nec tellus rutrum feugiat sit amet nec odio. Maecenas vulputate ante vitae sagittis eleifend. Morbi dui lectus, lacinia eget nisl quis, cursus bibendum dolor. Praesent sit amet ex metus. Nam faucibus est sit amet iaculis commodo. Quisque aliquam mi vel erat dapibus, ut molestie enim blandit. Vivamus tincidunt quis neque et sodales. Vestibulum sed vulputate neque. Proin tristique mattis pulvinar. Nunc felis sapien, sollicitudin eget accumsan at, sagittis et ipsum.</p>
				</div>
			</article>
		</div>
	</section>

<?php
  get_footer();
?>