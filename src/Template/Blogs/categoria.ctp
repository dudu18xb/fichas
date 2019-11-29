<?php

use Cake\Routing\Router;

?>
<?php echo $this->Html->css('news'); ?>
<?php echo $this->Html->css('news_responsive'); ?>
<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/images/news.jpg"
         data-speed="0.8"></div>

    <!-- Header -->

    <div class="home_container page-internal">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title">Blog Categoria</div>
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
                    <?php if(!empty($blogs)){ ?>
                    <?php foreach ($blogs as $blog) { ?>
                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_image"><img src="/files/Blogs/capa/<?php echo h($blog->capa) ?>"
                                                              alt="<?php echo h($blog->titulo) ?>"></div>
                            <div class="news_post_content">
                                <div class="news_post_date"><a
                                        href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $blog->categoria->slug, 'slug' => $blog->slug]); ?>"
                                        title="Visualizar <?php echo h($blog->titulo) ?>"><i class="fa fa-calendar"
                                                                                             aria-hidden="true"></i> <?php echo $blog->data->nice() ?>
                                    </a></div>
                                <div class="news_post_title"><a
                                        href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $blog->categoria->slug, 'slug' => $blog->slug]); ?>"
                                        title="Visualizar  <?php echo h($blog->titulo) ?>"><?php echo h($blog->titulo) ?></a>
                                </div>
                                <div class="news_post_info">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="#"><i class="fa fa-user"
                                                           aria-hidden="true"></i> <?php echo h($blog->autore->nome) ?>
                                            </a></li>
                                        <?php if(!empty($blog->visualizacao)){ ?>
                                            <li>
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo h($blog->visualizacao) ?></a>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 0</a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p><?php echo strip_tags(substr($blog->descricao, 0, 210)); ?></p>
                                </div>
                                <div class="button news_post_button"><a
                                        href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'view', 'categoria_slug' => $blog->categoria->slug, 'slug' => $blog->slug]); ?>"
                                        title="Visualizar <?php echo h($blog->titulo) ?>"><span>Veja Mais</span><span>Veja Mais</span></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php } else { ?>
                        <div class="news_post">
                            <p>Post não encontrado :/</p>
                        </div>
                    <?php } ?>
                    <?php echo $this->element('paginacao'); ?>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="news_sidebar">

                    <!-- Search -->
                    <div class="sidebar_search">
                        <?php echo $this->Form->create(null, ['valueSources' => 'blogs', 'class' => 'sidebar_search', 'id' => 'sidebar_search','url' => ['controller' => 'blogs','action' => 'index']]); ?>
                        <?php echo $this->Form->control('q', ['label' => false, 'type' => 'text', 'class' => 'sidebar_search_input', 'placeholder' => 'Buscar por título']); ?>
                        <button class="sidebar_search_button" type="submit"><i class="fa fa-search"
                                                                               aria-hidden="true"></i></button>
                        <?php echo $this->Form->end(); ?>
                    </div>
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

                    <?php if(!empty($categorias)){ ?>
                    <!-- Categories -->
                    <div class="sidebar_categories">
                        <div class="sidebar_title">Categorias</div>
                        <div class="categories">
                            <ul>
                                <?php foreach ($categorias as $categoria){ ?>
                                <li><a href="<?php echo Router::url(['controller' => 'Blogs', 'action' => 'categoria', 'categoria_slug' => $categoria->slug]); ?>" title="Buscar por categoria <?php echo h($categoria->nome) ?>">
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
