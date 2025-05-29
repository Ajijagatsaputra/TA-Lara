<!doctype html>
<html lang="id">
@include('components.admin.head')

<body>
    <div id="page-container"
        class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        @include('components.admin.admin-header')
        @include('components.admin.sidebar')
        @include('components.admin.side-overlay')

        <!-- Main Container -->
        <main id="main-container">
            <!-- Hero -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                        <div class="flex-grow-1">
                            <h1 class="h3 fw-bold mb-2">Data Mahasiswa</h1>
                        </div>
                        <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                            <span class="d-inline-block">
                                <a class="btn btn-primary px-4 py-2" data-toggle="click-ripple"
                                    href="javascript:void(0)">
                                    <i class="fa fa-plus me-1 opacity-50"></i> Tambah Mahasiswa
                                </a>
                            </span>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- END Hero -->

            <!-- Page Content -->
            <div class="content">
                <!-- Tabel Mahasiswa -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Data Mahasiswa</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 50px;">#</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th class="d-none d-sm-table-cell">Email</th>
                                    <th class="d-none d-sm-table-cell">Status Mahasiswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tahun Masuk</th>
                                    <th class="text-center" style="width: 100px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>220101001</td>
                                    <td>Jesse Fisher</td>
                                    <td class="d-none d-sm-table-cell">jesse@example.com</td>
                                    <td><span class="badge bg-success">Aktif</span></td>
                                    <td>Laki-laki</td>
                                    <td>2022</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-warning me-1" title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" title="Hapus">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>220101002</td>
                                    <td>Andrea Gardner</td>
                                    <td class="d-none d-sm-table-cell">andrea@example.com</td>
                                    <td><span class="badge bg-warning">Cuti</span></td>
                                    <td>Perempuan</td>
                                    <td>2021</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-warning me-1" title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" title="Hapus">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Tambahkan data lainnya di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Tabel Mahasiswa -->
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        @include('components.admin.footer')
    </div>

    <script src="assets/js/oneui.app.min.js"></script>
    <script src="assets/js/lib/jquery.min.js"></script>

    <!-- DataTables JS -->
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
    <script src="assets/js/plugins/datatables-buttons/buttons.print.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons/buttons.html5.min.js"></script>

    <!-- Inisialisasi DataTables -->
    <script>
        jQuery(function() {
            Codebase.helpers('js-dataTable-full');
        });
    </script>
</body>

</html>
