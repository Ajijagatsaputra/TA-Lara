<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>OneUI - Bootstrap 5 Admin Template &amp; UI Framework</title>

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
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">

    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
  </head>
  <body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <!-- Side Overlay-->
      @include('components.admin.Side-Overlay') 
      <!-- END Side Overlay -->

      <!-- Sidebar -->
      <!--
          Sidebar Mini Mode - Display Helper classes

          Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
          Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
              If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

          Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
          Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
          Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
      @include('components.admin.sidebar')
      <!-- END Sidebar -->

      <!-- Header -->
      @include('components.admin.admin-header')
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                  Data Alumni
                </h1>
              </div>
              <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <div class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3">
                    <span class="d-inline-block">
                      <a class="btn btn-primary px-4 py-2" data-toggle="click-ripple" href="javascript:void(0)">
                        <i class="fa fa-plus me-1 opacity-50"></i> alumni
                      </a>
                    </span>
                  </div>
            </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
          <!-- Dynamic Table with Export Buttons -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Data Alumni</h3>
            </div>
            <div class="block-content block-content-full">
              <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 80px;">ID</th>
                    <th>Name</th>
                    <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                    <th style="width: 15%;">Registered</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center fs-sm">1</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Jesse Fisher</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client1<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">2</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Jose Mills</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client2<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">3</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">David Fuller</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client3<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">4</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Wayne Garcia</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client4<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">5</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Judy Ford</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client5<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">6</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Justin Hunt</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client6<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">7</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Sara Fields</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client7<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">8</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Danielle Jones</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client8<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">4 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">9</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Jack Greene</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client9<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">10</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Betty Kelley</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client10<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">11</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Carl Wells</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client11<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">12</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Megan Fuller</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client12<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">13</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Carl Wells</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client13<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">14</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Jose Mills</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client14<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">15</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Judy Ford</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client15<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">16</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Jack Greene</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client16<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">17</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Andrea Gardner</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client17<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">18</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Judy Ford</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client18<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">19</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Barbara Scott</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client19<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">20</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Barbara Scott</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client20<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">21</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Barbara Scott</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client21<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">22</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Jack Greene</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client22<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">10 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">23</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Barbara Scott</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client23<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">24</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Helen Jacobs</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client24<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">25</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Wayne Garcia</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client25<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">26</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Albert Ray</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client26<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">2 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">27</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Carl Wells</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client27<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">28</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">David Fuller</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client28<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">7 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">29</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Jesse Fisher</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client29<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">30</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Lisa Jenkins</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client30<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">31</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Susan Day</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client31<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">9 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">32</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Brian Stevens</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client32<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">33</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Carol White</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client33<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">34</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Betty Kelley</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client34<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">35</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Megan Fuller</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client35<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">36</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Jack Greene</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client36<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">8 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">37</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Laura Carr</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client37<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">38</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Sara Fields</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client38<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">5 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">39</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Adam McCoy</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client39<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">6 days ago</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center fs-sm">40</td>
                    <td class="fw-semibold fs-sm">
                      <a href="be_pages_generic_profile.html">Carl Wells</a>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                      client40<span class="text-muted">@example.com</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                      <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">3 days ago</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END Dynamic Table with Export Buttons -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      @include('components.admin.footer')
    </div>
    <!-- END Page Container -->

    <!--
        OneUI JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="assets/js/oneui.app.min.js"></script>

    <!-- jQuery (required for DataTables plugin) -->
    <script src="assets/js/lib/jquery.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
    <script src="assets/js/plugins/datatables-buttons/buttons.print.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons/buttons.html5.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/be_tables_datatables.min.js"></script>
  </body>
</html>
