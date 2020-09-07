<?php
// Template Name: Cursos
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class='introducao-cursos'>
        <div class="container">
            <h2>cursos</h2>
        </div>
    </section>

    <section class="container" id='painel'>
        <div class='desc-curso grid-14 fadeInDown' data-anime="500">
            <img id="teste" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cursos/perfil-curso/foto1.svg" alt="">
            <div class="conteudo-curso" >
                <h2 class='title-curso' >Saxofone</h2>
                <p class='text-curso'>
                    Lorem Ipsum é simplesmente uma simulação de texto da indústria 
                    tipográfica e de impressos, e vem sendo utilizado desde o século XVI, 
                    quando um impressor desconhecido pegou uma bandeja de tipos e os 
                    embaralhou para fazer um livro de modelos de tipos.
                </p>
            </div>
        </div>
        <div class='desc-curso grid-14 fadeInDown' data-anime="900">
            <div class="conteudo-curso">
                <h2 class='title-curso'>Violino</h2>
                <p class='text-curso'>
                    Lorem Ipsum é simplesmente uma simulação de texto da indústria 
                    tipográfica e de impressos, e vem sendo utilizado desde o século XVI, 
                    quando um impressor desconhecido pegou uma bandeja de tipos e os 
                    embaralhou para fazer um livro de modelos de tipos.
                </p>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cursos/perfil-curso/foto2.svg" alt="">
        </div>
        
    </section>
    <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>