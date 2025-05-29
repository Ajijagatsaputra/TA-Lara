<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header">
        <!-- Logo -->
        <a class="fw-semibold text-dual" href="index.html">
            <span class="smini-visible">
                <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">SIKEMA<span class="fw-normal">TI</span></span>
        </a>
        <!-- END Logo -->

        <!-- Extra -->
        <div>
            <!-- Dark Mode -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout"
                data-action="dark_mode_toggle">
                <i class="far fa-moon"></i>
            </button>
            <!-- END Dark Mode -->

            {{-- <!-- Options -->
        <div class="dropdown d-inline-block ms-1">
          <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-circle"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
            <!-- Color Themes -->
            <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="default" href="#">
              <span>Default</span>
              <i class="fa fa-circle text-default"></i>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
              <span>Amethyst</span>
              <i class="fa fa-circle text-amethyst"></i>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
              <span>City</span>
              <i class="fa fa-circle text-city"></i>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
              <span>Flat</span>
              <i class="fa fa-circle text-flat"></i>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
              <span>Modern</span>
              <i class="fa fa-circle text-modern"></i>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
              <span>Smooth</span>
              <i class="fa fa-circle text-smooth"></i>
            </a>
            <!-- END Color Themes -->

            <div class="dropdown-divider"></div>

            <!-- Sidebar Styles -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">
              <span>Sidebar Light</span>
            </a>
            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">
              <span>Sidebar Dark</span>
            </a>
            <!-- END Sidebar Styles -->

            <div class="dropdown-divider"></div>

            <!-- Header Styles -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">
              <span>Header Light</span>
            </a>
            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">
              <span>Header Dark</span>
            </a>
            <!-- END Header Styles -->
          </div>
        </div>
        <!-- END Options --> --}}

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close"
                href="javascript:void(0)">
                <i class="fa fa-fw fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
        </div>
        <!-- END Extra -->
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link" href="/admin">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-heading">Kemahasiswaan</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-graduation "></i>
                        <span class="nav-main-link-name">Akademik</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_options.html">
                                <span class="nav-main-link-name">Kelas</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-file-alt"></i>
                        <span class="nav-main-link-name">Data Master</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="data-alumni">
                                <span class="nav-main-link-name">Data Alumni</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="listmahasiswa">
                                <span class="nav-main-link-name">Data Mahasiswa</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="listdosen">
                                <span class="nav-main-link-name">Data Dosen</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="nav-main-link-icon far fa-newspaper"></i>
                        <span class="nav-main-link-name">Kemahasiswaan</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_tables_styles.html">
                                <span class="nav-main-link-name">Persetujuan KRS</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_tables_responsive.html">
                                <span class="nav-main-link-name">Keaktifkan Mahasiswa</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_tables_helpers.html">
                                <span class="nav-main-link-name">Monitoring IPK</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_tables_datatables.html">
                                <span class="nav-main-link-name">Bimbingan Prasidang</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-main-heading">KELOLA TRACER </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-layers"></i>
                        <span class="nav-main-link-name">Salinan Tracer Study</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="listtraceralumni">
                                <span class="nav-main-link-name">Alumni</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="listtracerpengguna">
                                <span class="nav-main-link-name">Pengguna</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
