<?php

use Cake\Routing\Router;

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeTitle = 'Odonto Herrera';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Health medical template project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#28C5BC">
    <meta name="apple-mobile-web-app-status-bar-style" content="#325A7E">
    <meta name="msapplication-navbutton-color" content="#325A7E">
    <meta name='application-name' content='<?php if(!empty($seo)) { echo $cakeTitle." | ". $seo['title']; }else { echo $cakeTitle; } ?>'>
    <meta property="og:site_name" content="<?php echo $cakeTitle; ?>"/>
    <title> <?php if(!empty($seo)){ if($seo['title'] == null){ echo $cakeTitle; } else{ echo $seo['title']." | ". $cakeTitle; }}else{echo $cakeTitle;} ?></title>
    <?php if(!empty($seo)){ ?>
        <meta property="og:locale" content="pt_BR"/>
        <meta property="og:url" content="<?php echo $seo['url']; ?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="<?php if(!empty($seo)) { echo $cakeTitle." | ". $seo['title']; }else { echo $cakeTitle; } ?>"/>
        <meta property="og:description" content="<?php echo $seo['description']; ?>"/>
        <meta property="og:keywords" content="<?php echo $seo['keywords']; ?>"/>
        <?php if(!empty($blog)){ ?>
            <meta property="og:image" content="/files/Blogs/capa/<?php echo h($blog->capa) ?>">
            <meta property="og:image:type" content="image/jpeg">
            <meta property="og:image:width" content="800">
            <meta property="og:image:height" content="600">
        <?php } ?>
        <meta name="title" content="<?php if(!empty($seo)) { echo $cakeTitle." | ". $seo['title']; }else { echo $cakeTitle; } ?>">
        <meta name="description" content="<?php echo $seo['description']; ?>">
        <meta name="keywords" content="<?php echo $seo['keywords']; ?>">
        <meta name='twitter:card' content='summary'>
        <meta name='twitter:url' content='<?php echo $seo['url']; ?>'>
        <meta name='twitter:title' content='<?php if(!empty($seo)) { echo $cakeTitle." | ". $seo['title']; }else { echo $cakeTitle; } ?>'>
        <meta name='twitter:description' content='<?php echo $seo['description']; ?>'>
    <?php } ?>

    <?= $this->Html->meta('icon') ?>

    <!-- importando os estilos -->
    <?php echo $this->Html->css('bootstrap.min'); ?>
    <?php echo $this->Html->css('font-awesome.min'); ?>
    <?php echo $this->Html->css('owl.carousel'); ?>
    <?php echo $this->Html->css('owl.theme.default'); ?>
    <?php echo $this->Html->css('animate'); ?>
    <?php echo $this->Html->css('main_styles'); ?>
    <?php echo $this->Html->css('responsive'); ?>
    <?php echo $this->Html->css('estilo'); ?>
    <?php echo $this->Html->css('slick'); ?>
    <?php echo $this->Html->css('slick-theme'); ?>
    <?php echo $this->Html->css('jquery.fancybox.min'); ?>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<div class="super_container">
    <!-- menu -->
    <div class="menu trans_500">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
            <div class="menu_close_container">
                <div class="menu_close"></div>
            </div>
            <?php echo $this->Form->create(null, ['url' => ['controller' => 'Blogs','action' => 'index'],'valueSources' => 'blogs', 'class' => 'menu_search_form']); ?>
            <?php echo $this->Form->control('q', ['label' => false, 'type' => 'text', 'class' => 'menu_search_input', 'placeholder' => 'Pesquisar...']); ?>
            <button class="menu_search_button" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            <?php echo $this->Form->end(); ?>
            <ul>
                <li class="menu_item"><a
                        href="<?php echo Router::url('/', ['controller' => 'Pages', 'action' => 'home']); ?>" title="Home">Home</a>
                </li>
                <li class="menu_item"><a
                        href="<?php echo Router::url( ['controller' => 'Pages', 'action' => 'about']); ?>" title="Institucional">Institucional</a></li>
                <li class="menu_item"><a
                        href="<?php echo Router::url('servicos', ['controller' => 'Pages', 'action' => 'services']); ?>" title="Serviços">Serviços</a>
                </li>
                <li class="menu_item"><a
                        href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'index']); ?>" title="Blog">Blog</a>
                </li>
                <li class="menu_item"><a
                        href="<?php echo Router::url(['controller' => 'Contato', 'action' => 'index']); ?>" title="Contato">Contato</a>
                </li>
            </ul>
        </div>
        <div class="menu_social">
            <ul>
                <?php if(!empty($configs->facebook)){ ?>
                    <li><a href="<?php echo h($configs->facebook) ?>" target="_blank" title="Acessar fanpage do Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <?php } ?>
                <?php if(!empty($configs->instagram)){ ?>
                    <li><a href="<?php echo h($configs->instagram) ?>" target="_blank" title="Acessar o perfil do Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <?php } ?>
                <?php if(!empty($configs->twitter)){ ?>
                    <li><a href="<?php echo h($configs->twitter) ?>" target="_blank" title="Acessar o perfil do Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <?php } ?>
                <?php if(!empty($configs->celular)){ ?>
                    <li><a href="<?php echo h($configs->celular) ?>" target="_blank" title="Conversar pelo Whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <!-- final menu -->
    <!-- Header -->
    <header class="header" id="header">
        <div>
            <div class="header_top">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo">
                                    <a href="<?php echo Router::url('/', ['controller' => 'Pages', 'action' => 'home']); ?>" title="Odontologia Herrera"><img src="/img/logotopo.png" alt="Odontologia Herrera"> </a>
                                </div>
                                <div
                                    class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
                                    <?php if(!empty($configs->celular)){ ?>
                                    <div class="header_top_phone">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <span><?php echo h($configs->celular) ?></span>
                                    </div>
                                    <?php } ?>
                                    <?php if(!empty($configs->telefone)){ ?>
                                    <div class="header_top_phone">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <span><?php echo h($configs->telefone) ?></span>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_nav" id="header_nav_pin">
                <div class="header_nav_inner">
                    <div class="header_nav_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div
                                        class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                                        <nav class="main_nav">
                                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                                <li class="active"><a
                                                        href="<?php echo Router::url('/', ['controller' => 'Pages', 'action' => 'home']); ?>" title="Home">Home</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Router::url( ['controller' => 'Pages', 'action' => 'about']); ?>" title="Institucional">Institucional</a></li>
                                                <li>
                                                    <a href="<?php echo Router::url('servicos', ['controller' => 'Pages', 'action' => 'services']); ?>" title="Serviços">Serviços</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'index']); ?>" title="Blog">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Router::url('contato', ['controller' => 'Contato', 'action' => 'index']); ?>" title="Contato">Contato</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
                                            <?php echo $this->Form->create(null, ['url' => ['controller' => 'Blogs','action' => 'index'],'valueSources' => 'blogs', 'class' => 'search_container_form', 'id' => 'search_container_form']); ?>
                                            <?php echo $this->Form->control('q', ['label' => false, 'type' => 'text', 'class' => 'search_container_input', 'placeholder' => 'Pesquisar...']); ?>
                                            <button class="search_container_button" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                            <?php echo $this->Form->end(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- começo centro -->
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    <!-- final começo centro -->

    <!-- Footer -->
    <footer class="footer">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/images/footer.jpg"
             data-speed="0.8"></div>
        <div class="footer_content">
            <div class="container">
                <div class="row">

                    <!-- Footer About -->
                    <div class="col-lg-3 footer_col">
                        <div class="footer_about">
                            <div class="logo">
                                <a href="<?php echo Router::url('/', ['controller' => 'Pages', 'action' => 'home']); ?>" title="Odontologia Herrera"><img src="/img/logotodape.png" alt="Odontologia Herrera"> </a>
                            </div>
                            <div class="footer_about_text">Confira Nossas Redes Sociais
                            </div>
                            <div class="footer_social">
                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                    <?php if(!empty($configs->facebook)){ ?>
                                        <li><a href="<?php echo h($configs->facebook) ?>" target="_blank" title="Acessar fanpage do Facebook" rel="noopener" aria-label="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <?php } ?>
                                    <?php if(!empty($configs->instagram)){ ?>
                                    <li><a href="<?php echo h($configs->instagram) ?>" target="_blank" title="Acessar o perfil do Instagram" rel="noopener" aria-label="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <?php } ?>
                                    <?php if(!empty($configs->twitter)){ ?>
                                    <li><a href="<?php echo h($configs->twitter) ?>" target="_blank" title="Acessar o perfil do Twitter" rel="noopener" aria-label="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <?php } ?>
                                    <?php if(!empty($configs->celular)){ ?>
                                    <li><a href="<?php echo h($configs->celular) ?>" target="_blank" title="Conversar pelo Whatsapp" rel="noopener" aria-label="Whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Contact -->
                    <div class="col-lg-5 footer_col"></div>

                    <!-- Footer Hours -->
                    <div class="col-lg-4 footer_col">
                        <div class="footer_hours">
                            <div class="footer_hours_title"><i class="fa fa-clock-o" aria-hidden="true"></i> Atendimento</div>
                            <ul class="hours_list">
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Segunda - Umuarama</div>
                                    <div class="ml-auto">08:30 – 18:00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Terça - Umuarama</div>
                                    <div class="ml-auto">08:30 – 18:00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Quarta - Umuarama</div>
                                    <div class="ml-auto">08:30 – 18:00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Quinta - Casa Branca</div>
                                    <div class="ml-auto">08:30 – 18:00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Sexta - Umuarama</div>
                                    <div class="ml-auto">08:30 – 18:00</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-bottom: 30px;">
            Desenvolvido por <a href="https://eduardodev.com.br" target="_blank" class="text-white" title="Desenvolvido por Eduardo Rocha">Eduardo Rocha</a> | Template  <a href="javascript:;" title="Colorlib" class="text-white">Colorlib</a>
        </div>
        <div class="footer_bar">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div
                            class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
                            <nav class="footer_nav">
                                <ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                                    <li><a href="<?php echo Router::url('/', ['controller' => 'Pages', 'action' => 'home']); ?>" title="Home">Home</a></li>
                                    <li><a href="<?php echo Router::url(['controller' => 'Pages', 'action' => 'about']); ?>" title="Institucional">Institucional</a></li>
                                    <li><a href="<?php echo Router::url(['controller' => 'Pages', 'action' => 'services']); ?>" title="Serviços">Serviços</a></li>
                                    <li><a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'index']); ?>" title="Blog">Blog</a></li>
                                    <li><a href="<?php echo Router::url('contato', ['controller' => 'Contato', 'action' => 'index']); ?>" title="Contato">Contato</a></li>
                                </ul>
                            </nav>
                            <?php if(!empty($configs->celular)){ ?>
                            <div class="footer_phone ml-lg-auto">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                <span><?php echo h($configs->celular) ?></span>
                            </div>
                            <?php } ?>
                            <?php if(!empty($configs->telefone)){ ?>
                            <div class="footer_phone ml-lg-5">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span><?php echo h($configs->telefone) ?></span>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FINAL Footer -->
</div>

<?php echo $this->Html->script(['jquery-3.3.1.min', 'popper', 'bootstrap.min', 'TweenMax.min', 'TimelineMax.min', 'ScrollMagic.min', 'animation.gsap.min', 'ScrollToPlugin.min', 'owl.carousel', 'easing', 'parallax.min', 'custom', 'services', 'about', 'news', 'contact','slick.min','jquery.fancybox.min','script-default']); ?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>

<script>
    $(document).ready(function() {
        $("#clicktrigger").trigger("click");
    });

</script>
<ul class="social">
    <?php if(!empty($configs->facebook)){ ?>
    <li class="fb">
        <a class="fa fa-facebook" href="<?php echo h($configs->facebook) ?>" target="_blank" rel="noopener" aria-label="Facebook">
            <span>Facebook</span>
        </a>
    </li>
    <?php } ?>
    <?php if(!empty($configs->celular)){ ?>
    <li class="wp">
        <a class="fa fa-whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=5544999763954" rel="noopener" aria-label="Whatsapp">
            <span>Whatsapp</span>
        </a>
    </li>
    <?php } ?>
    <?php if(!empty($configs->instagram)){ ?>
    <li class="int">
        <a class="fa fa-instagram" href="<?php echo h($configs->instagram) ?>" target="_blank" rel="noopener" aria-label="Instagram">
            <span>Instagram</span>
        </a>
    </li>
    <?php } ?>
    <?php if(!empty($configs->twitter)){ ?>
    <li class="twt">
        <a class="fa fa-twitter" href="<?php echo h($configs->twitter) ?>" target="_blank" rel="noopener" aria-label="Twitter">
            <span>Twitter</span>
        </a>
    </li>
    <?php } ?>
</ul>
</body>
</html>
