<!DOCTYPE html>
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
            <div class="bg-body-light border-bottom py-3">
                <div class="content d-flex flex-column flex-sm-row justify-content-between align-items-center">
                    <div>
                        <h1 class="h3 fw-bold mb-0">Data Salinan Tracer Alumni</h1>
                        <p class="text-muted fs-sm">Kelola data salinan tracer alumni.</p>
                    </div>
                   
                </div>
            </div>
            <!-- END Hero -->

            <!-- Page Content -->
            <div class="content">
                <div class="block block-rounded shadow-sm">
                    <div class="block-header block-header-default bg-light">
                        <h3 class="block-title">Tabel Salinan Alumni</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="table-responsive">
                            <table class="table" id="datatable">
                                  <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Alamat Lengkap</th>
                                        <th>No.HP</th>
                                        <th>Prodi</th>
                                        <th>Tahun Lulusan</th>
                                        <th>Status</th>
                                        <th>Dibuat Pada</th>
                                        <th>Diperbarui Pada</th>
                                        <th>Aksi</th>
                                      </tr>
                                  </thead>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>

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
     <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $('#datatable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('tracer.index') }}",
                    "type": "GET"
                },
                "columns": [
                    {
                        data: 'id',
                        name: 'id',
                        render: function (data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    { data: 'id_alumni', name: 'id_alumni' },
                    { data: 'tanggal_isi', name: 'tanggal_isi' },
                    { data: 'status_kerja', name: 'status_kerja' },
                    { data: 'relevansi_pekerjaan', name: 'relevansi_pekerjaan' },
                    { data: 'pekerjaan', name: 'pekerjaan' },
                    { data: 'gaji', name: 'gaji' },
                    { data: 'tempat_kerja', name: 'tempat_kerja' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                    { data: 'action', name: 'action' }
                ],
                "order": [[ 0, "desc" ]],

            });
        });
    </script>

    <!-- Inisialisasi DataTable -->
    <script>
        jQuery(document).ready(function() {
            jQuery('.js-dataTable-full').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                responsive: true, // pastikan ini aktif
                autoWidth: false,
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 15, 20],
                    [5, 10, 15, 20]
                ],
                dom: "<'dt-toolbar row mb-3'" +
                    "<'col-12 col-md-6 d-flex align-items-center gap-2'B>" + // tombol export
                    "<'col-12 col-md-6 text-md-end mt-2 mt-md-0'f>" + // search bar
                    ">" +
                    "<'row'<'col-sm-12 table-responsive'tr>>" + // buat tabel jadi scrollable di mobile
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
                ]
            });
        });
    </script>

</body>

</html>
