<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('titulo') ?>
Página Inicial
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->include('partials/postForm.php') ?>

<div class="">
    <?php foreach ($posts as $post): ?>
        <div class="p-4 pb-2 post-wrap">
            <div>
                <div class="row justify-content-center">
                    <div class="col-md-1 d-md-block d-none text-center">
                        <a href="/profile/<?= $post->writer_tag ?>">
                            <img class="profile-img" src="<?= base_url('assets/img/noProfile.webp') ?>">
                        </a>
                    </div>
                    <div class="col-md-11">
                        <div class="row justify-content-start align-items-center d-md-none mb-3">
                            <div class="col-1 me-3">
                                <a href="/profile/<?= $post->writer_tag ?>">
                                    <img class="profile-img" src="<?= base_url('assets/img/noProfile.webp') ?>">
                                </a>
                            </div>
                            <div class="col-10">
                                <h6 class="tweet-name"><b><?= $post->writer ?></b> <a href="/profile/<?= $post->writer_tag ?>"><span>@<?= $post->writer_tag ?></span></a></h6>
                            </div>
                        </div>
                        <div class="row justify-content-between align-items-center">
                            <div class="col">
                                <h6 class="tweet-name d-md-block d-none"><b><?= $post->writer ?></b>
                                    <a href="/profile/<?= $post->writer_tag ?>">
                                        <span>@<?= $post->writer_tag ?></span>
                                    </a>
                                </h6>
                            </div>
                            <div class="col">
                                <p class="text-end"><a class="post-link" href="/post/<?= $post->id ?>">Ver</a></p>
                            </div>
                        </div>
                        <p><?= $post->text ?></p>
                    </div>
                </div>
                <div class="row justify-content-start actions-row">
                    <div class="col-2 text-center icon">
                        <a href="/"><i class="fa-regular fa-comment"></i><?= format($post->comments) ?></a>
                    </div>
                    <div class="col-2 text-center icon">
                        <a href="/"><i class="fa-solid fa-repeat"></i><?= format($post->shares) ?></a>
                    </div>
                    <div class="col-2 text-center icon">
                        <a href="/"><i class="fa-regular fa-heart"></i><?= format($post->likes) ?></a>
                    </div>
                    <div class="col-2 text-center icon">
                        <a href="/"><i class="fa-regular fa-bookmark"></i></a>
                    </div>
                    <div class="col-2 text-center icon">
                        <a href="/"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
                    </div>
                    <div class="col-2 text-center icon">
                        <span><i class="fa-solid fa-chart-simple"></i><?= format($post->views) ?></span>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection() ?>