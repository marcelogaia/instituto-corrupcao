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
					<a href="javascript:void(0);" class="imprensa">Veja nossa página de clippings</a>
				</div>
				<div class="col-sm-4">
					<div class="contact-us-box">
						<h3 class="footer-title">Contato</h3>
						<div class="box-right">
							<p><?php bloginfo('name') ?></p>
							<p><?php echo $GLOBALS['cgv']['endereco-1'] ?></p>
							<p><?php echo $GLOBALS['cgv']['endereco-2'] ?></p>
							<p class="contact-icon">
								<a href="javascript:void(0);"><i class="fa fa-map-marker" aria-hidden="true"></i>ver mapa</a>
							</p>
							<p class="contact-icon">
							<i class="fa fa-phone" aria-hidden="true"></i> <?php echo $GLOBALS['cgv']['telefone'] ?></p>
							<p class="contact-icon">
							<i class="fa fa-print" aria-hidden="true"></i> <?php echo $GLOBALS['cgv']['fax'] ?></p>
							<p class="contact-icon">
								<a href="mailto:<?php echo $GLOBALS['cgv']['email'] ?>">
									<i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $GLOBALS['cgv']['email'] ?>
								</a>
							</p>
						</div><!--/.box-right-->
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
				<div class="col-sm-4">
					<h3 class="footer-title title-social">Siga-nos</h3>
					<div class="contact-us-social">

	<?php if(!empty($socialArr['linkedin'])): ?>
						<li><a href="<?= $socialArr['linkedin'] ?>" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a></li>
	<?php endif; ?>
	<?php if(!empty($socialArr['facebook'])): ?>
						<li><a href="<?= $socialArr['facebook'] ?>" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
	<?php endif; ?>
	<?php if(!empty($socialArr['twitter'])): ?>
						<li><a href="<?= $socialArr['twitter'] ?>" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
	<?php endif; ?>
	<?php if(!empty($socialArr['instagram'])): ?>
						<li><a href="<?= $socialArr['instagram'] ?>" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
	<?php endif; ?>
	<?php if(!empty($socialArr['google-plus'])): ?>
						<li><a href="<?= $socialArr['google-plus'] ?>" title="Google+" target="_blank"><i class="fa fa-google-plus"></i></a></li>
	<?php endif; ?>
					</div><!--/.contact-us-social-->
				</div>
<?php endif; ?>
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
					<h3 class="footer-title form-title">Fale Conosco</h3>
					<div role="form" class="wpcf7 form" id="wpcf7-f6-o3" lang="en-CA" dir="ltr">
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
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 -->
	<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.min.js"></script>

	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

	<script type="text/javascript" src="js/main.min.js"></script>
</body>
</html>
