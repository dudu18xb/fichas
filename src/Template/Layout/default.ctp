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

$cakeTitle = 'Full Stack Developer';
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
        <meta property="og:image" content="/img/bg.jpg">
        <meta name="title" content="<?php if(!empty($seo)) { echo $cakeTitle." | ". $seo['title']; }else { echo $cakeTitle; } ?>">
        <meta name="description" content="<?php echo $seo['description']; ?>">
        <meta name="keywords" content="<?php echo $seo['keywords']; ?>">
        <meta name='twitter:card' content='summary'>
        <meta name='twitter:url' content='<?php echo $seo['url']; ?>'>
        <meta name='twitter:title' content='<?php if(!empty($seo)) { echo $cakeTitle." | ". $seo['title']; }else { echo $cakeTitle; } ?>'>
        <meta name='twitter:description' content='<?php echo $seo['description']; ?>'>
    <?php } ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"
          async="async">

    <?= $this->Html->meta('icon') ?>

    <!-- importando os estilos -->
    <?php echo $this->Html->css('animate'); ?>
    <?php echo $this->Html->css('icomoon'); ?>
    <?php echo $this->Html->css('bootstrap'); ?>
    <?php echo $this->Html->css('flexslider'); ?>
    <?php echo $this->Html->css('owl.carousel.min'); ?>
    <?php echo $this->Html->css('owl.theme.default.min'); ?>
    <?php echo $this->Html->css('style'); ?>
    <?php echo $this->Html->script(['modernizr-2.6.2.min']); ?>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113196390-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113196390-2');
</script>
</head>
<body>
<div id="colorlib-page">
    <div class="container-wrap">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
            <div class="text-center">
                <div class="author-img" style="background-image: url(img/banner/eduardo.jpg);"></div>
                <h1 id="colorlib-logo"><a href="index.html">Eduardo Rocha</a></h1>
                <span class="position"><a href="https://winsite.com.br/" target="_blank" rel="noopener noreferrer" title="Developer Full Stack in Winsite">Developer Full Stack</a> in Winsite</span>
            </div>
            <nav id="colorlib-main-menu" role="navigation" class="navbar">
                <div id="navbar" class="collapse">
                    <ul>
                        <li class="active"><a href=";" data-nav-section="home">Home</a></li>
                        <li><a href="javascript:;" data-nav-section="about">About</a></li>
                        <li><a href="javascript:;" data-nav-section="skills">Skills</a></li>
                        <li><a href="javascript:;" data-nav-section="education">Education</a></li>
                        <!--
                        <li><a href="#" data-nav-section="experience">Experience</a></li>
                        <li><a href="#" data-nav-section="work">Work</a></li>
                        <li><a href="#" data-nav-section="blog">Blog</a></li>
                        <li><a href="#" data-nav-section="contact">Contact</a></li>
                        -->
                    </ul>
                </div>
            </nav>
            <a href="https://eduardodev.com.br/admin" title="Fichas" target="_blank" style='cursor: pointer;text-align: center;width: 100%;float: left;text-transform: uppercase;'><i class="fas fa-notes-medical"></i> Fichas</a>
            <div class="colorlib-footer">
                <p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fas fa-mouse-pointer"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </span> </small></p>
                <ul>
                    <li><a href="https://www.facebook.com/dudu18xb" target="_blank" rel="noopener noreferrer" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/dudu18XB" target="_blank" rel="noopener noreferrer" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://instagram.com/dudu18xb" target="_blank" rel="noopener noreferrer" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://linkedin.com/in/eduardo-rocha-2b9417145" target="_blank" rel="noopener noreferrer" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://www.youtube.com/c/dudu18XB" target="_blank" rel="noopener noreferrer" title="YouTube"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="https://github.com/dudu18xb" target="_blank" rel="noopener noreferrer" title="GitHub"><i class="fab fa-github"></i></a></li>
                    <li><a href="mailto:eduardorocha460@gmail.com" target="_blank" rel="noopener noreferrer" title="E-mail"><i class="fas fa-envelope"></i></a></li>
                </ul>
            </div>

        </aside>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>


<?php echo $this->Html->script(['jquery.min', 'jquery.easing.1.3','bootstrap.min','jquery.waypoints.min','jquery.flexslider-min','owl.carousel.min','jquery.countTo','main']); ?>

</body>
</html>
