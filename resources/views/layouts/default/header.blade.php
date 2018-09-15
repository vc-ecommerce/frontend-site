<header class="header-area transparent-bar padding-width-1 clearfix">
    <div class="container-fluid">
        <div class="header-top ptb-15">
            <div class="row">
                
                @include('layouts.default.logo')

                <div class="col-lg-6 col-md-8 col-12">
                    <div class="header-right-site">
                        <div class="default-message same-style">
                            <p>Clique Aqui e faça o seu cadastro! </p>
                        </div>
    
                        <div class="header-login">
                            <a href="login-register.html">
                                <span class="ion-person"></span>
                            </a>
                        </div>

                        @include('layouts.default.cart')
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.default.menu_top')
</header>