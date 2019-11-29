<?php echo $this->Html->css('contact'); ?>
<?php echo $this->Html->css('contact_responsive'); ?>
<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>

    <!-- Header -->

    <div class="home_container page-internal">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title">Contato</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->Flash->render(); ?>
<!-- Contact -->

<div class="contact">
    <div class="container">
        <div class="row">

            <!-- Contact form -->
            <div class="col-lg-12 contact_col">
                <div class="contact_form">
                    <div class="contact_title">Formulário</div>
                    <div class="contact_form_container">
                        <?php echo $this->Form->create($contato,['id' => 'contact_form','class' => 'contact_form']); ?>
                        <form action="#" id="contact_form" class="contact_form">
                            <?php echo $this->Form->control('nome',['label' => false,'type' => 'text', 'id' => 'contact_input','class' => 'contact_input','placeholder' => 'Nome Completo','required' => true]); ?>
                            <?php echo $this->Form->control('email',['label' => false,'type' => 'email', 'id' => 'contact_email','class' => 'contact_input','placeholder' => 'Insira um e-mail válido','required' => true]); ?>
                            <?php echo $this->Form->control('assunto',['label' => false,'type' => 'text', 'id' => 'contact_subject','class' => 'contact_input','placeholder' => 'Assunto','required' => true]); ?>
                            <?php echo $this->Form->control('mensagem',['label' => false,'type' => 'textarea', 'id' => 'contact_textarea','class' => 'contact_input contact_textarea','placeholder' => 'Mensagem','required' => true]); ?>
                            <button class="contact_button" id="contact_button" type="submit">Enviar</button>
                        </form>
                        <?php echo $this->Form->end(); ?>
                    </div>
                </div>
            </div>

            <!-- contact info -->
            <div class="contact_info">
                <div class="row">
                    <div class="col-lg-3 offset-lg-1">
                        <div class="contact_info_list">
                            <div class="contact_info_title"><i class="fa fa-info-circle" aria-hidden="true"></i> Informações de Contato</div>
                            <ul>
                                <li><span>Umuarama: </span>Av. Pres. Castelo Branco, 3620 - Zona VI, Umuarama - PR, 87503-200</li>
                                <li><span>Email: </span>contato@herrera.com.br</li>
                                <?php if(!empty($configs->telefone)){ ?>
                                <li><span>Telefone: </span><?php echo h($configs->telefone) ?></li>
                                <?php } ?>
                                <?php if(!empty($configs->celular)){ ?>
                                    <li><span>Celular: </span><?php echo h($configs->celular) ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="contact_info_list contact_info_list_2">
                            <ul>
                                <li><span>Casa Branca: </span>Av. Brasil, 045, Centro, Casa Branca | Xambrê - PR, 87536-000</li>
                                <li><span>Email: </span>contato@herrera.com.br</li>
                                <?php if(!empty($configs->telefone)){ ?>
                                    <li><span>Telefone: </span><?php echo h($configs->telefone) ?></li>
                                <?php } ?>
                                <?php if(!empty($configs->celular)){ ?>
                                    <li><span>Celular: </span><?php echo h($configs->celular) ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact_info_list">
                            <div class="contact_info_title"><i class="fa fa-clock-o" aria-hidden="true"></i> Horário Atendimento</div>
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Segunda Feira - Umuarama</div>
                                    <div class="ml-auto">08:30 : 18:00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Terça Feira - Umuarama</div>
                                    <div class="ml-auto">08:30 – 18:00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Quarta Feira - Umuarama</div>
                                    <div class="ml-auto">08:30 – 18:00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Quinta Feira - Casa Branca</div>
                                    <div class="ml-auto">08:30 – 18:00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Sexta Feira - Umuarama</div>
                                    <div class="ml-auto">08:30 – 18:00</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Google Map -->

<div class="contact_map">
    <!-- Google Map -->
    <div class="map">
        <div id="google_map" class="google_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.6449016343527!2d-53.31617240511726!3d-23.760039078896252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f2d402b45fe6cb%3A0x1eecb8117aa559fe!2sOdonto+Herrera!5e0!3m2!1spt-BR!2sbr!4v1550714219894" width="100%" height="760" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
