<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants" >
            <video id="banner-video" autoplay loop muted poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?> ">
                <source src="<?php echo  get_stylesheet_directory_uri() . '/assets/videos/koukaki-video.mp4';?>" type="video/mp4"/>
            </video>
        </section>
        <section id="story" class="story">
            <h2 id="story-title"><div class="div-animated">L'histoire</div></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            
            <article id="characters">
                <div class="main-character">
                    <h3>Les personnages</h3>
                    <?php get_template_part('templates-parts/section-carrousel/carrousel')?>
                    
                </div>
            </article>
            <article id="place">
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                    
                </div>
                <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/images/big_cloud.png';?>" alt="Image d'un grand nuage" data--80-bottom-top="transform:translate3d(800px, 80px, 0)" data-top-bottom="transform:translate3d(1020px,80px, 0)">
                <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/images/little_cloud.png';?>" alt="Image d'un petit nuage" data--270-bottom-top="transform:translate3d(500px, 270px, 0)" data--190-top-bottom="transform:translate3d(800px,270px, 0)">

            </article>
        </section>


        <section id="studio">
            <h2 id="studio-title"><div class="div-animated">Studio Koukaki</div></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

    </main><!-- #main -->

<?php
get_footer();
