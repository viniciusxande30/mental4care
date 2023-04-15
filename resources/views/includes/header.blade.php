<body>

    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- navbar start -->
    <nav class="navbar navbar-area navbar-expand-lg">
        <div class="container nav-container navbar-bg">
            <div class="responsive-mobile-menu">
                <button class="menu toggle-btn d-block d-lg-none" data-target="#itech_main_menu" 
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="logo">
                <a href="{{url('/')}}"><img src="assets/img/logo.png" alt="img"  style="max-width: 300px"></a>
            </div>
            <div class="nav-right-part nav-right-part-mobile">
                <a class="search-bar-btn" href="#">
                    <i class="fa fa-search"></i>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="itech_main_menu">
                <ul class="navbar-nav menu-open text-lg-end">
                    <li class="">
                        <a href="{{url('/')}}">Página Inicial</a>
                       
                    </li>
                    <li class="">
                        <a href="{{url('/')}}/#servicos">Serviços</a>
                        
                    </li>
                    <li class="">
                        <a href="{{url('/')}}/#cases">Cases de Sucesso</a>
                        
                    </li>
                    <!-- <li class="menu-item-has-children">
                        <a href="#">Nosso Blog</a>
                       
                    </li> -->
                    <li><a href="{{url('/')}}/contato">Mantenha Contato</a></li>
                </ul>
            </div>
            <div class="nav-right-part nav-right-part-desktop align-self-center">
                <a class="navbar-phone" href="https://wa.me/5511958388091?text=Ol%C3%A1!%20Quero%20conhecer%20mais%20sobre%20a%20Mental4Care">
                    <span class="icon">
                        <img src="assets/img/icon/1.png" alt="img">
                    </span>
                    <span>Duvidas?</span>
                    <h5>(11) 95838-8091</h5>
                </a>
            </div>
        </div>
    </nav>
    <!-- navbar end -->