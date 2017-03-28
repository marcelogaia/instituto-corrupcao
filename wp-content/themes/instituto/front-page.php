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
  <section id="projetos" class="front-page-section">
    <div class="container">
      <header class="col-sm-10 col-sm-offset-1">
        <h3 class="general-title">Projetos</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a.</p>
      </header>
<?php 

$args = array(
  'orderby'          => 'date',
  'order'            => 'ASC',
  'post_type'        => 'pt_projetos',
  'post_status'      => 'publish',
  'suppress_filters' => true 
);

$projetos_array = get_posts( $args ); 

$c = 1;
  //print_r($post);
?>
      <ul class="col-xs-12 project-tabs">
<?php foreach($projetos_array as $proj): ?>
        <li class="tab"><a href="#"><?= $proj->post_title; ?></a></li>
<?php endforeach; ?>
      </ul>
      <div class="content-holder">
<?php foreach($projetos_array as $proj):
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $proj->ID ), 'single-post-thumbnail' );
        //var_dump($image);
 ?>
        <article class="row">
          <div class="col-sm-5 col-sm-offset-1 text-holder">
            <h3><?= $proj->post_title; ?></h3>
            <div class="project-entry">
              <?= $proj->post_content; ?>
            </div><!--/.project-entry-->
            <button>Saiba mais</button>
          </div>
<?php if($image): ?>
          <div class="col-sm-6">
            <img src="<?= $image[0]; ?>">
          </div>
<?php endif; ?>
        </article>
<?php endforeach; ?>
      </div>
    </div>
  </section>
  
  <section id="blog" class="front-page-section">
    <div class="container">
      <header>
        <h3 class="general-title">Blog</h3>
        <p>Veja as matérias que postamos diáriamente</p>
      </header>
      <div class="row">
        <article class="col-sm-6 col-xs-12 blog-post">
          <div class="post" style="background-image: url('<?= site_url("/");?>wp-content/uploads/2017/01/mexico-city-1217945_1920-360x213.jpg');">
            <a href="#" class="post-title">Um titulo para o post desse artigo que ocupe até duas linhas</a>
            <a href="#" class="post-entry">
                <h3>Um titulo para o post desse artigo que ocupe até duas linhas</h3>
                <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>
                <span href="#" title="Read more" class="post-button">ler mais</span>
            </a><!--/.post-entry-->
          </div><!--/.post-->
        </article>
        <article class="col-sm-6 col-xs-12 blog-post">
          <div class="post" style="background-image: url('<?= site_url("/");?>wp-content/uploads/2016/08/chornobyl-1209692_1280-360x240-360x213.jpg');">
            <a href="#" class="post-title">Um titulo para o post desse artigo que possa ter até duas linhas com texto bem extenso ou curto.</a>
            <a href="#" class="post-entry">
              <h3>Um titulo para o post desse artigo que possa ter até duas linhas com texto bem extenso ou curto.</h3>
              <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>
              <span href="#" title="Read more" class="post-button">ler mais</span>
            </a><!--/.post-entry-->
          </div><!--/.post-->
        </article>
      </div>
      <a href="blog/" title="VER" class="latest-news-button">VER</a>
    </div>
  </section>

  <section id="participe" class="front-page-section">
    <div class="container">
      <header>
        <h3 class="general-title">FAÇA PARTE DA MUDANÇA. <strong>PARTICIPE.</strong></h3>
        <p></p>
      </header>
      <div class="row col-sm-10 col-sm-offset-1"> 
        <article class="col-sm-4">
          <h4>Embaixador</h4>
          <p>Consectetur adipiscing elit. Praesent molestie urna hendrerit erat tincidunt tempus.</p>
          <a href="#" class="eu-quero">Eu quero!</a>
        </article>
        <article class="col-sm-4">
          <h4>Doação</h4>
          <p>Consectetur adipiscing elit. Praesent molestie urna hendrerit erat tincidunt tempus.</p>
          <a href="#" class="eu-quero">Eu quero!</a>
        </article>
        <article class="col-sm-4">
          <h4>Voluntários</h4>
          <p>Consectetur adipiscing elit. Praesent molestie urna hendrerit erat tincidunt tempus.</p>
          <a href="#" class="eu-quero">Eu quero!</a>
        </article>
      </div>
    </div>
    <div class="service-br-flag"><!-- --></div>
  </section>

  <section id="parceiro" class="front-page-section">
    <div class="container">
      <header>
        <h3 class="general-title">Parceiro ouro</h3>
        <p>Queremos agradecer nossos parceiros, sem quem não seria possível nada.</p>
      </header>
      <ul class="slick-carousel">
        <li><img src="img/partner-placeholder.png"></li>
        <li><img src="img/partner-placeholder.png"></li>
        <li><img src="img/partner-placeholder.png"></li>
        <li><img src="img/partner-placeholder.png"></li>
        <li><img src="img/partner-placeholder.png"></li>
        <li><img src="img/partner-placeholder.png"></li>
      </ul>
      <button class="bnt-ver-todos logo-carousel-btn">Ver todos</button>
    </div>
  </section>

<?php
  get_footer();
?>