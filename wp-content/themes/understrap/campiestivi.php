<?php
/**
 * Template Name: Campi Estivi
 *
 * @package understrap
 */

get_header();
?>

<!-- Wrapper Campi Estivi -->
<section class="wrapper campi-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrapper-title">
                    <span class="pre-titolo f-bold">Campi Estivi</span>
                    <h3 class="titolo rosso pacifico">Sangiorgello Gruppo Giovani</h3>
                </div>
            </div>

            <div class="col-sm-12 offset-sm-0 col-md-8 offset-md-2 text-center">

                <p class="margin-v-2">
                Il campo estivo è un soggiorno residenziale di una settimana con finalità principalmente educative ma anche ricreative, gestito interamente dagli animatori volontari.
Durante il campo estivo i ragazzi vivono insieme tutti i momenti della giornata, che risulta solitamente divisa in un’attività di catechesi mattutina e attività ludiche e laboratoriali nelle ore pomeridiane e serali. La settimana di campo è arricchita da una specifica ambientazione, predisposta in base alla catechesi e ai messaggi educativi scelti. Il campo è rivolto ai ragazzi compresi nei gruppi di catechismo, suddivisi in fasce d’età, ma è aperto anche a coetanei di realtà diverse e non facenti parte dei gruppi parrocchiali.
                </p>
            </div>

            <div class="col-12 campi-inner">


                    <?php

                    $args = array (
                        'post_type'              => 'campo',
                        'orderby'                => 'meta_value',
                        'order'                  => 'ASC',
                        'posts_per_page' => -1
                    );

                    $campiestivi = new WP_Query($args);

                    if ( $campiestivi->have_posts() ) {
                        while ( $campiestivi->have_posts() ) {
                            $campiestivi->the_post();
                            ?>

                            <div class="campi-card">
                                <div class="campi-card--header">
                                    <h4 class="pacifico"><?php echo the_title_attribute(); ?></h4>
                                    <h5><?php echo get_field('descrizione_breve'); ?></h5>
                                </div>
                                <ul class="campi-card--main">
                                    <li class="campi-card--info">
                                        <span>Giorni</span>
                                        <p><?php echo get_field('giorni'); ?></p>
                                    </li>
                                    <li class="campi-card--info">
                                        <span>Località</span>
                                        <p><?php echo get_field('localita'); ?></p>
                                        <a href="<?php echo get_field('link_google_maps'); ?>" target="_blank" rel="nofollow">
                                            <i class="fa fa-map-marker"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="campi-card--footer">
                                    <p>Altre Info</p>
                                    <p class="campi-animatore">
                                        <?php echo get_field('nome_animatore'); ?>
                                        <?php echo get_field('telefono_animatore'); ?>
                                    </p>
                                    <a href="" class="btn">Scrivici</a>
                                </div>
                            </div>
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

<section class="wrapper bg-rosso">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrapper-title">
                    <span class="pre-titolo f-bold bianco">Area Download</span>
                    <h2 class="giallo pacifico">Download</h2>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">

            </div>
            <div class="col-sm-12 col-md-4">
                
            </div>
            <div class="col-sm-12 col-md-4">
                
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
