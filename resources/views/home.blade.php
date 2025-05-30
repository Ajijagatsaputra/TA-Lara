<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Sikema</title>

    <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">
  </head>
  <body>
    <!-- Page Container -->
    <!--
        Available classes for #page-container:

    GENERIC

      'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                  - Theme helper buttons [data-toggle="theme"],
                                                  - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                  - ..and/or One.layout('dark_mode_[on/off/toggle]')

    SIDEBAR & SIDE OVERLAY

      'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
      'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
      'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
      'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
      'sidebar-dark'                              Dark themed sidebar

      'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
      'side-overlay-o'                            Visible Side Overlay by default

      'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

      'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

    HEADER

      ''                                          Static Header if no class is added
      'page-header-fixed'                         Fixed Header

    HEADER STYLE

      ''                                          Light themed Header
      'page-header-dark'                          Dark themed Header

    MAIN CONTENT LAYOUT

      ''                                          Full width Main Content if no class is added
      'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
      'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

    DARK MODE

      'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class="page-header-dark main-content-boxed">

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="d-flex align-items-center">
            <!-- Logo -->
            <a class="fw-semibold fs-5 tracking-wider text-dual me-3" href="index.html"> SIKEMA<span class="fw-normal">TI</span> </a>
            <!-- END Logo -->

            <!-- Notifications Dropdown -->
            <div class="dropdown d-inline-block me-2">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-bell"></i>
                <span class="text-primary">•</span>
              </button>
              <div class="dropdown-menu dropdown-menu-lg p-0 border-0 fs-sm" aria-labelledby="page-header-notifications-dropdown">
                <div class="p-2 bg-body-light border-bottom text-center rounded-top">
                  <h5 class="dropdown-header text-uppercase">Notifications</h5>
                </div>
                <ul class="nav-items mb-0">
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-check-circle text-success"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">You have a new follower</div>
                        <span class="fw-medium text-muted">15 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">1 new sale, keep it up</div>
                        <span class="fw-medium text-muted">22 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-times-circle text-danger"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">Update failed, restart server</div>
                        <span class="fw-medium text-muted">26 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">2 new sales, keep it up</div>
                        <span class="fw-medium text-muted">33 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-user-plus text-success"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">You have a new subscriber</div>
                        <span class="fw-medium text-muted">41 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-check-circle text-success"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">You have a new follower</div>
                        <span class="fw-medium text-muted">42 min ago</span>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="p-2 border-top text-center">
                  <a class="d-inline-block fw-medium" href="javascript:void(0)">
                    <i class="fa fa-fw fa-arrow-down me-1 opacity-50"></i> Load More..
                  </a>
                </div>
              </div>
            </div>
            <!-- END Notifications Dropdown -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="d-flex align-items-center">
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block ms-2">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded" src="assets/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 21px;" />
                <span class="d-none d-sm-inline-block ms-1">LanangeJagat</span>
                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
                <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                  <p class="mt-2 mb-0 fw-medium">LanangeJagat</p>
                  <p class="mb-0 text-muted fs-sm fw-medium">25090047</p>
                </div>
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_profile.html">
                    <span class="fs-sm fw-medium">Data Diri</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span class="fs-sm fw-medium">Settings</span>
                  </a>
                </div>
                <div role="separator" class="dropdown-divider m-0"></div>
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_signin.html">
                    <span class="fs-sm fw-medium">Log Out</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- END User Dropdown -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <form class="w-100" action="bd_search.html" method="POST">
              <div class="input-group">
                <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times-circle"></i>
                </button>
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input" />
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary-lighter">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-circle-notch fa-spin text-primary"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">

        <!-- Navigation -->
        <div class="bg-primary-darker">
          <div class="content py-3">
            <!-- Toggle Main Navigation -->
            <div class="d-lg-none">
              <!-- Class Toggle, functionality initialized in Helpers.oneToggleClass() -->
              <button type="button" class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                Menu
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <!-- END Toggle Main Navigation -->

            <!-- Main Navigation -->
            <div id="main-navigation" class="d-none d-lg-block mt-2 mt-lg-0">
              <ul class="nav-main nav-main-dark nav-main-horizontal nav-main-hover">
                <li class="nav-main-item">
                  <a class="nav-main-link active" href="bd_dashboard.html">
                    <i class="nav-main-link-icon si si-compass"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                  </a>
                </li>
                <li class="nav-main-heading">Pages</li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-puzzle"></i>
                    <span class="nav-main-link-name">Kemahasiswaan</span>
                  </a>
                  <ul class="nav-main-submenu"> 
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Kuesioner</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="/kuesioner">
                            <span class="nav-main-link-name">Salinan Tracer Alumni</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <span class="nav-main-link-name">Salinan Tracer Perusahaan</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="bd_search.html">
                    <i class="nav-main-link-icon si si-magnifier"></i>
                    <span class="nav-main-link-name">Perwalian</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="be_pages_dashboard.html">
                    <i class="nav-main-link-icon si si-action-undo"></i>
                    <span class="nav-main-link-name">Go Back</span>
                  </a>
                </li>
                <li class="nav-main-heading">Extra</li>
                <li class="nav-main-item ms-lg-auto">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon far fa-circle"></i>
                    <span class="nav-main-link-name d-lg-none">Themes</span>
                  </a>
                  <ul class="nav-main-submenu nav-main-submenu-right">
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                        <i class="nav-main-link-icon fa fa-square text-default"></i>
                        <span class="nav-main-link-name">Default</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-amethyst"></i>
                        <span class="nav-main-link-name">Amethyst</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-city"></i>
                        <span class="nav-main-link-name">City</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-flat"></i>
                        <span class="nav-main-link-name">Flat</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-modern"></i>
                        <span class="nav-main-link-name">Modern</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-smooth"></i>
                        <span class="nav-main-link-name">Smooth</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- END Main Navigation -->
          </div>
        </div>
        <!-- END Navigation -->
        <!-- Page Content -->
        <div class="content">
          <!-- Stats -->
          <div class="row">
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
              <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">MAHASISWA</div>
                  <div class="fs-2 fw-normal text-dark">120</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
              <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">DOSEN</div>
                  <div class="fs-2 fw-normal text-dark">15</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
              <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">Earnings</div>
                  <div class="fs-2 fw-normal text-dark">$3,200</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
              <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">Avg Sale</div>
                  <div class="fs-2 fw-normal text-dark">$21</div>
                </div>
              </a>
            </div>
          </div>
          <!-- END Stats -->

          <!-- Dashboard Charts -->
          <div class="row">
            <div class="col-lg-6">
              <div class="block block-rounded block-mode-loading-oneui">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Earnings in $</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                      <i class="si si-settings"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content p-0 text-center">
                  <!-- Chart.js is initialized in js/pages/be_pages_dashboard_v1.min.js which was auto compiled from _js/pages/be_pages_dashboard_v1.js) -->
                  <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                  <div class="pt-3" style="height: 360px;"><canvas id="js-chartjs-dashboard-earnings"></canvas></div>
                </div>
                <div class="block-content">
                  <div class="row items-push text-center py-3">
                    <div class="col-6 col-xl-3">
                      <i class="fa fa-wallet fa-2x text-muted"></i>
                      <div class="text-muted mt-3">$148,000</div>
                    </div>
                    <div class="col-6 col-xl-3">
                      <i class="fa fa-angle-double-up fa-2x text-muted"></i>
                      <div class="text-muted mt-3">+9% Earnings</div>
                    </div>
                    <div class="col-6 col-xl-3">
                      <i class="fa fa-ticket-alt fa-2x text-muted"></i>
                      <div class="text-muted mt-3">+20% Tickets</div>
                    </div>
                    <div class="col-6 col-xl-3">
                      <i class="fa fa-users fa-2x text-muted"></i>
                      <div class="text-muted mt-3">+46% Clients</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="block block-rounded block-mode-loading-oneui">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Sales</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                      <i class="si si-settings"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content p-0 text-center">
                  <!-- Chart.js is initialized in js/pages/be_pages_dashboard_v1.min.js which was auto compiled from _js/pages/be_pages_dashboard_v1.js) -->
                  <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                  <div class="pt-3" style="height: 360px;"><canvas id="js-chartjs-dashboard-sales"></canvas></div>
                </div>
                <div class="block-content">
                  <div class="row items-push text-center py-3">
                    <div class="col-6 col-xl-3">
                      <i class="fab fa-wordpress fa-2x text-muted"></i>
                      <div class="text-muted mt-3">+20% Themes</div>
                    </div>
                    <div class="col-6 col-xl-3">
                      <i class="fa fa-font fa-2x text-muted"></i>
                      <div class="text-muted mt-3">+25% Fonts</div>
                    </div>
                    <div class="col-6 col-xl-3">
                      <i class="fa fa-archive fa-2x text-muted"></i>
                      <div class="text-muted mt-3">-10% Icons</div>
                    </div>
                    <div class="col-6 col-xl-3">
                      <i class="fa fa-paint-brush fa-2x text-muted"></i>
                      <div class="text-muted mt-3">+8% Graphics</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Dashboard Charts -->

          <!-- Customers and Latest Orders -->
          <div class="row items-push">
            <!-- Latest Customers -->
            <div class="col-lg-6">
              <div class="block block-rounded block-mode-loading-oneui h-100 mb-0">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Latest Customers</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                      <i class="si si-settings"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content block-content-full">
                  <table class="table table-striped table-hover table-borderless table-vcenter fs-sm mb-0">
                    <thead>
                      <tr class="text-uppercase">
                        <th class="fw-bold" style="width: 80px;">ID</th>
                        <th class="d-none d-sm-table-cell fw-bold text-center" style="width: 100px;">Photo</th>
                        <th class="fw-bold">Name</th>
                        <th class="d-none d-sm-table-cell fw-bold text-center" style="width: 80px;">Orders</th>
                        <th class="fw-bold text-center" style="width: 60px;"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="fw-semibold">#01368</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar10.jpg" alt="">
                        </td>
                        <td class="fw-semibold">
                          Scott Young                </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <a class="link-fx fw-semibold" href="javascript:void(0)">5</a>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#01368</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar2.jpg" alt="">
                        </td>
                        <td class="fw-semibold">
                          Carol White                </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <a class="link-fx fw-semibold" href="javascript:void(0)">14</a>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#01368</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                        </td>
                        <td class="fw-semibold">
                          Jose Parker                </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <a class="link-fx fw-semibold" href="javascript:void(0)">15</a>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#01368</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar4.jpg" alt="">
                        </td>
                        <td class="fw-semibold">
                          Barbara Scott                </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <a class="link-fx fw-semibold" href="javascript:void(0)">36</a>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#01368</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar12.jpg" alt="">
                        </td>
                        <td class="fw-semibold">
                          Jesse Fisher                </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <a class="link-fx fw-semibold" href="javascript:void(0)">3</a>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#01368</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar2.jpg" alt="">
                        </td>
                        <td class="fw-semibold">
                          Amanda Powell                </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <a class="link-fx fw-semibold" href="javascript:void(0)">1</a>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#01368</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar12.jpg" alt="">
                        </td>
                        <td class="fw-semibold">
                          Brian Cruz                </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <a class="link-fx fw-semibold" href="javascript:void(0)">12</a>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- END Latest Customers -->

            <!-- Latest Orders -->
            <div class="col-lg-6">
              <div class="block block-rounded block-mode-loading-oneui h-100 mb-0">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Latest Orders</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                      <i class="si si-settings"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content block-content-full">
                  <table class="table table-striped table-hover table-borderless table-vcenter fs-sm mb-0">
                    <thead>
                      <tr class="text-uppercase">
                        <th class="fw-bold">ID</th>
                        <th class="d-none d-sm-table-cell fw-bold">Date</th>
                        <th class="fw-bold">State</th>
                        <th class="d-none d-sm-table-cell fw-bold text-end" style="width: 120px;">Price</th>
                        <th class="fw-bold text-center" style="width: 60px;"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07835</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">today</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-warning">Pending..</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $999,99
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07834</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">today</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-warning">Pending..</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $2.299,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07833</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">today</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $1200,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07832</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">today</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-danger">Cancelled</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $399,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07831</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $349,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07830</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $999,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07829</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $39,99
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07828</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $499,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07827</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $325,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- END Latest Orders -->
          </div>
          <!-- END Customers and Latest Orders -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer" class="bg-body-extra-light">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
              Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <a class="fw-semibold" href="https://1.envato.market/AVD6j" target="_blank">OneUI 5.1</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->
    <script src="assets/js/oneui.app.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/chart.js/chart.min.js"></script>
    <!-- Page JS Code -->
    <script src="assets/js/pages/be_pages_dashboard_v1.min.js"></script>
  </body>
</html>
