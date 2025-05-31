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

            <div class="bg-body-light border-bottom py-3">
                <div class="content d-flex flex-column flex-sm-row justify-content-between align-items-center">
                    <div>
                        <h1 class="h3 fw-bold mb-0">Data Dosen</h1>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="block block-rounded shadow-sm">
                    <div class="block-content block-content-full">
                        <div class="table-responsive">
                            <table
                                class="table table-bordered table-striped table-hover align-middle js-dataTable-full w-100">
                                <thead class="table-light">
                                    <tr>
                                        <th>Kode Dosen</th>
                                        <th>Nama Dosen</th>
                                        <th>Prodi</th>
                                        <th>Status</th>
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

    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/oneui.app.min.js"></script>
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
    <script src="assets/js/plugins/datatables-buttons/buttons.html5.min.js"></script>
    <script src="assets/js/plugins/datatables-buttons/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.js-dataTable-full').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                responsive: true,
                autoWidth: false,
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20],
                    [5, 10, 20]
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
                    url: 'https://api.oase.poltektegal.ac.id/api/web/dosen',
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        key: '53fd8f6e-fb0b-4616-8a52-83619dfefa03',
                        kode_tahun_akademik: '12456789'
                    },
                    dataSrc: function(json) {
                        var return_data = [];

                        if (json.status && json.data && json.data.length) {
                            $.each(json.data, function(i, item) {
                                return_data.push({
                                    'kd_dosen': item.kd_dosen || '',
                                    'name': item.name || '',
                                    'prodi': item.prodi || '',
                                    'status': item.status || '',
                                    'aksi': '<button class="btn btn-sm btn-primary">Edit</button>'
                                });
                            });
                        }

                        return return_data;
                    }

                },
                columns: [{
                        data: 'kd_dosen'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'prodi'
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: 'aksi',
                        orderable: false
                    }
                ]
            });
        });
    </script>

</body>

</html>
