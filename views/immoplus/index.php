<div class="container col-xl mr-auto">
<div class="invisible mb-3">...</div>

    <div class="title">
        <h4>TOUTES LES ANONCES</h4>
    </div>


    <div class="row">
        <?php foreach ($params['posts'] as $post) : ?>
            <div class="col-md-10 ml-auto col-xl-4 mr-auto">
                <p class="category"> <?= $post->title ?> <br> <small class="badge badge-info">Publié le <?= $post->getCreatedAt() ?></small></p>

                <!-- Nav tabs -->
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home_<?= $post->id ?>" role="tab">
                                    <i class="now-ui-icons objects_umbrella-13"></i>photo
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile_<?= $post->id ?>" role="tab">
                                    <i class="now-ui-icons shopping_shop"></i> details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#messages_<?= $post->id ?>" role="tab">
                                    <i class="now-ui-icons shopping_cart-simple"></i> Prix
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#settings_<?= $post->id ?>" role="tab">
                                    <i class="now-ui-icons ui-2_settings-90"></i> Agent
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <!-- Tab panes -->
                        <div class="tab-content text-center">
                            <div class="tab-pane active" id="home_<?= $post->id ?>" role="tabpanel">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item carousel-item-next carousel-item-left">
                                            <img class="d-block" src="<?= SCRIPTS . 'asset/img' . DIRECTORY_SEPARATOR . '/bg1.jpg' ?>" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5><?= $post->title ?>, Exterieur</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block" src="<?= SCRIPTS . 'asset/img' . DIRECTORY_SEPARATOR . '/bg3.jpg' ?>" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5><?= $post->title ?>, Salon</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item active carousel-item-left">
                                            <img class="d-block" src="<?= SCRIPTS . 'asset/img' . DIRECTORY_SEPARATOR . '/bg4.jpg' ?>" alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5><?= $post->title ?>, Chambre</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <i class="now-ui-icons arrows-1_minimal-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile_<?= $post->id ?>" role="tabpanel">
                                <p> <?= $post->getExcerpt() ?></p>
                                <?= $post->getButton() ?>
                            </div>
                            <div class="tab-pane" id="messages_<?= $post->id ?>" role="tabpanel">
                                <h1><?= $post->price ?> FCFA</h1>
                            </div>
                            <div class="tab-pane" id="settings_<?= $post->id ?>" role="tabpanel">
                                <p>
                                    "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>