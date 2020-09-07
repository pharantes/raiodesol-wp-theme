<?php

/**
 * Template Name: Home
 */

/* Header */
get_header();

?>
<main class="main-content bg-light">
    <div class="container main-section">
        <div class="row content-row m-0">
            <div class="col-md-6">
                <h1>Faça já sua reserva</h1>
                <p>
                    nas melhores hospedagens da
                    <span style="font-weight: 700; color: #f6a623;">Ilha Grande</span>
                </p>
                <ul>
                    <li>
                        <span class="whatsapp-icon"><i class="fab fa-whatsapp"></i></span>+ 55 (24) 98164-5067
                    </li>
                </ul>
                <ul>
                    <li>
                        Email:
                        <span style="font-weight: 700; color: #f6a623;">campingraiodesol@gmail.com</span>
                    </li>
                </ul>
                <h2 class="title-social">Confira nossas fotos e novidades</h2>
                <ul class="icons">
                    <li>
                        <a class="icon" target="_blank" href="https://www.instagram.com/explore/tags/campingraiodesol/">
                            <i class="fab fa-instagram-square"></i></a>
                    </li>
                    <li>
                        <a class="icon" target="_blank" href="https://www.facebook.com/people/Camping-Raio-de-Sol/100005492583245">
                            <i class="fab fa-facebook-square"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 about-section">
                <h1>
                    Sobre nós
                </h1>
                <p>
                    Aqui no Raio de Sol você vai encontrar a melhor recepção,
                    comodidade, ambiente harmonioso e temático. Estamos a disposição
                    para lhe atender e recomendar o melhor do paraíso. Conheça nossas
                    praias, fundo do mar, trilhas, cachoeiras, mirantes, passeios de
                    lancha e restaurantes.
                </p>
                <h4>Instalações:</h4>
                <ul>
                    <li>Camping & Hostel</li>
                    <li>Suítes Standards</li>
                    <li>Apartamento Deluxe</li>
                    <li>Casa na mata</li>
                </ul>
                <p>
                    <strong>Raio de Sol é a melhor opção na Ilha Grande.</strong>
                </p>
                <div class="main-content-logo">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/dist/img/logo@2x.png" alt="Raio de Sol logo" class="logo" />
                    <span class="ml-2 logo-text">
                        Raio de Sol
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.7532238346034!2d-44.172038684501125!3d-23.142693784892337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9c5c0855dbc079%3A0x8d695c72e5031f86!2sCamping%20Raio%20De%20Sol!5e0!3m2!1spt-BR!2sde!4v1595751968312!5m2!1spt-BR!2sde" class="map-iframe" frameborder="0" style="border: 0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</main>
<?php
get_footer();
?>