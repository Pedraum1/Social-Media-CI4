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

</head>
<body>

    <div class="row justify-content-center p-0 m-0">

        <!--BARRA LATERAL-->
        <aside class="col-md-2 p-0 m-0 sidebar">
            <?= $this->include('partials/sidebar.php') ?>
        </aside>
        <!--BARRA LATERAL-->

        <!--CONTEÚDO DA PÁGINA-->
        <main class="col-md-4 p-0 m-0">
            <?= $this->renderSection('profile_banner') ?>
            <?= $this->renderSection('content') ?>
        </main>
        <!--CONTEÚDO DA PÁGINA-->

        <!--THRENDING TOPICS E BUSCA-->
        <aside class="col-md-3 d-md-block d-none p-0 m-0 mediabar">
            <?= $this->include('partials/mediabar.php') ?>
        </aside>
        <!--THRENDING TOPICS E BUSCA-->

    </div>
    
    <script src="<?= base_url('assets/js/tweetInput.js') ?>"></script>

    <!--BOOTSTRAP JS-->
    <script src="<?= base_url('assets/libs/bootstrap/bootstrap.bundle.min.js') ?>"></script>
    <!--FONTAWESOME JS-->
    <script src="https://kit.fontawesome.com/29d69f2549.js" crossorigin="anonymous"></script>
</body>
</html>