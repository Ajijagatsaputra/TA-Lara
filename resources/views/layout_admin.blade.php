<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>SIKEMA</title>

    <meta name="description"
        content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Sikema TI">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description"
        content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">
    <!-- END Stylesheets -->
</head>

<body>
    <!-- Page Container -->
    <div id="page-container"
        class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
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

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout"
                        data-action="sidebar_close" href="javascript:void(0)">
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
                            <a class="nav-main-link active" href="be_pages_dashboard.html">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-energy"></i>
                                <span class="nav-main-link-name">Master Data</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="/listmahasiswa">
                                        <span class="nav-main-link-name">Data Mahasiswa</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_options.html">
                                        <span class="nav-main-link-name">Data Dosen</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_forms.html">
                                        <span class="nav-main-link-name">Data Alumni</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                     
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-grid"></i>
                                <span class="nav-main-link-name">Akademik</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_tables_styles.html">
                                        <span class="nav-main-link-name">Kelas</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_tables_responsive.html">
                                        <span class="nav-main-link-name">Perwalian</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                       
                        <li class="nav-main-heading">Tracer Study</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-wrench"></i>
                                <span class="nav-main-link-name">Kelola tracer</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_loaders.html">
                                        <span class="nav-main-link-name">Salinan Tracer Alumni</span>
                                    </a>
                                </li>
                              
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_maps_vector.html">
                                        <span class="nav-main-link-name">Salinan Tracer Pengguna Alumni</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-puzzle"></i>
                                <span class="nav-main-link-name">Multi Role</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="#">
                                        <span class="nav-main-link-name">Mahasiswa</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="#">
                                        <span class="nav-main-link-name">Alumni</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">Dosen</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="#">
                                                <span class="nav-main-link-name">Link 2-1</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <span class="nav-main-link-name">Sub Level 3</span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="#">
                                                        <span class="nav-main-link-name">Link 3-1</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="#">
                                                        <span class="nav-main-link-name">Link 3-2</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu"
                                                        data-toggle="submenu" aria-haspopup="true"
                                                        aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Sub Level 4</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link" href="#">
                                                                <span class="nav-main-link-name">Link 4-1</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link" href="#">
                                                                <span class="nav-main-link-name">Link 4-2</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Sub Level 5</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">Link
                                                                            5-1</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">Link
                                                                            5-2</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link nav-main-link-submenu"
                                                                        data-toggle="submenu" aria-haspopup="true"
                                                                        aria-expanded="false" href="#">
                                                                        <span class="nav-main-link-name">Sub Level
                                                                            6</span>
                                                                    </a>
                                                                    <ul class="nav-main-submenu">
                                                                        <li class="nav-main-item">
                                                                            <a class="nav-main-link" href="#">
                                                                                <span class="nav-main-link-name">Link
                                                                                    6-1</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nav-main-item">
                                                                            <a class="nav-main-link" href="#">
                                                                                <span class="nav-main-link-name">Link
                                                                                    6-2</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading">Pages</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-layers"></i>
                                <span class="nav-main-link-name">Generic</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_blank.html">
                                        <span class="nav-main-link-name">Blank</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_blank_block.html">
                                        <span class="nav-main-link-name">Blank with Block</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_search.html">
                                        <span class="nav-main-link-name">Search</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_profile.html">
                                        <span class="nav-main-link-name">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_profile_edit.html">
                                        <span class="nav-main-link-name">Profile Edit</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_inbox.html">
                                        <span class="nav-main-link-name">Inbox</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_invoice.html">
                                        <span class="nav-main-link-name">Invoice</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_pricing_plans.html">
                                        <span class="nav-main-link-name">Pricing Plans</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_faq.html">
                                        <span class="nav-main-link-name">FAQ</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_team.html">
                                        <span class="nav-main-link-name">Team</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_contact.html">
                                        <span class="nav-main-link-name">Contact</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_support.html">
                                        <span class="nav-main-link-name">Support</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_upgrade_plan.html">
                                        <span class="nav-main-link-name">Upgrade Plan</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_dashboard_v1.html">
                                        <span class="nav-main-link-name">Dashboard v1</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_maintenance.html">
                                        <span class="nav-main-link-name">Maintenance</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_status.html">
                                        <span class="nav-main-link-name">Status</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_coming_soon.html">
                                        <span class="nav-main-link-name">Coming Soon</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
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
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
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
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
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
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Toggle Mini Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-none d-lg-inline-block"
                        data-toggle="layout" data-action="sidebar_mini_toggle">
                        <i class="fa fa-fw fa-ellipsis-v"></i>
                    </button>
                    <!-- END Toggle Mini Sidebar -->

                    <!-- Open Search Section (visible on smaller screens) -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary d-md-none" data-toggle="layout"
                        data-action="header_search_on">
                        <i class="fa fa-fw fa-search"></i>
                    </button>
                    <!-- END Open Search Section -->

                    <!-- Search Form (visible on larger screens) -->
                    <form class="d-none d-md-inline-block" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control form-control-alt" placeholder="Search.."
                                id="page-header-search-input2" name="page-header-search-input2">
                            <span class="input-group-text border-0">
                                <i class="fa fa-fw fa-search"></i>
                            </span>
                        </div>
                    </form>
                    <!-- END Search Form -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="rounded-circle" src="assets/media/avatars/avatar10.jpg" alt="Header Avatar"
                                style="width: 21px;">
                            <span class="d-none d-sm-inline-block ms-2">John</span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0"
                            aria-labelledby="page-header-user-dropdown">
                            <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                                <img class="img-avatar img-avatar48 img-avatar-thumb"
                                    src="assets/media/avatars/avatar10.jpg" alt="">
                                <p class="mt-2 mb-0 fw-medium">John Smith</p>
                                <p class="mb-0 text-muted fs-sm fw-medium">Web Developer</p>
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="be_pages_generic_inbox.html">
                                    <span class="fs-sm fw-medium">Inbox</span>
                                    <span class="badge rounded-pill bg-primary ms-2">3</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="be_pages_generic_profile.html">
                                    <span class="fs-sm fw-medium">Profile</span>
                                    <span class="badge rounded-pill bg-primary ms-2">1</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span class="fs-sm fw-medium">Settings</span>
                                </a>
                            </div>
                            <div role="separator" class="dropdown-divider m-0"></div>
                            <div class="p-2">
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="op_auth_lock.html">
                                    <span class="fs-sm fw-medium">Lock Account</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="op_auth_signin.html">
                                    <span class="fs-sm fw-medium">Log Out</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->

                    <!-- Notifications Dropdown -->
                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn btn-sm btn-alt-secondary"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                            <span class="text-primary">•</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 border-0 fs-sm"
                            aria-labelledby="page-header-notifications-dropdown">
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
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->
        </header>
        <!-- END Header -->

      @yield('content')

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-extra-light">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
              Politeknik Harapan Bersama
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <a class="fw-semibold" href="https://1.envato.market/AVD6j" target="_blank">Copyright</a> &copy; SikemaTI<span data-toggle="year-copy">2025</span>
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
    <script src="assets/js/pages/be_pages_dashboard.min.js"></script>
</body>

</html>
