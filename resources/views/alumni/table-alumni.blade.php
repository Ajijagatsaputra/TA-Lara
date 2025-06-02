<!DOCTYPE html>
<html lang="id">

<!-- Head Component -->
@include('components.admin.head')

<body>
    <div id="page-container"
        class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

        <!-- Header, Sidebar, Overlay -->
        @include('components.admin.admin-header')
        @include('components.admin.sidebar')
        @include('components.admin.side-overlay')

        <!-- Main Container -->
        <main id="main-container">

            <!-- Hero Section -->
            <div class="bg-body-light border-bottom py-3">
                <div class="content d-flex flex-column flex-sm-row justify-content-between align-items-center">
                    <div>
                        <h1 class="h3 fw-bold mb-0">Data Alumni</h1>
                        <p class="text-muted fs-sm">Kelola data alumni aktif, DO dan cuti.</p>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <div class="content">
                <div class="block block-rounded shadow-sm">
                    <div class="block-content block-content-full">

                        <!-- Filter Tahun Angkatan -->
                        <div class="mb-3">
                            <label for="filter-tahun" class="form-label fw-semibold">Filter Tahun Angkatan:</label>
                            <select id="filter-tahun" class="form-select w-auto d-inline-block">
                                <option value="2025">2025</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021" selected>2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                            </select>
                        </div>

                        <!-- Table -->
                        <div class="table-responsive">
                            <table
                                class="table table-bordered table-striped table-hover align-middle js-dataTable-full w-100">
                                <thead class="table-light">
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama Lengkap</th>
                                        <th class="d-none d-sm-table-cell">Prodi</th>
                                        <th>Kelas</th>
                                        <th class="d-none d-sm-table-cell">Jalur</th>
                                        <th class="d-none d-sm-table-cell">Tahun Masuk</th>
                                        <th>Tahun Lulus</th>
                                        <th class="d-none d-sm-table-cell">Status Mahasiswa</th>
                                        <th class="d-none d-sm-table-cell">No. Telp</th>
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
                <div class="modal-header">
                    <h5 class="modal-title" id="modalViewMahasiswaLabel">Detail Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <dl class="row">
                        <dt class="col-sm-4">NIM</dt>
                        <dd class="col-sm-8" id="view-nim"></dd>

                        <dt class="col-sm-4">Nama Lengkap</dt>
                        <dd class="col-sm-8" id="view-nama_lengkap"></dd>

                        <dt class="col-sm-4">Prodi</dt>
                        <dd class="col-sm-8" id="view-prodi"></dd>

                        <dt class="col-sm-4">Alamat</dt>
                        <dd class="col-sm-8" id="view-alamat"></dd>

                        <dt class="col-sm-4">No.Hp</dt>
                        <dd class="col-sm-8" id="view-no_hp"></dd>

                        <dt class="col-sm-4">Kelas</dt>
                        <dd class="col-sm-8" id="view-kelas"></dd>

                        <dt class="col-sm-4">Jalur</dt>
                        <dd class="col-sm-8" id="view-jalur"></dd>

                        <dt class="col-sm-4">Tahun Masuk</dt>
                        <dd class="col-sm-8" id="view-tahun_masuk"></dd>

                        <dt class="col-sm-4">Tahun Lulus</dt>
                        <dd class="col-sm-8" id="view-tahun_lulus"></dd>

                        <dt class="col-sm-4">Status Mahasiswa</dt>
                        <dd class="col-sm-8" id="view-status_mahasiswa"></dd>

                        <dt class="col-sm-4">Terakhir Diubah</dt>
                        <dd class="col-sm-8" id="view-terakhir_diubah"></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/oneui.app.min.js"></script>

    <!-- DataTables & Plugins -->
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
    <script src="assets/js/plugins/datatables-buttons/buttons.html5.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons/buttons.print.min.js"></script>

    <!-- DataTable Initialization -->
    <script>

        $(document).ready(function() {
            initDataTable($('#filter-tahun').val());

            $('#filter-tahun').on('change', function() {
                initDataTable($(this).val());
            });

            // Event delegation for dynamic "View" buttons
            $(document).on('click', '.btn-view', function() {
               $('#view-nim').text($(this).data('nim'));
                $('#view-nama_lengkap').text($(this).data('nama_lengkap'));
                $('#view-prodi').text($(this).data('prodi'));
                $('#view-alamat').text($(this).data('alamat'));
                $('#view-no_hp').text($(this).data('no_hp'));
                $('#view-kelas').text($(this).data('kelas'));
                $('#view-jalur').text($(this).data('jalur'));
                $('#view-tahun_masuk').text($(this).data('tahun_masuk'));
                $('#view-tahun_lulus').text($(this).data('tahun_lulus'));
                $('#view-status_mahasiswa').text($(this).data('status_mahasiswa'));
                $('#view-terakhir_diubah').text($(this).data('terakhir_diubah'));

            });
        });
        
        let table;

        function initDataTable(tahunAngkatan) {
            if (table) {
                table.destroy();

                $('.js-dataTable-full').empty();
                $('.js-dataTable-full').html(`
                    <thead class="table-light">
                        <tr>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th class="d-none d-sm-table-cell">Prodi</th>
                            <th>Kelas</th>
                            <th class="d-none d-sm-table-cell">Jalur</th>
                            <th class="d-none d-sm-table-cell">Tahun Masuk</th>
                            <th>Tahun Lulus</th>
                            <th class="d-none d-sm-table-cell">Status Mahasiswa</th>
                            <th class="d-none d-sm-table-cell">No. Telp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                `);
            }

            table = $('.js-dataTable-full').DataTable({
    paging: true,
    searching: true,
    ordering: true,
    responsive: true,
    pageLength: 20,
    dom: "<'dt-toolbar row mb-3'" +
        "<'col-12 col-md-6 d-flex align-items-center gap-2'B>" +
        "<'col-12 col-md-6 text-md-end mt-2 mt-md-0'f>" +
        ">" +
        "<'row'<'col-sm-12 table-responsive'tr>>" +
        "<'row'<'col-sm-5'i><'col-sm-7'p>>",
    buttons: [
        {
            extend: 'excelHtml5',
            className: 'btn btn-sm btn-success',
            text: '<i class="fa fa-file-excel me-1"></i> Excel',
            exportOptions: {
                columns: ':not(:last-child)'
            }
        },
        {
            extend: 'pdfHtml5',
            className: 'btn btn-sm btn-danger',
            text: '<i class="fa fa-file-pdf me-1"></i> PDF',
            orientation: 'landscape',
            pageSize: 'A4',
            exportOptions: {
                columns: ':not(:last-child)'
            }
        },
        {
            extend: 'print',
            className: 'btn btn-sm btn-info',
            text: '<i class="fa fa-print me-1"></i> Cetak',
            exportOptions: {
                columns: ':not(:last-child)'
            }
        }
    ],
    ajax: {
        url: '{{ route('api.alumni') }}',
        type: 'GET',
        data: {
            tahun_angkatan: tahunAngkatan
        },
        dataSrc: function(json) {
            return json.data.map(item => ({
                nim: item.nim,
                nama_lengkap: item.nama_lengkap,
                prodi: item.prodi,
                alamat: item.alamat,
                no_hp: item.no_hp,
                kelas: item.kelas,
                jalur: item.jalur,
                tahun_masuk: item.tahun_masuk,
                tahun_lulus: item.tahun_lulus,
                status_mahasiswa: item.status_mahasiswa,
                terakhir_diubah: item.updated_at,
                aksi: `<button class="btn btn-sm btn-info btn-view" 
                            data-nim="${item.nim}"
                            data-nama_lengkap="${item.nama_lengkap}"
                            data-prodi="${item.prodi}"
                            data-alamat="${item.alamat}"
                            data-no_hp="${item.no_hp}"
                            data-kelas="${item.kelas}"
                            data-jalur="${item.jalur}"
                            data-tahun_masuk="${item.tahun_masuk}"
                            data-tahun_lulus="${item.tahun_lulus}"
                            data-status_mahasiswa="${item.status_mahasiswa}"
                            data-terakhir_diubah="${item.updated_at}">
                            View
                       </button>`
            }));
        }
    },
    columns: [
        { data: 'nim' },
        { data: 'nama_lengkap' },
        { data: 'prodi' },
        { data: 'kelas' },
        { data: 'jalur' },
        { data: 'tahun_masuk' },
        { data: 'tahun_lulus' },
        { data: 'status_mahasiswa' },
        { data: 'no_hp' },
        { data: 'aksi', orderable: false, searchable: false },
    ]
});

        }

        
    </script>

</body>

</html>
