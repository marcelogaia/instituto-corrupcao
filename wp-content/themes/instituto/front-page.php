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
      <ul class="col-xs-12 project-tabs">
        <li class="tab"><a href="#">PESQUISA</a></li>
        <li class="tab"><a href="#">POLÍTICAS PÚBLICAS</a></li>
        <li class="tab"><a href="#">EDUCAÇÃO E MOBILIZAÇÃO</a></li>
      </ul>
      <div class="content-holder">
        <article class="row">
          <div class="col-sm-5 col-sm-offset-1 text-holder">
            <h3>Pesquisa</h3>
            <div class="project-entry">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. Morbi id libero eu quam venenatis condimentum. Nulla vel risus sed odio dignissim vulputate. Mauris pulvinar dui ac euismod aliquet. Nulla facilisi. Proin vel nunc faucibus, aliquet nibh ut, porttitor neque. Cras cursus massa eget libero scelerisque, ut faucibus odio bibendum. Quisque in gravida odio, sagittis suscipit nunc. Cras varius maximus varius. In posuere id augue eu ullamcorper. Vestibulum dapibus magna vel interdum malesuada. Sed imperdiet pellentesque efficitur.</p>
            </div><!--/.project-entry-->
            <button>Saiba mais</button>
          </div>
          <div class="col-sm-6">
            <img src="<?= site_url("/");?>wp-content/uploads/2017/01/Research_Hero.jpg">
          </div>
        </article>
        <article class="row">
          <div class="col-sm-5 col-sm-offset-1 text-holder">
            <h3>POLÍTICAS PÚBLICAS</h3>
            <div class="project-entry">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. Morbi id libero eu quam venenatis condimentum. Nulla vel risus sed odio dignissim vulputate. Mauris pulvinar dui ac euismod aliquet. Nulla facilisi. Proin vel nunc faucibus, aliquet nibh ut, porttitor neque. Cras cursus massa eget libero scelerisque, ut faucibus odio bibendum. Quisque in gravida odio, sagittis suscipit nunc. Cras varius maximus varius. In posuere id augue eu ullamcorper. Vestibulum dapibus magna vel interdum malesuada. Sed imperdiet pellentesque efficitur.</p>
            </div><!--/.project-entry-->
            <button>Saiba mais</button>
          </div>
          <div class="col-sm-6">
            <img src="<?= site_url("/");?>wp-content/uploads/2017/01/Research_Hero.jpg">
          </div>
        </article>
        <article class="row">
          <div class="col-sm-5 col-sm-offset-1 text-holder">
            <h3>EDUCAÇÃO E MOBILIZAÇÃO</h3>
            <div class="project-entry">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan mattis ipsum, imperdiet auctor nisl egestas vel. Morbi id libero eu quam venenatis condimentum. Nulla vel risus sed odio dignissim vulputate. Mauris pulvinar dui ac euismod aliquet. Nulla facilisi. Proin vel nunc faucibus, aliquet nibh ut, porttitor neque. Cras cursus massa eget libero scelerisque, ut faucibus odio bibendum. Quisque in gravida odio, sagittis suscipit nunc. Cras varius maximus varius. In posuere id augue eu ullamcorper. Vestibulum dapibus magna vel interdum malesuada. Sed imperdiet pellentesque efficitur.</p>
            </div><!--/.project-entry-->
            <button>Saiba mais</button>
          </div>
          <div class="col-sm-6">
            <img src="<?= site_url("/");?>wp-content/uploads/2017/01/Research_Hero.jpg">
          </div>
        </article>
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