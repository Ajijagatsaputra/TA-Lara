<!DOCTYPE html>
<html lang="id">
    @extends('layouts.admin')

    @section('content')
    

<body>
    <!-- Hero -->
    <div class="bg-body-light border-bottom py-3">
        <div class="content d-flex flex-column flex-sm-row justify-content-between align-items-center">
            <div>
                <h1 class="h3 fw-bold mb-0">Data Salinan Tracer Pengguna</h1>
                <p class="text-muted fs-sm">Kelola data salinan tracer pengguna.</p>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <div class="block block-rounded shadow-sm">
            <div class="block-header block-header-default bg-light">
                <h3 class="block-title">Tabel Salinan Pengguna</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle js-dataTable-full w-100">
                        <thead class="table-light">
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Nama</th>
                                <th>Nama Perusahaan</th>
                                <th>Tanggal Mengisi</th>
                                <th class="d-none d-sm-table-cell">Prodi</th>
                                <th class="d-none d-sm-table-cell">Status</th>
                                <th>Jabatan</th>
                                <th class="text-center" style="width: 100px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->nama_perusahaan }}</td>
                                    <td class="d-none d-sm-table-cell">{{ $item->created_at->format('d-m-Y') }}</td>
                                    <td>{{ $item->prodi }}</td>
                                    <td>
                                        @if ($item->created_at)
                                            <span class="badge bg-success">Sudah Mengisi</span>
                                        @else
                                            <span class="badge bg-warning text-dark">Belum Mengisi</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td class="text-center">
                                        <div class="dropdown position-static">
                                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a href="{{ route('listtracerpengguna.show', $item->id) }}"
                                                        class="dropdown-item">
                                                        <i class="fa fa-eye me-1"></i> Detail
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('listtracerpengguna.edit', $item->id) }}"
                                                        class="dropdown-item">
                                                        <i class="fa fa-pencil-alt me-1"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('listtracerpengguna.destroy', $item->id) }}"
                                                        method="POST" onsubmit="return confirm('Yakin hapus data?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item text-danger">
                                                            <i class="fa fa-trash-alt me-1"></i> Hapus
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach

                            @if ($data->isEmpty())
                                <tr>
                                    <td colspan="8" class="text-center">Belum ada data.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
    <!-- JavaScript Libraries -->
    <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/oneui.app.min.js') }}"></script>

    <!-- DataTables & Export Plugins -->
    <script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>

    <!-- Inisialisasi DataTable -->
    <script>
        jQuery(document).ready(function() {
            jQuery('.js-dataTable-full').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                responsive: true,
                autoWidth: false,
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 15, 20],
                    [5, 10, 15, 20]
                ],
                dom: "<'dt-toolbar row mb-3'<'col-12 col-md-6 d-flex align-items-center gap-2'B><'col-12 col-md-6 text-md-end mt-2 mt-md-0'f>>" +
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
                ]
            });
        });
    </script>

</body>

</html>
