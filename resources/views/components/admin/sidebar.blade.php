<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header">
      <!-- Logo -->
      <a class="fw-semibold text-dual" href="index.html">
        <span class="smini-visible">
          <i class="fa fa-circle-notch text-primary"></i>
        </span>
        <span class="smini-hide fs-5 tracking-wider">SIKEMA<span class="fw-normal">UI</span></span>
      </a>
      <!-- END Logo -->

      <!-- Extra -->
      <div>
        <!-- Dark Mode -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle">
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
        <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
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
            <a class="nav-main-link" href="admin">
              <i class="nav-main-link-icon si si-speedometer"></i>
              <span class="nav-main-link-name">Dashboard</span>
            </a>
          </li>
          <li class="nav-main-heading">KEMAHASISWAAN</li>
          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon si si-graduation "></i>
              <span class="nav-main-link-name">AKADEMIK</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_blocks_options.html">
                  <span class="nav-main-link-name">KELAS MAHASISWA</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-file-alt"></i>
              <span class="nav-main-link-name">DATA MASTER</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="data-alumni">
                  <span class="nav-main-link-name">DATA ALUMNI</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="listmahasiswa">
                  <span class="nav-main-link-name">DATA MAHASISWA</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="data-dosen">
                  <span class="nav-main-link-name">DATA DOSEN</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon far fa-newspaper"></i>
              <span class="nav-main-link-name">PERWALIAN</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="kelas-perwalian">
                  <span class="nav-main-link-name">KELAS PERWALIAN</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="krs">
                  <span class="nav-main-link-name">PERSETUJAN KRS</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_tables_responsive.html">
                  <span class="nav-main-link-name">KEAKTIFAN MAHASISWA</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_tables_helpers.html">
                  <span class="nav-main-link-name">MONITORING IPK</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_tables_datatables.html">
                  <span class="nav-main-link-name">BIMBINGAN PRASIDANG</span>
                </a>
              </li>
            </ul>
          </li>
      
  
          <li class="nav-main-heading">KELOLA TRACER </li>
          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon si si-layers"></i>
              <span class="nav-main-link-name">SALINAN TRACER</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_pages_generic_blank.html">
                  <span class="nav-main-link-name">Alumni</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_pages_generic_blank_block.html">
                  <span class="nav-main-link-name">Pengguna</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon si si-lock"></i>
              <span class="nav-main-link-name">Authentication</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_pages_auth_all.html">
                  <span class="nav-main-link-name">All</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_auth_signin.html">
                  <span class="nav-main-link-name">Sign In</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_auth_signin2.html">
                  <span class="nav-main-link-name">Sign In 2</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_auth_signin3.html">
                  <span class="nav-main-link-name">Sign In 3</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_auth_signup.html">
                  <span class="nav-main-link-name">Sign Up</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_auth_signup2.html">
                  <span class="nav-main-link-name">Sign Up 2</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_auth_signup3.html">
                  <span class="nav-main-link-name">Sign Up 3</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_auth_lock.html">
                  <span class="nav-main-link-name">Lock Screen</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_auth_lock2.html">
                  <span class="nav-main-link-name">Lock Screen 2</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_auth_lock3.html">
                  <span class="nav-main-link-name">Lock Screen 3</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_auth_reminder.html">
                  <span class="nav-main-link-name">Pass Reminder</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_auth_reminder2.html">
                  <span class="nav-main-link-name">Pass Reminder 2</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_auth_reminder3.html">
                  <span class="nav-main-link-name">Pass Reminder 3</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon si si-fire"></i>
              <span class="nav-main-link-name">Error Pages</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_pages_error_all.html">
                  <span class="nav-main-link-name">All</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_error_400.html">
                  <span class="nav-main-link-name">400</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_error_401.html">
                  <span class="nav-main-link-name">401</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_error_403.html">
                  <span class="nav-main-link-name">403</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_error_404.html">
                  <span class="nav-main-link-name">404</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_error_500.html">
                  <span class="nav-main-link-name">500</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="op_error_503.html">
                  <span class="nav-main-link-name">503</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon si si-cup"></i>
              <span class="nav-main-link-name">Get Started</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="gs_backend.html">
                  <span class="nav-main-link-name">Backend</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="gs_backend_boxed.html">
                  <span class="nav-main-link-name">Backend Boxed</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="gs_landing.html">
                  <span class="nav-main-link-name">Landing</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="gs_rtl_backend.html">
                  <span class="nav-main-link-name">RTL Backend</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="gs_rtl_backend_boxed.html">
                  <span class="nav-main-link-name">RTL Backend Boxed</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="gs_rtl_landing.html">
                  <span class="nav-main-link-name">RTL Landing</span>
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