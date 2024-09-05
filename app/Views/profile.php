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
            <?php if ($user->id != session('user')->id): ?>
                <a href="/follow/<?= $user->tag ?>" class="btn btn-tweet">
                    <h6>Seguir <i class="fa-solid fa-plus"></i></h6>
                </a>
            <?php else: ?>
                <button type="button" class="btn btn-tweet" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                    <h6>Editar Perfil</h6>
                </button>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->include('partials/postForm.php') ?>

<div class="">
    <?php foreach ($posts as $post): ?>
        <div class="p-4 pb-2 post-wrap">
            <div class="post-limits">
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
                                <h6 class="tweet-name">
                                    <b><?= $post->writer ?></b>
                                    <a href="/profile/<?= $post->writer_tag ?>">
                                        <span>@<?= $post->writer_tag ?></span>
                                    </a>
                                    <?= nowTimeDiff($post->created_at) ?>
                                </h6>
                            </div>
                        </div>
                        <h6 class="tweet-name d-md-block d-none">
                            <b><?= $post->writer ?></b>
                            <a href="/profile/<?= $post->writer_tag ?>">
                                <span>@<?= $post->writer_tag ?></span>
                            </a>
                            <?= nowTimeDiff($post->created_at) ?>
                        </h6>
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

<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-profile">
        <div class="modal-content">
            <?= form_open('/profile/'.$user->tag.'/edit') ?>
            <div class="modal-header text-center">
                <h1 class="modal-title fs-5 " id="exampleModalLabel">Editar meu perfil</h1>
            </div>
            <div class="modal-body p-0">
                <div class="postForm-wrap">

                    <img src="<?= base_url('assets/img/noProfile.webp') ?>" id="banner" class="profile-banner" onclick="document.getElementById('bannerInput').click();">
                    <input type="file" name="bannerInput" id="bannerInput" class="d-none" accept="image/*" onchange="loadBanner(event)">
                    
                    <img src="<?= base_url('assets/img/noProfile.webp') ?>" id="photo" class="profile-icon" onclick="document.getElementById('photoInput').click();">
                    <input type="file" name="photoInput" id="photoInput" class="d-none" accept="image/*" onchange="loadPhoto(event)">
                    
                    <h6 class="ms-5">Nome de Exibição</h6>
                    <input type="text" class="form-control profile-edit mx-auto" placeholder="Ex: Alice Roberts" name="nameInput" value="<?= session('user')->name ?>">
                    <h6 class="ms-5">Tag</h6>
                    <input type="text" class="form-control profile-edit mx-auto" placeholder="(Caracteres especiais serão excluídos)" name="tagInput" value="<?= session('user')->tag ?>">
                    <h6 class="ms-5">Descrição</h6>
                    <textarea type="text" class="form-control profile-edit mx-auto" name="descriptionText">
                        <?= session('user')->description ?>
                    </textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-tweet mt-2" type="submit">
                    <h6>Postar</h6>
                </button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/js/loadFile.js') ?>"></script>
<script src="<?= base_url('assets/js/loadFile.js') ?>"></script>

<?= $this->endSection() ?>