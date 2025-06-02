<!doctype html>
<html lang="id">
  @include('components.admin.head')
  <body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        @include('components.admin.admin-header')
        @include('components.admin.sidebar')
        @include('components.admin.Side-Overlay') 
        <main id="main-container">
            <!-- Hero -->
            <div class="content">
                <div
                    class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
                    <div class="flex-grow-1 mb-1 mb-md-0">
                        <h1 class="h3 fw-bold mb-2">
                            KELAS PERWALIAN
                        </h1>
                    </div>
                    <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <div class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3">
                            <span class="d-inline-block">
                              <a class="btn btn-primary px-4 py-2" data-toggle="click-ripple" href="javascript:void(0)">
                                <i class="fa fa-plus me-1 opacity-50"></i> kelas perwalian
                              </a>
                            </span>
                          </div>
                    </nav>
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
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Perwalian Dosen A</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">
                                    <i class="far fa-user-circle fs-3 text-primary"></i>
                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Lihat semua anggota</span>
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
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Perwalian Dosen B</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">
                                    <i class="far fa-user-circle fs-3 text-primary"></i>
                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Lihat semua anggota</span>
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
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Perwalian Dosen C</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">
                                    <i class="far fa-user-circle fs-3 text-primary"></i>
                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Lihat semua anggota</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END Alumni -->
                    </div>
                    <div class="col-sm-6 col-xxl-3">
                        <!-- Conversion Rate -->
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                          <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                            <dl class="mb-0">
                              <dt class="fs-3 fw-bold">45</dt>
                              <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Dosen D</dd>
                            </dl>
                            <div class="item item-rounded-lg bg-body-light">
                              <i class="fa fa-user-circle fs-3 text-primary"></i>
                            </div>
                          </div>
                          <div class="bg-body-light rounded-bottom">
                            <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                              <span>Lihat semua anggota</span>
                              <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>
                          </div>
                        </div>
                        <!-- END Conversion Rate-->
                      </div>
                    <div class="col-sm-6 col-xxl-3">
                    </div>  
                </div>
                <div class="row items-push">
                    <div class="col-sm-6 col-xxl-3">
                        <!-- Dosen -->
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div
                                class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">32</dt>
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Perwalian Dosen A</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">
                                    <i class="far fa-user-circle fs-3 text-primary"></i>
                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Lihat semua anggota</span>
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
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Perwalian Dosen B</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">
                                    <i class="far fa-user-circle fs-3 text-primary"></i>
                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Lihat semua anggota</span>
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
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Perwalian Dosen C</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">
                                    <i class="far fa-user-circle fs-3 text-primary"></i>
                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>Lihat semua anggota</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END Alumni -->
                    </div>
                    <div class="col-sm-6 col-xxl-3">
                        <!-- Conversion Rate -->
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                          <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                            <dl class="mb-0">
                              <dt class="fs-3 fw-bold">45</dt>
                              <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Dosen D</dd>
                            </dl>
                            <div class="item item-rounded-lg bg-body-light">
                              <i class="fa fa-user-circle fs-3 text-primary"></i>
                            </div>
                          </div>
                          <div class="bg-body-light rounded-bottom">
                            <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                              <span>Lihat semua anggota</span>
                              <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>
                          </div>
                        </div>
                        <!-- END Conversion Rate-->
                      </div>
                    <div class="col-sm-6 col-xxl-3">
                    </div>  
                </div>
                <!-- END Overview -->
            </div>
            <!-- END Page Content -->
        </main>
        @include('components.admin.footer')
  
  
    </div>
    @include('components.admin.script') 
  </body>
</html>
