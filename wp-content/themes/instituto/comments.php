<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
    <section id="comments">
        <form action="" class="row">
            <div class="container">
                <div class="row">   
                    <h3 class="col-xs-12">Comente</h3>

                    <div class="col-xs-12">
                        <label>Comentário</label>
                        <textarea name="comment"></textarea>
                    </div>
                    <div class="col-sm-3">
                        <label for="nome">Nome</label>
                        <input type="text" id="Nome" name="Nome">
                    </div>
                    <div class="col-sm-3">
                        <label for="email">Email</label>
                        <input type="text" id="Email" name="Email">
                    </div>
                    <div class="col-sm-3">
                        <label for="Cidade">cidade</label>
                        <input type="text" id="cidade" name="cidade">
                    </div>
                    <div class="col-sm-3">
                        <label for="Empresa">empresa</label>
                        <input type="text" id="empresa" name="empresa">
                    </div>
                    <div class="col-sm-12">
                        <button type="submit">postar comentário</button>
                    </div>
                </div>
            </div>
        </form>
     <?php //comment_form(); ?>
 
    <?php if ( have_comments() ) : ?>

        <section class="comments-list">
            <div class="container">
                <div class="row">
                    <div class="container comments-count">
                        <i class="fa fa-comments" aria-hidden="true"></i> <?php
                printf( _nx( '1 comentário', '%1$s comentários', get_comments_number(), 'comments title', 'twentythirteen' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
                    </div>
                    <div class="container">
                        <?php while( have_comments()): the_comment(); ?>
                            <article id="div-comment-<?php comment_ID(); ?>" class="comment">
                            <header>
                                <img src="img/blog-author-placeholder.jpg" alt="">
                                <h3 class="author"><?php comment_author(); ?></h3>
                                <span class="when">20 horas</span>
                            </header>
                            <p><?php comment_text(); ?></p>
                            <a href="#" class="likes"><i class="fa fa-heart-o" aria-hidden="true"></i><span class="count">2</span></a>
                        </article>
                        <?php endwhile ?>
                    </div>
                </div>
            </div>
        </section>
 
    <?php endif; // have_comments() ?>
 

    </section>