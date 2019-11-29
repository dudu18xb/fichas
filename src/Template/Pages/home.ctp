<?php

use Cake\Routing\Router;

?>

<div class="slider single-item">
    <?php if (!empty($banners)) { ?>
        <?php foreach ($banners as $banner) { ?>
            <div>
                <div class="home">
                    <div class="background_image" style="background-image:url(/files/Banners/imagem/<?php echo h($banner->imagem) ?>)"></div>
                    <!-- Final Header -->
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content">
                                        <div class="home_title"><?php echo h($banner->titulo) ?></div>
                                        <div class="home_text"><?php echo h($banner->sub_titulo) ?>
                                        </div>
                                        <div class="button home_button"><a
                                                href="<?php echo h($banner->link) ?>"><span><?php echo h($banner->texto_botao) ?></span><span><?php echo h($banner->texto_botao) ?></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
</div>
<!-- Começo Info Boxes -->
<?php if (!empty($blogs)) { ?>
    <div class="info">
        <div class="container">
            <div class="row row-eq-height">
                <?php foreach ($blogs as $blog) { ?>
                    <!-- Info Box -->
                    <div class="col-lg-4 info_box_col">
                        <div class="info_box">
                            <div class="info_image"><img src="/files/Blogs/capa/<?php echo h($blog->capa) ?>"
                                                         alt="<?php echo h($blog->titulo) ?>"></div>
                            <div class="info_content">
                                <div class="info_title"><?php echo strip_tags(substr($blog->titulo, 0, 50)); ?></div>
                                <div class="info_text"><?php echo strip_tags(substr($blog->descricao, 0, 120)); ?>
                                </div>
                                <div class="button info_button"><a
                                        href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $blog->categoria->slug, 'slug' => $blog->slug]); ?>"><span>Saiba mais</span><span>Saiba mais</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
<?php } ?>
<!-- Finaldo Info Boxes -->

<!-- CTA -->
<?php if (!empty($bannerparalaxs)) { ?>
    <?php foreach ($bannerparalaxs as $bannerparalax) { ?>
        <div class="cta">
        <?php if(!empty($bannerparalax->texto_botao)){ ?>
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/files/Backgroundparalax/imagem/<?php echo h($bannerparalax->imagem) ?>" data-speed="0.8" style="background-color: rgba(0, 0, 0, 0.5019607843137255);"></div>
        <?php }else { ?>
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/files/Backgroundparalax/imagem/<?php echo h($bannerparalax->imagem) ?>" data-speed="0.8"></div>
        <?php } ?>
            <div class="text-content">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div
                                class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
                                <div class="cta_content text-xl-left text-center">
                                    <div class="cta_title"><?php echo h($bannerparalax->titulo) ?></div>
                                    <?php if (!empty($bannerparalax->sub_titulo)) { ?>
                                        <div class="cta_subtitle"><?php echo h($bannerparalax->sub_titulo) ?></div>
                                    <?php } ?>
                                </div>
                                <?php if(!empty($bannerparalax->texto_botao)){ ?>
                                    <div class="button cta_button ml-xl-auto">
                                        <a href="<?php echo h($bannerparalax->url) ?>" title="<?php echo h($bannerparalax->texto_botao) ?>"><span><?php echo h($bannerparalax->texto_botao) ?></span><span><?php echo h($bannerparalax->texto_botao) ?></span></a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>
<!-- FINAL CTA -->

<!-- Services -->
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title">Serviços</div>
                <div class="section_subtitle">Conheça um pouco mais sobre a OdontoHerrera</div>
            </div>
        </div>
        <div class="row icon_boxes_row">

            <!-- Icon Box -->
            <div class="col-xl-4 col-lg-6">
                <div class="icon_box">
                    <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                        <div class="icon_box_icon"><img src="icones/implantodontia.svg" alt="Implantodontia"></div>
                        <div class="icon_box_title">Implantodontia</div>
                    </div>
                    <div class="icon_box_text">Destina-se ao tratamento do edentulismo com reabilitações protéticas
                        suportadas ou retidas por implantes dentários.
                    </div>
                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-xl-4 col-lg-6">
                <div class="icon_box">
                    <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                        <div class="icon_box_icon"><img src="icones/ortodontia.svg" alt="Ortodontia"></div>
                        <div class="icon_box_title">Ortodontia</div>
                    </div>
                    <div class="icon_box_text">Prevenção e tratamento dos problemas de crescimento, desenvolvimento e
                        amadurecimento da face, dos arcos dentários e da oclusão,
                    </div>
                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-xl-4 col-lg-6">
                <div class="icon_box">
                    <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                        <div class="icon_box_icon"><img src="icones/endodontia.svg" alt="Endodontia"></div>
                        <div class="icon_box_title">Endodontia</div>
                    </div>
                    <div class="icon_box_text">Tratamento da etiologia, diagnóstico, terapêutica e profilaxia das
                        doenças e a raiz dentária, bem como o tecido periapical.
                    </div>
                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-xl-4 col-lg-6">
                <div class="icon_box">
                    <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                        <div class="icon_box_icon"><img src="icones/protese.svg" alt="Proteses"></div>
                        <div class="icon_box_title">Proteses</div>
                    </div>
                    <div class="icon_box_text">Reposição de tecidos bucais e dentes perdidos, visando restaurar e manter
                        a forma, função, aparência e saúde bucal.
                    </div>
                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-xl-4 col-lg-6">
                <div class="icon_box">
                    <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                        <div class="icon_box_icon"><img src="icones/periodontia.svg" alt="Periodontia"></div>
                        <div class="icon_box_title">Periodontia</div>
                    </div>
                    <div class="icon_box_text">Tratamento das doenças do sistema de implantação e suporte dos dentes.
                    </div>
                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-xl-4 col-lg-6">
                <div class="icon_box">
                    <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                        <div class="icon_box_icon"><img src="icones/lente_contato.svg" alt="Lente de contato"></div>
                        <div class="icon_box_title">Lente de contato</div>
                    </div>
                    <div class="icon_box_text">Indicadas para quase todas as necessidades de alteração da estética dos
                        dentes, com a grande vantagem que o desgaste.
                    </div>
                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-xl-4 col-lg-6">
                <div class="icon_box">
                    <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                        <div class="icon_box_icon"><img src="icones/restauracao.svg" alt="Restauração"></div>
                        <div class="icon_box_title">Restauração</div>
                    </div>
                    <div class="icon_box_text">Tratamento de restauração estrutura faltante do dente. A perda estrutural
                        normalmente resulta de cárie ou trauma externo.
                    </div>
                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-xl-4 col-lg-6">
                <div class="icon_box">
                    <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                        <div class="icon_box_icon"><img src="icones/clareamento.svg" alt="Clareamento"></div>
                        <div class="icon_box_title">Clareamento</div>
                    </div>
                    <div class="icon_box_text">Clareamento dental ou clareamento dentário é um tratamento utilizado para
                        tornar os dentes mais brancos.
                    </div>
                </div>
            </div>
            <!-- Icon Box -->
            <div class="col-xl-4 col-lg-6">
                <div class="icon_box">
                    <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                        <div class="icon_box_icon"><img src="icones/cirurgias.svg" alt="Cirurgias"></div>
                        <div class="icon_box_title">Cirurgias</div>
                    </div>
                    <div class="icon_box_text">Procedimentos médicos que envolvem modificar artificialmente a dentição;
                        em outras palavras, cirurgia dos dentes, gengivas e ossos da mandíbula.
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- FINAL Services -->
