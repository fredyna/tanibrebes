<header id="header">
    <div class="container-fluid">
        <div id="logo" class="pull-left">
            <a href="#intro" class="scrollto"><img src="{{asset('img/logo/tanibrebes.png')}}"/></a>
            <!-- Uncomment below if you prefer to use an image logo -->
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li id="menu-home"><a href="{{ route('home') }}">Beranda</a></li>
                <li id="menu-tani"><a href="{{ route('tani') }}">Data Tani</a></li>
                <li><a href="#product">Produk Unggulan</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav>
    </div>
</header>
