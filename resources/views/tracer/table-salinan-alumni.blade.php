<!DOCTYPE html>
<html lang="id">
@extends('layouts.admin')

@section('content')


    <body>
        <div id="page-container"
            class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
            <main id="main-container">
                <div class="bg-body-light border-bottom py-4">
                    <div class="content d-flex flex-column flex-sm-row justify-content-between align-items-center">
                        <div>
                            <h1 class="h3 fw-bold text-primary mb-1">📄 Data Salinan Tracer Alumni</h1>
                            <p class="text-muted mb-0">Kelola data tracer alumni secara efisien dan rapi.</p>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <div class="block block-rounded shadow">
                        <div class="block-header block-header-default bg-primary text-white">
                            <h3 class="block-title fw-semibold">📊 Tabel Salinan Alumni</h3>
                        </div>
                        <div class="block-content block-content-full">

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover align-middle text-center"
                                    id="datatable">
                                    <thead class="table-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Tanggal Mengisi</th>
                                            <th>Nama Alumni</th>
                                            <th>Perusahaan</th>
                                            <th>Relevansi</th>
                                            <th>Status</th>
                                            <th>Jabatan</th>
                                            <th>Gaji</th>
                                            <th>Alamat</th>
                                            <th>Saran</th>
                                            <th>Dibuat</th>
                                            <th>Diperbarui</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            @include('components.admin.footer')

            <!-- Modal Detail -->
            <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="modalDetailLabel">Detail Tracer Alumni</h5>
                            <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-borderless">
                                <tbody id="detailContent"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="assets/js/oneui.app.min.js"></script>
        <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>

        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function() {
                const table = $('#datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    ajax: "{{ route('tracer.index') }}",
                    columns: [{
                            data: 'id',
                            render: (data, type, row, meta) => meta.row + 1
                        },
                        {
                            data: 'tanggal_isi',
                            render: (data) => data ? new Date(data).toLocaleDateString('id-ID') : ''
                        },
                        {
                            data: 'alumni.nama_lengkap',
                            name: 'alumni.nama_lengkap'
                        },
                        {
                            data: 'nama_perusahaan'
                        },
                        {
                            data: 'relevansi_pekerjaan'
                        },
                        {
                            data: 'bekerja'
                        },
                        {
                            data: 'jabatan'
                        },
                        {
                            data: 'gaji'
                        },
                        {
                            data: 'alamat_pekerjaan'
                        },
                        {
                            data: 'saran'
                        },
                        {
                            data: 'created_at'
                        },
                        {
                            data: 'updated_at'
                        },
                        {
                            data: null,
                            orderable: false,
                            searchable: false,
                            render: function(data) {
                                return `
                                <div class="d-flex justify-content-center gap-2">
                                    <button class="btn btn-sm btn-info btn-view"
                                        data-tanggal="${data.tanggal_isi}"
                                        data-nama="${data.nama_lengkap}"
                                        data-nama="${data.alumni?.nama_lengkap ?? '-'}"
                                        data-perusahaan="${data.nama_perusahaan}"
                                        data-relevansi="${data.relevansi_pekerjaan}"
                                        data-status="${data.bekerja}"
                                        data-jabatan="${data.jabatan}"
                                        data-gaji="${data.gaji}"
                                        data-alamat="${data.alamat_pekerjaan}"
                                        data-saran="${data.saran}"
                                        data-created="${data.created_at}"
                                        data-updated="${data.updated_at}">
                                        <i class="fa fa-eye me-1"></i> Lihat
                                    </button>
                                    <button class="btn btn-sm btn-danger btn-delete" data-id="${data.id}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>`;
                            }
                        }
                    ],
                    order: [
                        [0, 'desc']
                    ]
                });

                // Custom Search
                $('#customSearch').on('keyup', function() {
                    table.search(this.value).draw();
                });

                // View Modal
                $('#datatable').on('click', '.btn-view', function() {
                    const fields = {
                        Tanggal: $(this).data('tanggal'),
                        Alumni: $(this).data('alumni.nama_lengkap'),
                        Perusahaan: $(this).data('perusahaan'),
                        Relevansi: $(this).data('relevansi'),
                        Status: $(this).data('status'),
                        Jabatan: $(this).data('jabatan'),
                        Gaji: $(this).data('gaji'),
                        Alamat: $(this).data('alamat'),
                        Saran: $(this).data('saran'),
                        Dibuat: $(this).data('created'),
                        Diperbarui: $(this).data('updated')
                    };

                    let html = '';
                    for (const key in fields) {
                        html += `<tr><th class="text-start">${key}</th><td>${fields[key]}</td></tr>`;
                    }

                    $('#detailContent').html(html);
                    $('#modalDetail').modal('show');
                });

                // Delete
                $('#datatable').on('click', '.btn-delete', function() {
                    const id = $(this).data('id');
                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Data yang dihapus tidak dapat dikembalikan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#6c757d',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: `/admin/tracer/${id}`,
                                type: 'DELETE',
                                success: function() {
                                    table.ajax.reload();
                                    Swal.fire('Terhapus!', 'Data berhasil dihapus.',
                                        'success');
                                },
                                error: function() {
                                    Swal.fire('Gagal', 'Tidak dapat menghapus data.',
                                        'error');
                                }
                            });
                        }
                    });
                });
            });
        </script>
    </body>

    </html>
