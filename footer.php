<section class="quote">
        <div class='container'>
            <p>"A música é a arte mais direta. Ela entra no ouvido,<br/> 
                vai para o coração e manifesta-se na alma"</p>
            <cite>Crys Rangel</cite>
        </div>
    </section>

    <section class='container contato'>
        <ul>
            <li class="grid-4"  id='tipos-contato'>
                <h2>Contato</h2>
                <ul>
                <?php $home = get_page_by_title('home')->ID; ?>
                    <li><p>- <?php the_field('contato1', $home) ?></p></li>
                    <li><p>- <?php the_field('contato2', $home) ?></p></li>
                </ul>
            </li>
            <li class='grid-4'  id='tipos-contato'>
                <h2>Endereço</h2>
                <ul>
                    <li><p><?php the_field('rua', $home) ?></p></li>
                    <li><p><?php the_field('cidade', $home) ?></p></li>
                </ul>
            </li>
            <li class="grid-3"  id='tipos-contato'>
                <h2>Redes Sociais</h2>
                <ul class="img-redes" >
                    <li>
                        <a href="<?php the_field('facebook', $home) ?>" target="_blank">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/home/contato/face.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('instagram', $home) ?>" target="_blank">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/home/contato/insta.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('youtube', $home) ?>" target="_blank">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/home/contato/youtube.svg" alt="">
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <section class='marca'>
        <div class="container reservado">
            <p class="grid-12">Academia de Música Stakato - Todos os Direitos Reservados.</p>
            <p class="grid-4 last">Site criado por <a href='http://victormaya.surge.sh'>Victor Maya.</a></p>
            <div class="grid-16">Ícones feitos por <a href="https://www.flaticon.com/br/autores/freepik" title="Freepik">Freepik</a> e <a href="https://www.flaticon.com/br/autores/good-ware" title="Good Ware">Good Ware</a> from <a href="https://www.flaticon.com/br/" title="Flaticon">www.flaticon.com</a></div>
        </div>
    </section>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins/simple-slide.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins/simple-anime.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins/script.js"></script>
    <?php wp_footer(); ?>
</body>
</html>