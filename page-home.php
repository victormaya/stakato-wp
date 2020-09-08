<?php
// Template Name: Home
?>
<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class='introducao'>
        <div class="container fadeInDown"  data-anime="500">
            <h1><?php the_field('titulo_site') ?></h1>
            <!-- <h1>academia de música stakato</h1> -->
        </div>
    </section>

    <section class="container cursos">
        <h2>Cursos</h2>
        <div data-slide='slide-cursos' class="fadeInDown"  data-anime="900">
            <ul>
                <li><img src="<?php the_field('foto_curso_1') ?>" alt=""></li>
                <li><img src="<?php the_field('foto_curso_2') ?>" alt=""></li>
                <li><img src="<?php the_field('foto_curso_3') ?>" alt=""></li>
            </ul>
            <ul>
                <li><img src="<?php the_field('foto_curso_4') ?>" alt=""></li>
                <li><img src="<?php the_field('foto_curso_5') ?>" alt=""></li>
                <li><img src="<?php the_field('foto_curso_6') ?>" alt=""></li>
            </ul>
        </div>
        <div class='callBtn'>
            <p><?php the_field('chamada') ?></p>
            <a href="cursos" class="btn">cursos</a>
        </div>
    </section>

    <section class='chamadas'>
        <div class='container'>
            <ul>
                <li class="grid-3 visible">oi</li>
                <li class="grid-4">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/home/chamadas/botao-family.svg" alt="">
                    <h3>todas as idades</h3>
                    <p>Cursos para crianças, jovens e adultos</p>
                </li>
                <li class="grid-2 visible">oi</li>
                <li class="grid-4" >
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/home/chamadas/botao-play.svg" alt="">
                    <h3>incrições abertas</h3>
                    <p>Escolha um curso e realize um sonho!</p>
                </li>
            </ul>
        </div>
    </section>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    <?php get_footer(); ?>