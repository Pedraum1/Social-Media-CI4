<?= form_open('comment_submit') ?>
<input type="hidden" name="originalInput" value="<?= $post->id ?>" >
<div class="p-4 pb-2 postForm-wrap d-md-block d-none">
    <div class="row justify-content-center">
        <div class="col-md-1 text-center d-md-block d-none">
            <a href="/profile/<?= session('user')->tag ?>">
                <img class="profile-img" src="<?= base_url('assets/img/noProfile.webp') ?>">
            </a>
        </div>
        <div class="col-md-11">
            <textarea placeholder="O que está acontecendo?" maxlength="150" rows='1' name="commentInput" oninput="autoGrow(this); countCharacters(this);"></textarea>
            <div class="text-end">
                <p id="charCount"></p>
                <p class="text-danger">
                    <?php if (!empty($comments_erros)): ?>
                        <?php foreach ($comments_erros as $comment_erro): ?>
                            <?= $comment_erro ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </p>
                <input class="btn btn-tweet mt-2" type="submit">
            </div>
        </div>
    </div>
</div>
<?= form_close() ?>

<button type="button" class="tweet-btn d-md-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="fa-regular fa-comment"></i>
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?= form_open('comment_submit') ?>
            <input type="hidden" name="originalInput" value="<?= $post->id ?>" >
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Criar nova publicação</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="p-4 pb-2 postForm-wrap">
                    <div class="row justify-content-center">
                        <div class="col-2 text-center">
                            <a href="/profile/<?= session('user')->tag ?>">
                                <img class="profile-img" src="<?= base_url('assets/img/noProfile.webp') ?>">
                            </a>
                        </div>
                        <div class="col-10">
                            <textarea placeholder="O que está acontecendo?" maxlength="150" rows='3' name="commentInput" oninput="autoGrow(this); countCharacters(this);"></textarea>
                            <div class="text-end">
                                <p id="charCount"></p>
                                <p class="text-danger text-start">
                                    <?php if (!empty($comments_erros)): ?>
                                        <?php foreach ($comments_erros as $comment_erro): ?>
                                            <?= $comment_erro ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div>
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

<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
    })
</script>