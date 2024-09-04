<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('titulo') ?>
<?= $user->name ?>
<?= $this->endSection() ?>

<?= $this->section('profile_banner') ?>

<div class="profile-banner-box">
    <div class="banner-img bg-danger">
        <img class="banner-profile-img mb-2" src="<?= base_url('assets/img/noProfile.webp') ?>">
    </div>
        <div class="row justify-content-between mx-3">
            <div class="col-9">
                <div class="banner-box-content">
                    <h2><?= $user->name ?></h2>
                    <p>@<?= $user->tag ?></p>
                    <p><b><?= format($user->followers) ?></b> seguidores <b><?= format($user->following) ?></b> seguindo <b>5</b> post</p>
                    <p><?= $user->description ?></p>
                </div>
            </div>
            <div class="col-3 mt-3">
                <?php if($user->id != session('user')->id):?>
                <a href="/follow/<?= $user->tag ?>" class="btn btn-tweet"><h6>Seguir <i class="fa-solid fa-plus"></i></h6></a>
                <?php endif;?>
            </div>
        </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->include('partials/postForm.php') ?>

<div class="">
    <?php foreach($posts as $post): ?>
        <div class="p-4 pb-2 post-wrap">
            <div class="row justify-content-center">
                <div class="col-md-1 d-md-block d-none text-center">
                    <a href="/profile">
                        <img class="profile-img" src="<?= base_url('assets/img/noProfile.webp') ?>">
                    </a>
                </div>
                <div class="col-md-11">
                    <div class="row justify-content-start align-items-center d-md-none mb-3">
                        <div class="col-1 me-3">
                            <a href="/profile">
                                <img class="profile-img" src="<?= base_url('assets/img/noProfile.webp') ?>">
                            </a>
                        </div>
                        <div class="col-10">
                            <h6 class="tweet-name"><b><?= $post->writer ?></b> <a href=""><span>@<?= $post->writer_tag ?></span></a></h6>
                        </div>
                    </div>
                    <h6 class="tweet-name d-md-block d-none"><b><?= $post->writer ?></b> <a href=""><span>@<?= $post->writer_tag ?></span></a></h6>
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
    <?php endforeach; ?>
</div>

<?= $this->endSection() ?>