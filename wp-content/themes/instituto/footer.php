<?php
wp_reset_query();
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Instituto
 * @since Instituto 1.0
 */
?>
<div class="stripped-border"><!-- Border --></div>
	<footer id="contato">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h3 class="footer-title">Menu</h3>
					<div class="menu-principal-container">
						
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

					</div>
					<h3 class="footer-title imprensa">Imprensa</h3>
					<a href="#" class="imprensa">Veja nossa página de clippings</a>
				</div>
				<div class="col-sm-4">
					<div class="contact-us-box">
						<h3 class="footer-title">Contato</h3>
						<div class="box-right">
							<p>Instituto Não Aceito Corrupção</p>
							<p>Rua Riachuelo, 217, Sala 101</p>
							<p>Sé | São Paulo, SP | CEP 01007-000</p>
							<p class="contact-icon">
								<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>ver mapa</a>
							</p>
							<p class="contact-icon">
							<i class="fa fa-phone" aria-hidden="true"></i> 11 3112-0432</p>
							<p class="contact-icon">
							<i class="fa fa-print" aria-hidden="true"></i>
							11 3112-0432</p>
							<p class="contact-icon">
								<a href="mailto:contato@naoaceitocorrupcao.org.br">
									<i class="fa fa-envelope" aria-hidden="true"></i> contato@naoaceitocorrupcao.org.br
								</a>
							</p>
						</div><!--/.box-right-->
					</div>
				</div>
				<div class="col-sm-4">
					<h3 class="footer-title">Siga-nos</h3>
					<div class="contact-us-social">
						<a href="#" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>
						<a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="#" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
						<a href="#" title="Google+" target="_blank"><i class="fa fa-google-plus"></i></a>
					</div><!--/.contact-us-social-->
				</div>
				<div class=" col-sm-4">
					<div class="contact-us-newsletter">
						<h3 class="footer-title" data-customizer="box-left-customer-support-title"> Newsletter </h3><!--/.box-left-->
						<div role="form" class="wpcf7" id="wpcf7-f97-o2" lang="en-CA" dir="ltr">
							<form action="#" method="post" class="wpcf7-form newsletter">
								<p>
									<label>
										<span class="wpcf7-form-control-wrap email">
											<input type="email" name="email" placeholder="email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" />
										</span>
									</label>
									<input type="submit" value="enviar" class="wpcf7-form-control wpcf7-submit" />
								</p>
							</form>
						</div>
					</div><!--/.contact-us-newsletter-->
				</div>
				<div class="col-sm-4">
					<h3 class="footer-title">Fale Conosco</h3>
					<div role="form" class="wpcf7" id="wpcf7-f6-o3" lang="en-CA" dir="ltr">
						<form action="#" method="post" class="wpcf7-form">
							<p class="wpcf7-form-control-wrap nome">
								<input type="text" name="nome" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="nome" />
							</p>
							<p class="wpcf7-form-control-wrap email">
							<input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="email" />
							</p>
							<p class="wpcf7-form-control-wrap mensagem">
								<textarea name="mensagem" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="mensagem"></textarea>
							</p>
							<p>
								<input type="submit" value="enviar" class="wpcf7-form-control wpcf7-submit" />
							</p>
						</form>
					</div>																	
				</div>
			</div><!--/.row-->
			

			<div class="row line-logo">
				<div class="col-sm-9 last-line">
					<span class="title">Instituto Não Aceito Corrupção</span>
					<span class="copyright">© 2017 Todos os direitos reservados</span>
					<div class="menu-footer-container">
						
						<?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?>

					</div>
				</div><!--/.col-sm-9-->
				<div class="col-sm-3 logo">
					<a href="<?= site_url() ?>" title="Instituto Não Aceito Corrupção" class="footer-logo"><img src="img/logo-footer.png" alt="Instituto Não Aceito Corrupção" title="Instituto Não Aceito Corrupção" /></a>
				</div><!--/.col-sm-3-->
			</div><!--/.row-->
		</div><!--/.container-->
	</footer>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

	<script type="text/javascript" src="js/main.min.js"></script>
</body>
</html>