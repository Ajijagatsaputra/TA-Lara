<!doctype html>
<html lang="id">
  @include('components.admin.head')
  <body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        @include('components.admin.admin-header')
        @include('components.admin.sidebar')
        @include('components.admin.side-overlay') 
        <main id="main-container">
            <!-- Hero -->
            <div class="content">
                <div
                    class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
                    <div class="flex-grow-1 mb-1 mb-md-0">
                        <h1 class="h3 fw-bold mb-2">
                            Dashboard
                        </h1>
                        <h2 class="h6 fw-medium fw-medium text-muted mb-0">
                            Welcome <a class="fw-semibold" href="be_pages_generic_profile.html">John</a>, everything
                            looks great.
                        </h2>
                    </div>
                    <div class="mt-3 mt-md-0 ms-md-3 space-x-1">
                        <a class="btn btn-sm btn-alt-secondary space-x-1" href="be_pages_generic_profile_edit.html">
                            <i class="fa fa-cogs opacity-50"></i>
                            <span>Settings</span>
                        </a>
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-sm btn-alt-secondary space-x-1"
                                id="dropdown-analytics-overview" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-fw fa-calendar-alt opacity-50"></i>
                                <span>All time</span>
                                <i class="fa fa-fw fa-angle-down"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end fs-sm"
                                aria-labelledby="dropdown-analytics-overview">
                                <a class="dropdown-item fw-medium" href="javascript:void(0)">Last 30 days</a>
                                <a class="dropdown-item fw-medium" href="javascript:void(0)">Last month</a>
                                <a class="dropdown-item fw-medium" href="javascript:void(0)">Last 3 months</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item fw-medium" href="javascript:void(0)">This year</a>
                                <a class="dropdown-item fw-medium" href="javascript:void(0)">Last Year</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>All time</span>
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Hero -->

            <!-- Page Content -->
            <div class="content">
                <!-- Overview -->
                <div class="row items-push">
                    <div class="col-sm-6 col-xxl-3">
                        <!-- Dosen -->
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div
                                class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">32</dt>
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Dosen</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">
                                    <i class="far fa-user-circle fs-3 text-primary"></i>
                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Lihat semua dosen</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END Dosen -->
                    </div>
                    <div class="col-sm-6 col-xxl-3">
                        <!-- Mahasiswa -->
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div
                                class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">124</dt>
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Mahasiswa</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">
                                    <i class="far fa-user-circle fs-3 text-primary"></i>
                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Lihat semua mahasiswa</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END Mahasiswa -->
                    </div>
                    <div class="col-sm-6 col-xxl-3">
                        <!-- Alumni -->
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div
                                class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">45</dt>
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Alumni</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">
                                    <i class="far fa-user-circle fs-3 text-primary"></i>
                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Lihat semua alumni</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END Alumni -->
                    </div>
                    <div class="col-sm-6 col-xxl-3">
                    </div>
                </div>
                <!-- END Overview -->

                <!-- Statistics -->
                <div class="row">
                    <div class="col-xl-8 col-xxl-9 d-flex flex-column">
                        <!-- Statistik Alumni -->
                        <div class="block block-rounded flex-grow-1 d-flex flex-column">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Statistik Alumni</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option"
                                        data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                                <canvas id="js-chartjs-earnings"></canvas>
                            </div>
                            <div class="block-content bg-body-light">
                                <div class="row items-push text-center w-100">
                                    <div class="col-sm-4">
                                        <dl class="mb-0">
                                            <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                                                <i class="fa fa-caret-up fs-base text-success"></i>
                                                <span>2.5%</span>
                                            </dt>
                                            <dd class="fs-sm fw-medium text-muted mb-0">Bekerja</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="mb-0">
                                            <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                                                <i class="fa fa-caret-up fs-base text-success"></i>
                                                <span>3.8%</span>
                                            </dt>
                                            <dd class="fs-sm fw-medium text-muted mb-0">Belum Bekerja</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="mb-0">
                                            <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                                                <i class="fa fa-caret-down fs-base text-danger"></i>
                                                <span>1.7%</span>
                                            </dt>
                                            <dd class="fs-sm fw-medium text-muted mb-0">Wirausaha</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Statistik Alumni -->
                    </div>
                </div>
                <!-- END Statistics -->
            </div>
            <!-- END Page Content -->
        </main>
        @include('components.admin.footer')
  
  
    </div>
    @include('components.admin.script') 
  </body>
</html> 