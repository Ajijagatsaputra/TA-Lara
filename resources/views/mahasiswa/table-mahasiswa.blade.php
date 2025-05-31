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
                        <h1 class="h3 fw-bold mb-0">Data Mahasiswa</h1>
                        <p class="text-muted fs-sm">Kelola data mahasiswa aktif, DO dan cuti.</p>
                    </div>
                </div>
            </div>
            <!-- End Hero -->

            <!-- Page Content -->
            <div class="content">
                <div class="block block-rounded shadow-sm">
                    <div class="block-content block-content-full">

                        <!-- Filter Tahun Angkatan -->
                        <div class="mb-3">
                            <label for="filter-tahun" class="form-label fw-semibold">Filter Tahun Angkatan:</label>
                            <select id="filter-tahun" class="form-select w-auto d-inline-block">
                                <option value="2025" selected>2025</option>
                                <option value="2024" selected>2024</option>
                                <option value="2023" selected>2023</option>
                                <option value="2022" selected>2022</option>
                                <option value="2021" selected>2021</option>
                            </select>
                        </div>

                        <!-- Table -->
                        <div class="table-responsive">
                            <table
                                class="table table-bordered table-striped table-hover align-middle js-dataTable-full w-100">
                                <thead class="table-light">
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama Mahasiswa</th>
                                        <th class="d-none d-sm-table-cell">Prodi</th>
                                        <th>Semester</th>
                                        <th class="d-none d-sm-table-cell">Kelas</th>
                                        <th class="d-none d-sm-table-cell">Jalur</th>
                                        <th>Tahun Masuk</th>
                                        <th class="d-none d-sm-table-cell">Status Mahasiswa</th>
                                        <th class="d-none d-sm-table-cell">No. Telp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Table -->

                    </div>
                </div>
            </div>
            <!-- End Page Content -->

        </main>

        <!-- Footer -->
        @include('components.admin.footer')
    </div>

    <!-- JavaScript Libraries -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/oneui.app.min.js"></script>

    <!-- DataTables & Export Plugins -->
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
        let table;

        function initDataTable(tahunAngkatan) {
            if (table) {
                table.destroy();
                $('.js-dataTable-full').empty(); // Kosongkan isi sebelum re-inisialisasi
                $('.js-dataTable-full').html(`
                    <thead class="table-light">
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th class="d-none d-sm-table-cell">Prodi</th>
                            <th>Semester</th>
                            <th class="d-none d-sm-table-cell">Kelas</th>
                            <th class="d-none d-sm-table-cell">Jalur</th>
                            <th>Tahun Masuk</th>
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
                autoWidth: false,
                pageLength: 20,
                lengthMenu: [
                    [5, 10, 15, 20],
                    [5, 10, 15, 20]
                ],
                dom: "<'dt-toolbar row mb-3'" +
                    "<'col-12 col-md-6 d-flex align-items-center gap-2'B>" +
                    "<'col-12 col-md-6 text-md-end mt-2 mt-md-0'f>" +
                    ">" +
                    "<'row'<'col-sm-12 table-responsive'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                buttons: [{
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
                    url: '{{ route('api.mahasiswa') }}',
                    type: 'GET',
                    dataType: 'JSON',
                    data: {
                        tahun_angkatan: tahunAngkatan
                    },
                    dataSrc: function(json) {
                        var return_data = [];

                        if (json.status && json.data && json.data.length) {
                            $.each(json.data, function(i, item) {
                                return_data.push({
                                    'nim': item.nim || '',
                                    'nama_lengkap': item.nama_lengkap || '',
                                    'prodi': (item.prodi && item.prodi.nama) || '',
                                    'semester': item.semester || '',
                                    'kelas': item.kelas || '',
                                    'jalur': item.jalur || '',
                                    'tahun_masuk': item.tahun_masuk || '',
                                    'status_mahasiswa': item.status_mahasiswa || '',
                                    'no_whatsapp': item.no_whatsapp || '',
                                    'aksi': '<button class="btn btn-sm btn-primary">Edit</button>'
                                });
                            });
                        }

                        return return_data;
                    }
                },
                columns: [{
                        data: 'nim'
                    },
                    {
                        data: 'nama_lengkap'
                    },
                    {
                        data: 'prodi'
                    },
                    {
                        data: 'semester'
                    },
                    {
                        data: 'kelas'
                    },
                    {
                        data: 'jalur'
                    },
                    {
                        data: 'tahun_masuk'
                    },
                    {
                        data: 'status_mahasiswa'
                    },
                    {
                        data: 'no_whatsapp'
                    },
                    {
                        data: 'aksi',
                        orderable: false
                    }
                ]
            });
        }

        $(document).ready(function() {
            // Inisialisasi pertama
            initDataTable($('#filter-tahun').val());

            // Ganti tahun
            $('#filter-tahun').on('change', function() {
                const selectedTahun = $(this).val();
                initDataTable(selectedTahun);
            });
        });
    </script>

</body>

</html>
