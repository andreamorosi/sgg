<?php
/**
 * Template Name: Animatori
 *
 * @package understrap
 */

get_header();
?>

<!-- Wrapper Animatori -->
<section class="wrapper animatori-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrapper-title">
                    <span class="pre-titolo f-bold">Animatori</span>
                    <h3 class="verde pacifico">Scopriamo i volti</h3>
                </div>
            </div>

            <div class="col-sm-12 offset-sm-0 col-md-8 offset-md-2 text-center">

                <p class="margin-v-2">
                L’animatore è un volontario che, dopo un
                percorso di formazione in linea con il Progetto
                Educativo dell’Associazione, mette a disposizione il
                suo tempo e le sue competenze per contribuire ai
                progetti del Gruppo, animato dal desiderio di
                trasmettere i valori in cui crede. Gli animatori
                sono catechisti dei gruppi dei bambini e dei
                ragazzi e fanno parte a loro volta di un gruppo in
                cui si confrontano, discutono dei problemi
                educativi che possono incontrare, condividono
                idee e progetti.
                Tutti gli animatori prestano il loro servizio in
                maniera del tutto volontaria e gratuita. Ed è per
                questo che il loro lavoro è così prezioso!
                </p>
            </div>

            <div class="col-12 animatori-inner">
                <?php

                $args = array (
                    'post_type'              => 'animatore',
                    'orderby'                => 'meta_value',
                    'order'                  => 'ASC',
                    'posts_per_page' => -1
                );

                $animatori = new WP_Query($args);

                if ( $animatori->have_posts() ) {
                    while ( $animatori->have_posts() ) {
                        $animatori->the_post();
                        ?>
                        <figure class="animatori-item">
                            <img class="" src="<?php echo the_post_thumbnail_url(); ?>">
                            <span class="pacifico"><?php echo the_title_attribute(); ?></span>
                        </figure>
                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- //Wrapper Animatori -->

<?php get_footer(); ?>
