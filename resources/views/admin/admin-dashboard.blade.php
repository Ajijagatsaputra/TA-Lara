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
          <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
            <div class="flex-grow-1 mb-1 mb-md-0">
              <h1 class="h3 fw-bold mb-2">Dashboard</h1>
              <h2 class="h6 fw-medium text-muted mb-0">
                Selamat datang kembali, <a class="fw-semibold" href="be_pages_generic_profile.html">jagat</a>
              </h2>
            </div>
            <div class="mt-3 mt-md-0 ms-md-3 space-x-1">
              <a class="btn btn-sm btn-alt-secondary space-x-1" href="be_pages_generic_profile_edit.html">
                <i class="fa fa-cogs opacity-50"></i>
                <span>Pengaturan</span>
              </a>
              <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-sm btn-alt-secondary space-x-1"
                        id="dropdown-analytics-overview" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-fw fa-calendar-alt opacity-50"></i>
                  <span>Semua waktu</span>
                  <i class="fa fa-fw fa-angle-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end fs-sm" aria-labelledby="dropdown-analytics-overview">
                  <a class="dropdown-item fw-medium" href="#">30 hari terakhir</a>
                  <a class="dropdown-item fw-medium" href="#">Bulan lalu</a>
                  <a class="dropdown-item fw-medium" href="#">3 bulan terakhir</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item fw-medium" href="#">Tahun ini</a>
                  <a class="dropdown-item fw-medium" href="#">Tahun lalu</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="#">
                    <span>Semua waktu</span>
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
            @foreach ([
              ['label' => 'Dosen', 'jumlah' => 32, 'icon' => 'far fa-user-circle', 'link' => '#'],
              ['label' => 'Mahasiswa', 'jumlah' => $count ?? 0 , 'icon' => 'far fa-user-circle', 'link' => '/listmahasiswa'],
              ['label' => 'Alumni', 'jumlah' => 45, 'icon' => 'far fa-user-circle', 'link' => '#'],
              ['label' => 'Tahun Masuk', 'jumlah' => '2019 - 2023', 'icon' => 'fa fa-calendar-alt', 'link' => '#'],
            ] as $item)
              <div class="col-sm-6 col-xxl-3">
                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                  <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                      <dt class="fs-3 fw-bold">{{ $item['jumlah'] }}</dt>
                      <dd class="fs-sm fw-medium text-muted mb-0">{{ $item['label'] }}</dd>
                    </dl>
                    <div class="item item-rounded-lg bg-body-light">
                      <i class="{{ $item['icon'] }} fs-3 text-primary"></i>
                    </div>
                  </div>
                  <div class="bg-body-light rounded-bottom">
                    <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                       href="{{ $item['link'] }}">
                      <span>Lihat semua {{ strtolower($item['label']) }}</span>
                      <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                    </a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          <!-- END Overview -->

          <!-- Statistik Alumni -->
          <div class="row">
            <div class="col-xl-8 col-xxl-9 d-flex flex-column">
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
                    @foreach ([
                      ['label' => 'Bekerja', 'value' => '2.5%', 'icon' => 'fa-caret-up', 'color' => 'success'],
                      ['label' => 'Belum Bekerja', 'value' => '3.8%', 'icon' => 'fa-caret-up', 'color' => 'success'],
                      ['label' => 'Wirausaha', 'value' => '1.7%', 'icon' => 'fa-caret-down', 'color' => 'danger'],
                    ] as $stat)
                      <div class="col-sm-4">
                        <dl class="mb-0">
                          <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                            <i class="fa {{ $stat['icon'] }} fs-base text-{{ $stat['color'] }}"></i>
                            <span>{{ $stat['value'] }}</span>
                          </dt>
                          <dd class="fs-sm fw-medium text-muted mb-0">{{ $stat['label'] }}</dd>
                        </dl>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Statistik Alumni -->
        </div>
        <!-- END Page Content -->
      </main>

      @include('components.admin.footer')
    </div>
    @include('components.admin.script')
  </body>
</html>
