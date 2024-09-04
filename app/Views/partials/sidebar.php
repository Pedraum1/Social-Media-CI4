<div class="p-4 sidebar-content d-md-block d-none">
    <a href="/" class="logo-link">
        <div class="logo-wrap">            
            <img class="logo" src="<?= base_url('assets/img/logo.png') ?>">            
        </div>
    </a>
    <dl class="">
        <dt>
            <div><a href="/"><i class="fa-solid fa-house"></i>Home</a></div>
        </dt>
        <dt>
            <div><a href="/explorar"><i class="fa-solid fa-magnifying-glass"></i>Explorar</a></div>
        </dt>
        <dt>
            <div><a href="/notificacoes"><i class="fa-solid fa-bell"></i>Notificações</a></div>
        </dt>
        <dt>
            <div><a href="/mensagens"><i class="fa-solid fa-envelope"></i>Mensagens</a></div>
        </dt>
        <dt>
            <div><a href="/salvos"><i class="fa-solid fa-bookmark"></i>Itens salvos</a></div>
        </dt>
        <dt>
            <div><a href="/profile/joao_wildlife"><i class="fa-solid fa-user"></i>Perfil</a></div>
        </dt>
        <dt>
            <div><a href=""><i class="fa-solid fa-bars"></i>Mais</a></div>
        </dt>
    </dl>
</div>

<div class="d-md-none">
    <nav class="navbar navbar-dark">
        <div class="container-fluid">
            
            <a class="navbar-brand" href="#"><img class="profile-img" src="<?= base_url('assets/img/noProfile.webp') ?>"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars" style="color: #FFFFFF;"></i>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            
            <div class="offcanvas-header">
                <a href="" class="logo-link-sm">
                    <div class="logo-wrap-sm">            
                        <img class="img-logo-sm" src="<?= base_url('assets/img/logo.png') ?>">            
                    </div>
                </a>
                <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark" style="color: #FFFFFF;"></i></button>
            </div>
            
            <div class="offcanvas-body sidebar-content-sm">
                <dl class="">
                    <dt>
                        <div><a href=""><i class="fa-solid fa-house"></i>Home</a></div>
                    </dt>
                    <dt>
                        <div><a href="/explorar"><i class="fa-solid fa-magnifying-glass"></i>Explorar</a></div>
                    </dt>
                    <dt>
                        <div><a href="/notificacoes"><i class="fa-solid fa-bell"></i>Notificações</a></div>
                    </dt>
                    <dt>
                        <div><a href="/mensagens"><i class="fa-solid fa-envelope"></i>Mensagens</a></div>
                    </dt>
                    <dt>
                        <div><a href="/salvos"><i class="fa-solid fa-bookmark"></i>Itens salvos</a></div>
                    </dt>
                    <dt>
                        <div><a href="/perfil"><i class="fa-solid fa-user"></i>Perfil</a></div>
                    </dt>
                    <dt>
                        <div><a href=""><i class="fa-solid fa-bars"></i>Mais</a></div>
                    </dt>
                </dl>
            </div>

            </div>
        </div>
    </nav>
</div>