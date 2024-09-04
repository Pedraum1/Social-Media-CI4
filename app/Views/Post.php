<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('titulo') ?>
Post de <?= $post->writer ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="">
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
                    </div>
                    <!-- POST HEADER PC-->
                    <div class="row justify-content-around align-items-center d-md-flex d-none">
                        <div class="col-12">
                            <h6 class="tweet-name"><b><?= $post->writer ?></b>
                                <a href="/profile/<?= $post->writer_tag ?>">
                                    <span>@<?= $post->writer_tag ?></span>
                                </a>
                                <?= nowTimeDiff($post->created_at) ?>
                            </h6>
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

    <?= $this->include('partials/commentForm.php') ?>

    <h5 class="m-3">Comentários:</h5>

    <?php foreach ($comments as $comment): ?>
        <div class="p-4 pb-2 post-wrap">
            <div class="post-limits">
                <div class="row justify-content-center">
                    <div class="col-md-1 d-md-block d-none text-center">
                        <a href="/profile/<?= $comment->writer_tag ?>">
                            <img class="profile-img" src="<?= base_url('assets/img/noProfile.webp') ?>">
                        </a>
                    </div>
                    <div class="col-md-11">
                        <!--POST HEADER CELULAR-->
                        <div class="row justify-content-start align-items-center d-md-none mb-3">
                            <div class="col-1 me-3">
                                <a href="/profile/<?= $comment->writer_tag ?>">
                                    <img class="profile-img" src="<?= base_url('assets/img/noProfile.webp') ?>">
                                </a>
                            </div>
                            <div class="col-9">
                                <h6 class="tweet-name">
                                    <b><?= $comment->writer ?></b>
                                    <a href="/profile/<?= $comment->writer_tag ?>">
                                        <span>
                                            @<?= $post->writer_tag ?>
                                        </span>
                                    </a>
                                    <?= nowTimeDiff($comment->created_at) ?>
                                </h6>
                            </div>
                            <div class="col-1">
                                <p class="text-end">
                                    <a class="post-link" href="/post/<?= $comment->id ?>">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <!-- POST HEADER PC-->
                        <div class="row justify-content-around align-items-center d-md-flex d-none">
                            <div class="col-11">
                                <h6 class="tweet-name"><b><?= $comment->writer ?></b>
                                    <a href="/profile/<?= $comment->writer_tag ?>">
                                        <span>@<?= $comment->writer_tag ?></span>
                                    </a>
                                    <?= nowTimeDiff($comment->created_at) ?>
                                </h6>
                            </div>
                            <div class="col-1">
                                <p class="text-end">
                                    <a class="post-link" href="/post/<?= $comment->id ?>">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <p><?= $comment->text ?></p>
                    </div>
                </div>
                <div class="row justify-content-start actions-row">
                    <div class="col-2 text-center icon">
                        <a href="/post/<?= $comment->id ?>"><i class="fa-regular fa-comment"></i><?= format($comment->comments) ?></a>
                    </div>
                    <div class="col-2 text-center icon">
                        <a href="/post/<?= $comment->id ?>"><i class="fa-solid fa-repeat"></i><?= format($comment->shares) ?></a>
                    </div>
                    <div class="col-2 text-center icon">
                        <a href="/post/<?= $comment->id ?>"><i class="fa-regular fa-heart"></i><?= format($comment->likes) ?></a>
                    </div>
                    <div class="col-2 text-center icon">
                        <a href="/post/<?= $comment->id ?>"><i class="fa-regular fa-bookmark"></i></a>
                    </div>
                    <div class="col-2 text-center icon">
                        <a href="/post/<?= $comment->id ?>"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
                    </div>
                    <div class="col-2 text-center icon">
                        <span><i class="fa-solid fa-chart-simple"></i><?= format($comment->views) ?></span>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>

<?= $this->endSection() ?>