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
        <?php
        $cursos = get_field('cursos');
        $contador=0;
        if (isset($cursos)) { foreach ($cursos as $curso) { 
        if ($contador%2==0){?>
        <div class='desc-curso grid-14 fadeInDown' data-anime="500">
            <img src="<?php echo $curso['foto_curso']; ?>" alt="">
            <div class="conteudo-curso" >
                <h2 class='title-curso' ><?php echo $curso['nome_curso']; ?></h2>
                <p class='text-curso'><?php echo $curso['desc_curso']; ?></p>
            </div>
        </div>
        <?php } else{ ?>
        <div class='desc-curso grid-14 fadeInDown' data-anime="900">
            <div class="conteudo-curso">
                <h2 class='title-curso'><?php echo $curso['nome_curso']; ?></h2>
                <p class='text-curso'>
                    <?php echo $curso['desc_curso']; ?>
                </p>
            </div>
            <img src="<?php echo $curso['foto_curso']; ?>" alt="">
        </div>
        <?php } $contador++;} } ?>
    </section>
    <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>