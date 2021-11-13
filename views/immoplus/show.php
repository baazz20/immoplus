<div class="container col-xl mr-auto">
    <div class="invisible mb-2">...</div>

    <div class="wrapper">
        <div class="page-header page-header-small">
            <div class="page-header-image" data-parallax="true" style="background-image: url('../../public/asset/img/bg6.jpg');">
            </div>
            <div class="content-center">
                <div class="container">
                    <h1 class="title"> <?= $params['post']->title ?></h1>
                </div>
            </div>
        </div>
        <div class="section section-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto ">
                        <h2 class="title text-center"> Détails du bien</h2>
                        <div>
                        <blockquote  class="blockquote">
                                    <span>Type de maison : </span>
                                    <?php foreach ($params['post']->getTags() as $tag) : ?>
                                    <a href="/tags/<?= $tag->id ?>" class="badge badge-primary"><?= $tag->name ?></a>
                                    <?php endforeach ?>
                                    <span class="h1" STYLE="padding:0 0 0 90px;"><?= $params['post']->price ?>F</span><br>
                                    <span>Nombre de pieces : </span>
                                    <span class="badge badge-primary"><?= $params['post']->nb_piece ?></span><br>
                                    <span>Surface : </span>
                                    <span class="badge badge-primary"><?= $params['post']->surface ?> M²</span><br>
                                    <div class="invisible mb-2">...</div>
                                   
                                </blockquote>
                                
                            
                              
                            
                        </div>
                    </div>
                </div>
                <div class="separator separator-primary"></div>
                <div class="section-story-overview">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image-container image-left" style="background-image: url('../../public/asset/img/login.jpg')">
                                <!-- First image on the left side -->
                                <p class="blockquote blockquote-primary"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15889.760782122295!2d-3.99805845!3d5.3495874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sci!4v1636787642099!5m2!1sfr!2sci" width="175" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    <br>
                                    <br>
                                    <small>-LOCALISATION</small>
                                </p>
                            </div>
                            <!-- Second image on the left side of the article -->
                            <div class="image-container" style="background-image: url('../../public/asset/img/bg3.jpg')"></div>
                        </div>
                        <div class="col-md-5">
                            <!-- First image on the right side, above the article -->
                            <div class="image-container image-right" style="background-image: url('../../public/asset/img/bg1.jpg')"></div>
                            <h3>description</h3>
                            <p><?= $params['post']->content ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-contact-us text-center">
            <div class="container">
                <h2 class="title">Contacter l'agent Immobilier</h2>
                <p class="description">Votre projet est très important pour nous.</p>
                <div class="row">
                    <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                        <div class="input-group input-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Votre Nom et prénom...">
                        </div>
                        <div class="input-group input-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Votre Email...">
                        </div>
                        <div class="textarea-container">
                            <textarea class="form-control" name="name" rows="4" cols="80" placeholder="tapez votre méssage..."></textarea>
                        </div>
                        <div class="send-button">
                            <a href="#pablo" class="btn btn-primary btn-round btn-block btn-lg">Send Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer footer-default">
            <div class=" container ">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy;
                    <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>, Designed by
                    <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer>
    </div>

</div>