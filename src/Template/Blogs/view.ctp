<?php

use Cake\Routing\Router;

?>
<?php echo $this->Html->css('news'); ?>
<?php echo $this->Html->css('news_responsive'); ?>
<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll"
         data-image-src="/files/Blogs/capa/<?php echo h($blog->capa) ?>" data-speed="0.8"
         style="background-color: #000;opacity: 0.6;"></div>

    <!-- Header -->

    <div class="home_container page-internal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="home_content float-left w-100">
                        <div class="home_title text-left float-left w-100" style="height: 0;"><h2
                                class="w-100 float-left"><?php echo h($blog->titulo) ?></h2></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="news">
    <div class="container">
        <div class="row">

            <!-- News Posts -->
            <div class="col-lg-8">
                <div class="news_posts">

                    <!-- News Post -->
                    <div class="news_post">
                        <div class="news_post_content" style="padding: 0;">
                            <div class="news_post_image"><img src="/files/Blogs/capa/<?php echo h($blog->capa) ?>"
                                                              alt="<?php echo h($blog->titulo) ?>"></div>
                            <div class="news_post_info">
                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                    <li><a href="#"><i class="fa fa-user"
                                                       aria-hidden="true"></i> <?php echo h($blog->autore->nome) ?></a>
                                    </li>
                                    <?php if (!empty($blog->visualizacao)) { ?>
                                        <li><a href="#"><i class="fa fa-eye"
                                                           aria-hidden="true"></i> <?php echo h($blog->visualizacao) ?>
                                            </a></li>
                                    <?php } else { ?>
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="news_post_text">
                                <?php echo $blog->descricao; ?>
                            </div>
                            <?php if ($verificaFotos > 0) { ?>
                                <?php if (!empty($fotos)) { ?>
                                    <div class="section-gallery-images" style="margin-top: 30px;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <h3 class="title-galeria">Galeria de Imagens</h3>
                                                </div>
                                            </div>
                                            <div class="row align-items-center justify-content-center">
                                                <?php foreach ($fotos as $foto) { ?>
                                                    <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                                        <a href="/files/Fotos/imagem/<?php echo h($foto->imagem); ?>"
                                                           class="card-link"
                                                           data-fancybox="<?php echo h($foto->descricao); ?>"
                                                           title="<?php echo h($foto->descricao); ?>">
                                                            <img
                                                                src="/files/Fotos/imagem/<?php echo h($foto->imagem); ?>"
                                                                alt="<?php echo h($foto->descricao); ?>"
                                                                style="height: 100px;">
                                                        </a>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="news_sidebar">

                    <div class="sidebar_search">
                        <?php echo $this->Form->create(null, ['valueSources' => 'blogs', 'class' => 'sidebar_search', 'id' => 'sidebar_search', 'url' => ['controller' => 'blogs', 'action' => 'index']]); ?>
                        <?php echo $this->Form->control('q', ['label' => false, 'type' => 'text', 'class' => 'sidebar_search_input', 'placeholder' => 'Buscar por título']); ?>
                        <button class="sidebar_search_button" type="submit"><i class="fa fa-search"
                                                                               aria-hidden="true"></i></button>
                        <?php echo $this->Form->end(); ?>
                    </div>

                    <!-- Latest News -->
                    <?php if (!empty($lastblogs)) { ?>
                        <!-- Latest News -->
                        <div class="sidebar_latest">
                            <div class="sidebar_title">Veja Também</div>
                            <div class="sidebar_latest_container">
                                <!-- Latest News Post -->
                                <?php foreach ($lastblogs as $lastblog) { ?>
                                    <div class="latest d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="latest_image">
                                                <img src="/files/Blogs/capa/<?php echo h($lastblog->capa) ?>"
                                                     alt="<?php echo h($lastblog->titulo) ?>">
                                            </div>
                                        </div>
                                        <div class="latest_content">
                                            <div class="latest_title"><a
                                                    href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $lastblog->categoria->slug, 'slug' => $lastblog->slug]); ?>"
                                                    title="<?php echo h($lastblog->titulo) ?>"><?php echo h($lastblog->titulo) ?></a>
                                            </div>
                                            <div class="latest_info">
                                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                                    <li>
                                                        <a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $lastblog->categoria->slug, 'slug' => $lastblog->slug]); ?>"
                                                           title="Autor <?php echo h($lastblog->autore->nome) ?>"><i
                                                                class="fa fa-user"
                                                                aria-hidden="true"></i> <?php echo h($lastblog->autore->nome) ?>
                                                        </a></li>
                                                    <li>
                                                        <a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $lastblog->categoria->slug, 'slug' => $lastblog->slug]); ?>"
                                                           title="Post publicado em <?php echo h($lastblog->data->nice()) ?>"><i
                                                                class="fa fa-calendar"
                                                                aria-hidden="true"></i> <?php echo h($lastblog->data->nice()) ?>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                    <?php } ?>


                    <?php if (!empty($categorias)) { ?>
                        <!-- Categories -->
                        <div class="sidebar_categories">
                            <div class="sidebar_title">Categorias</div>
                            <div class="categories">
                                <ul>
                                    <?php foreach ($categorias as $categoria) { ?>
                                        <li>
                                            <a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'categoria', 'categoria_slug' => $categoria->slug]); ?>"
                                               title="Buscar por categoria <?php echo h($categoria->nome) ?>">
                                                <div class="d-flex flex-row align-items-center justify-content-start">
                                                    <div><?php echo h($categoria->nome) ?></div>
                                                </div>
                                            </a></li>
                                    <?php } ?>

                                </ul>
                            </div>
                        </div>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div>
</div>
