<div data-active-color="black" data-background-color="white" data-image="" class="app-sidebar">
    <div class="sidebar-header">
        <div class="logo clearfix"><a href="index.html" class="logo-text float-left">
            <span class="text align-middle"
            style="font-size: 11px;padding-left: 20px;font-weight: 600; color: #131edc">Tani Brebes</span>
            <div class="logo-img"><img src="{{ asset('app-assets/img/logo.png') }}" alt="Convex Logo"/></div><span class="text align-middle"></span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="expanded" class="ft-disc toggle-icon"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-circle"></i></a></div>
    </div>
    <div class="sidebar-content">
        <div class="nav-container">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li id="menu-dashboard" class="nav-item"><a href="#"><i class="icon-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
            </li>
            <li id="menu-tani" class="nav-item"><a href="{{ route('tani.index') }}"><i class="icon-users"></i><span data-i18n="" class="menu-title">Kelompok Tani</span></a>
            </li>
            <li id="menu-product" class="nav-item"><a href="#"><i class="icon-drawer"></i><span data-i18n="" class="menu-title">Data Produk</span></a>
            </li>

            <li class="has-sub nav-item"><a href="#"><i class="icon-settings"></i><span data-i18n="" class="menu-title">Pengaturan</span></a>
                <ul class="menu-content" style="">
                    <li id="menu-setting-about" class="is-shown"><a href="{{ route('about.index') }}" class="menu-item">Tentang Kami</a>
                  </li>
                  <li id="menu-setting-account" class="is-shown"><a href="extended-table.html" class="menu-item">Akun</a>
                  </li>
                </ul>
            </li>
        </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
