<div data-active-color="white" data-background-color="black" data-image="../app-assets/img/sidebar-bg/01.jpg" class="app-sidebar">
    <div class="sidebar-header">
        <div class="logo clearfix">
            <a href="index-2.html" class="logo-text float-left">
                <div class="logo-img">
                    <img src="../app-assets/img/logo.png" alt="" />
                </div>
                <span class="text align-middle">CAU</span>
            </a>
            <a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block">
                <i data-toggle="expanded" class="ft-disc toggle-icon"></i>
            </a>
            <a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none">
                <i class="ft-circle"></i>
            </a>
        </div>
    </div>
    <div class="sidebar-content">
        <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                <li class="nav-item">
                    <a href="<?= BASEURL; ?>">
                        <i class="icon-book-open"></i>
                        <span data-i18n="" class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASEURL; ?>/karyawan">
                        <i class="icon-support"></i>
                        <span data-i18n="" class="menu-title">Karyawan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASEURL; ?>/laporan">
                        <i class="icon-support"></i>
                        <span data-i18n="" class="menu-title">Laporan</span>
                    </a>
                </li>
                <li class=" nav-item">
                    <a href="<?= BASEURL; ?>/waktu">
                        <i class="icon-time"></i>
                        <span data-i18n="" class="menu-title">Waktu Presensi</span>
                    </a>
                </li>
                <li class=" nav-item">
                    <a href="<?= BASEURL; ?>/pengaturan">
                        <i class="icon-setting"></i>
                        <span data-i18n="" class="menu-title">Pengaturan</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>