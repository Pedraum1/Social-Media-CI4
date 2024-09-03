<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"></script>
  <!--APP CSS-->
  <link rel="stylesheet" href="<?= base_url('assets/css/style_main.css') ?>">

  <!--AUTH CSS-->
  <link rel="stylesheet" href="<?= base_url('assets/css/auth.css') ?>" />

  <!--FAVICON-->
  <link rel="shortcut icon" href="<?= base_url('favicon.ico') ?>" type="image/x-icon">

  <!--GOOGLE FONTS-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

  <title>Login - Sign up</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="/auth/login_submit" method="post" class="sign-in-form">
          <img src="<?= base_url('assets/img/banner_logo.png') ?>" alt="" class="img-fluid">
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="emailInput" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="passInput" placeholder="Password" />
          </div>
          <input type="submit" name="submit" value="Login" class="btn solid" />
          <?php if(!empty($erros)):?>
            <?php foreach($erros as $erro): ?>
              <p class="error-msg"><?= $erro ?></p>
            <?php endforeach; ?>
          <?php endif; ?>
        </form>
        <form action="/auth/register_submit" method="post" class="sign-up-form">
          <img src="<?= base_url('assets/img/banner_logo.png') ?>" alt="" class="img-fluid mb-5">
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="userInput" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="emailInput" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="passInput" placeholder="Password" />
          </div>
          <input type="submit" name="submit" class="btn" value="Sign up" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="<?= base_url('assets/img/log.svg') ?>" class="image login" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="<?= base_url('assets/img/register.svg') ?>" class="image register" alt="" />
      </div>
    </div>
  </div>

  <!--AUTH JS-->
  <script src="<?= base_url('assets/js/auth.js') ?>"></script>
  <!--FONTAWESOME JS-->
  <script src="https://kit.fontawesome.com/29d69f2549.js" crossorigin="anonymous"></script>
</body>

</html>