<!DOCTYPE html>
<html lang="id">
@include('components.admin.head')

<body>
    <div id="page-container"
        class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

        @include('components.admin.admin-header')
        @include('components.admin.sidebar')
        @include('components.admin.side-overlay')

        <main id="main-container">
            <!-- Header -->
            <div class="bg-primary text-white py-4">
                <div class="content d-flex flex-column flex-sm-row justify-content-between align-items-center">
                    <div>
                        <h1 class="h3 fw-bold mb-1"><i class="fa fa-graduation-cap me-2"></i>Data Mahasiswa</h1>
                        <p class="text-white-50 mb-0">Kelola data mahasiswa aktif, DO, dan cuti dengan efisien.</p>
                    </div>
                    <div>
                        <label for="filter-tahun" class="form-label text-white fw-semibold">Filter Tahun Masuk:</label>
                        <select id="filter-tahun" class="form-select form-select-sm d-inline-block w-auto ms-2">
                            @for($tahun = now()->year; $tahun >= 2019; $tahun--)
                                <option value="{{ $tahun }}" {{ $tahun == 2021 ? 'selected' : '' }}>{{ $tahun }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
            </div>

            <!-- Table Section -->
            <div class="content">
                <div class="block block-rounded shadow-sm border">
                    <div class="block-content block-content-full">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped align-middle js-dataTable-full w-100">
                                <thead class="table-light">
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Prodi</th>
                                        <th>Semester</th>
                                        <th>Kelas</th>
                                        <th>Jalur</th>
                                        <th>Tahun Masuk</th>
                                        <th>Status</th>
                                        <th>No. Telp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @include('components.admin.footer')
    </div>

    <!-- Modal View Mahasiswa -->
    <div class="modal fade" id="modalViewMahasiswa" tabindex="-1" aria-labelledby="modalViewMahasiswaLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title"><i class="fa fa-user-graduate me-2"></i>Detail Mahasiswa</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <dl class="row">
                        <dt class="col-sm-4">NIM</dt>
                        <dd class="col-sm-8" id="view-nim"></dd>
                        <dt class="col-sm-4">Nama Lengkap</dt>
                        <dd class="col-sm-8" id="view-nama"></dd>
                        <dt class="col-sm-4">Prodi</dt>
                        <dd class="col-sm-8" id="view-prodi"></dd>
                        <dt class="col-sm-4">Semester</dt>
                        <dd class="col-sm-8" id="view-semester"></dd>
                        <dt class="col-sm-4">Kelas</dt>
                        <dd class="col-sm-8" id="view-kelas"></dd>
                        <dt class="col-sm-4">Jalur</dt>
                        <dd class="col-sm-8" id="view-jalur"></dd>
                        <dt class="col-sm-4">Tahun Masuk</dt>
                        <dd class="col-sm-8" id="view-tahun"></dd>
                        <dt class="col-sm-4">Status</dt>
                        <dd class="col-sm-8" id="view-status"></dd>
                        <dt class="col-sm-4">No. Telp</dt>
                        <dd class="col-sm-8" id="view-telp"></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/oneui.app.min.js"></script>
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        let table;

        function initDataTable(tahunAngkatan) {
            if (table) {
                table.clear().destroy();
            }

            table = $('.js-dataTable-full').DataTable({
                ajax: {
                    url: '{{ route('api.mahasiswa') }}',
                    type: 'GET',
                    data: { tahun_angkatan: tahunAngkatan },
                    dataSrc: json => json.status && json.data ? json.data : []
                },
                responsive: true,
                paging: true,
                ordering: true,
                searching: true,
                pageLength: 20,
                columns: [
                    { data: 'nim' },
                    { data: 'nama_lengkap' },
                    {
                        data: 'prodi',
                        render: d => d?.nama || '-' // Fix tampilkan nama prodi
                    },
                    { data: 'semester' },
                    { data: 'kelas' },
                    { data: 'jalur' },
                    { data: 'tahun_masuk' },
                    { data: 'status_mahasiswa' },
                    { data: 'no_whatsapp' },
                    {
                        data: null,
                        orderable: false,
                        render: function(data) {
                            return `<button class="btn btn-sm btn-outline-info btn-view"
                                data-all='${JSON.stringify(data)}'>
                                <i class="fa fa-eye me-1"></i> Detail</button>`;
                        }
                    }
                ]
            });
        }

        $(document).ready(function() {
            // Init DataTable dengan tahun default 2021
            initDataTable($('#filter-tahun').val());

            // Change Tahun
            $('#filter-tahun').on('change', function() {
                initDataTable($(this).val());
            });

            // Modal view data
            $(document).on('click', '.btn-view', function() {
                const data = $(this).data('all');

                $('#view-nim').text(data.nim || '-');
                $('#view-nama').text(data.nama_lengkap || '-');
                $('#view-prodi').text(data.prodi?.nama || '-');
                $('#view-semester').text(data.semester || '-');
                $('#view-kelas').text(data.kelas || '-');
                $('#view-jalur').text(data.jalur || '-');
                $('#view-tahun').text(data.tahun_masuk || '-');
                $('#view-status').text(data.status_mahasiswa || '-');
                $('#view-telp').text(data.no_whatsapp || '-');

                $('#modalViewMahasiswa').modal('show');
            });
        });
    </script>
</body>
</html>
