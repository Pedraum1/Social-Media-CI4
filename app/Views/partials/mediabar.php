<div class="p-4">
    <?= form_open('search') ?>
    <input class="search-input mb-5" type="text" placeholder="Pesquise Tcholas">
    <?= form_close() ?>

    <div class="box p-4 mb-5">
        <h4>Talvez você goste</h4>
        <div class="my-5">            
                <div class="row justify-content-center align-items-center border-top border-bottom py-3">
                    <div class="col-3">
                        <a href=""><img class="img-fluid rounded-circle" src="<?= base_url('assets/img/noProfile.webp') ?>"></a>
                    </div>
                    <div class="col-6">
                        <a href="">
                            <h6><b>Fulaninho</b></h6>
                            <small>@FulAino</small>
                        </a>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-tweet"><h6>Seguir</h6></button>
                    </div>
                </div>
        </div>
    </div>
    <div class="box p-4">
        <h4>Trending Topics</h4>
        <div class="my-5">
            <a href="">
                <div class="row justify-content-center align-items-center border-top border-bottom py-3">
                    <div class="col-9">
                        <small>tópico fofocado</small>
                        <h6><b>Fofocas fofocadas</b></h6>
                    </div>
                    <div class="col-3">
                        <img class="img-fluid" src="<?= base_url('assets/img/noProfile.webp') ?>">
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>