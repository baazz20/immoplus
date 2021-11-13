<div class="container col-xl mr-auto">
    <div class="invisible mb-5">...</div>

    <div class="title text-center">
        <span class="category h2 "><?= $params['tag']->name ?></span>
    </div>
    <div class="invisible mb-3">...</div>


    <div class="row">
        <?php foreach ($params['tag']->getPosts() as $post) : ?>
            <div class="col-md-10 ml-auto col-xl-3 mr-auto">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="<?= SCRIPTS . 'asset/img' . DIRECTORY_SEPARATOR . '/bg3.jpg' ?>" alt="Card image cap">
                    <div class="card-body">
                        <small class="text-info">Publié le <?= $post->created_at ?></small>
                        <h4 class="card-title"> <a href="/posts/<?= $post->id ?>" class="category"> <?= $post->title ?> </a><br></h4>
                        <p class="card-text"><?= mb_strimwidth($post->content, 0, 50, "...") ?></p>
                        <a href="/posts/<?= $post->id ?>" class="btn btn-primary">Plus de Détails</a>
                    </div>
                </div>

            </div>
        <?php endforeach ?>
    </div>
</div>