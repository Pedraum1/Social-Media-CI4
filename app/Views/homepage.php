<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('titulo') ?>
Página Inicial
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->include('partials/postForm.php') ?>

<div class="">
    <?php

    use CodeIgniter\I18n\Time;

    foreach ($posts as $post): ?>
        <div class="p-4 pb-2 post-wrap">
            <div class="post-limits">
                <div class="row justify-content-center">
                    <div class="col-md-1 d-md-block d-none text-center">
                        <a href="/profile/<?= $post->writer_tag ?>">
                            <img class="profile-img" src="<?= base_url('assets/img/noProfile.webp') ?>">
                        </a>
                    </div>
                    <div class="col-md-11">
                        <!--POST HEADER CELULAR-->
                        <div class="row justify-content-start align-items-center d-md-none mb-3">
                            <div class="col-1 me-3">
                                <a href="/profile/<?= $post->writer_tag ?>">
                                    <img class="profile-img" src="<?= base_url('assets/img/noProfile.webp') ?>">
                                </a>
                            </div>
                            <div class="col-9">
                                <h6 class="tweet-name">
                                    <b><?= $post->writer ?></b>
                                    <a href="/profile/<?= $post->writer_tag ?>">
                                        <span>
                                            @<?= $post->writer_tag ?>
                                        </span>
                                    </a>
                                    <?= nowTimeDiff($post->created_at) ?>
                                </h6>
                            </div>
                            <div class="col-1">
                                <p class="text-end">
                                    <a class="post-link" href="/post/<?= $post->id ?>">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <!-- POST HEADER PC-->
                        <div class="row justify-content-around align-items-center d-md-flex d-none">
                            <div class="col-11">
                                <h6 class="tweet-name"><b><?= $post->writer ?></b>
                                    <a href="/profile/<?= $post->writer_tag ?>">
                                        <span>@<?= $post->writer_tag ?></span>
                                    </a>
                                    <?= nowTimeDiff($post->created_at) ?>
                                </h6>
                            </div>
                            <div class="col-1">
                                <p class="text-end">
                                    <a class="post-link" href="/post/<?= $post->id ?>">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <p><?= $post->text ?></p>
                    </div>
                </div>
                <div class="row justify-content-start actions-row">
                    <div class="col-2 text-center icon">
                        <a href="/post/<?= $post->id ?>"><i class="fa-regular fa-comment"></i><?= format($post->comments) ?></a>
                    </div>
                    <div class="col-2 text-center icon">
                        <a href="/post/<?= $post->id ?>"><i class="fa-solid fa-repeat"></i><?= format($post->shares) ?></a>
                    </div>
                    <div class="col-2 text-center icon">
                        <a href="/post/<?= $post->id ?>"><i class="fa-regular fa-heart"></i><?= format($post->likes) ?></a>
                    </div>
                    <div class="col-2 text-center icon">
                        <a href="/post/<?= $post->id ?>"><i class="fa-regular fa-bookmark"></i></a>
                    </div>
                    <div class="col-2 text-center icon">
                        <a href="/post/<?= $post->id ?>"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
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