<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--PAGE TITLE-->
    <title>Tcholas Social | <?= $this->renderSection('titulo') ?></title>

    <!--APP CSS-->
    <link rel="stylesheet" href="<?= base_url('assets/css/style_main.css') ?>">

    <!--FAVICON-->
    <link rel="shortcut icon" href="<?= base_url('favicon.ico') ?>" type="image/x-icon">

    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="<?= base_url('assets/libs/bootstrap/bootstrap.min.css') ?>">

    <!--FONTAWESOME CSS-->
    <link rel="stylesheet" href="<?= base_url('assets/libs/fontawesome/all.min.css') ?>">

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

    <style>
        .wrapper {
            height: 100vh;
            width: 100%;
        }

        .register-box {
            background: transparent;
            position: relative;
            translate: -50% -50%;
            top: 50%;
            left: 50%;
            color: var(--white);
            width: 90%;
            height: 90%;
            border: var(--gray) 1px solid;
            border-radius: 50px;
            padding: 50px;
            z-index: 2;
        }

        .ball {
            content: "";
            position: absolute;
            top: -230%;
            left: -60%;
            height: 2000px;
            width: 2000px;
            transform: scale(200%);
            background: var(--purple);
            border-radius: 50%;
        }

        h1,
        .input-area {
            margin-bottom: 25px;
        }

        input {
            background-color: var(--white);
            border-radius: 60px !important;
        }

        .upload-container {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        #image {
            width: 450px;
            height: 450px;
            object-fit: cover;
            border: 2px dashed #ddd;
            border-radius: 50%;
        }

        #fileInput {
            display: none;
            /* Esconde o input de arquivo */
        }
    </style>

</head>

<body>

    <div class="wrapper">
        <div class="ball"></div>
        <div class="register-box">
            <h1>Falta pouco para terminar seu cadastro!</h1>
            <?= form_open_multipart('/auth/complete_register') ?>
            <div class="row justify-content-around align-items-center">
                <div class="col-md-4">
                    <!--INPUT NOME-->
                    <div class="input-area">
                        <h5 class="mb-2">Email</h5>
                        <input class="form-control form-control-lg mb-2" name="emailInput" type="text">
                        <h5 class="mb-2">Senha</h5>
                        <input class="form-control form-control-lg mb-2" name="passInput" type="text">
                        <h5 class="mb-2">Confirmar Senha</h5>
                        <input class="form-control form-control-lg mb-2" name="passConfirmInput" type="text">
                        <h5 class="mb-2">Nome de Usuário</h5>
                        <input class="form-control form-control-lg mb-2" name="nameInput" type="text">
                        <p>Nome que será exibido para todos</p>
                    </div>
                    <!--INPUT TAG-->
                    <div class="input-area">
                        <h5 class="mb-2">Tag</h5>
                        <input class="form-control form-control-lg mb-2" name="tagInput" type="text" placeholder="@">
                        <p>Sua tag é única e nenhum outro usuário terá uma igual.<br>(pense bem em qual irá usar)</p>
                        <?php if(!empty($erros)): ?>
                            <?php foreach($erros as $erro):?>
                                <p class="text-danger"><?= $erro ?></p>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <button class="btn btn-tweet" type="submit">
                        <h3>Registrar</h3>
                    </button>
                </div>
                <div class="col-md-6 text-center">
                    <div class="upload-container">
                        <!-- A imagem clicável -->
                        <img id="image" src="<?= base_url('assets/img/noProfile.webp') ?>" alt="Clique para adicionar uma imagem" onclick="document.getElementById('fileInput').click();">

                        <!-- Input de arquivo escondido -->
                        <input type="file" id="fileInput" accept="image/*" onchange="loadFile(event)">

                        <input type="hidden" value="<?= encrypt($senha)?>" name="senhaInput">
                        <input type="hidden" value="<?= encrypt($email)?>" name="emailInput">
                        <h3 class="mt-4">Escolha a sua foto</h3>
                        <p>(Opicional)</p>
                    </div>
                </div>

            </div>
            <?= form_close() ?>
        </div>
    </div>

    <script>
        function loadFile(event) {
            var image = document.getElementById('image');
            image.src = URL.createObjectURL(event.target.files[0]);
            image.onload = function() {
                URL.revokeObjectURL(image.src); // Libera o recurso
            }
        }
    </script>

    <script src="<?= base_url('assets/js/tweetInput.js') ?>"></script>

    <!--BOOTSTRAP JS-->
    <script src="<?= base_url('assets/libs/bootstrap/bootstrap.bundle.min.js') ?>"></script>
    <!--FONTAWESOME JS-->
    <script src="https://kit.fontawesome.com/29d69f2549.js" crossorigin="anonymous"></script>
</body>

</html>