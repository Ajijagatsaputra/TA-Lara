<!DOCTYPE html>
<html lang="id">
@extends('layouts.admin')

@section('content')
<body>
    <!-- Header -->
    <div class="bg-primary text-white py-4">
        <div class="content d-flex flex-column flex-sm-row justify-content-between align-items-center">
            <div>
                <h1 class="h3 fw-bold mb-1"><i class="fa fa-database me-2"></i> Data Salinan Tracer Alumni</h1>
                <p class="text-white-50 mb-0">Kelola data tracer alumni secara efisien dan modern.</p>
            </div>
        </div>
    </div>

    <!-- Tabel -->
    <div class="content mt-3">
        <div class="block block-rounded shadow-sm border">
            <div class="block-header bg-white border-bottom d-flex flex-wrap gap-2 justify-content-between align-items-center">
                <h3 class="block-title fw-semibold text-dark">
                    <i class="fa fa-table me-2 text-primary"></i> Tabel Salinan Alumni
                </h3>
                <div class="d-flex gap-2 align-items-center">
                    <label class="fw-semibold text-muted mb-0">🔍 Cari Nama:</label>
                    <input type="text" id="searchByName" class="form-control form-control-sm" placeholder="Nama Alumni">
                </div>
            </div>
            <div class="block-content p-0">
                <div class="table-responsive p-3">
                    <table class="table table-bordered table-striped table-hover align-middle text-center mb-0" id="datatable">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Perusahaan</th>
                                <th>Relevansi</th>
                                <th>Status Kerja</th>
                                <th>Pekerjaan</th>
                                <th>Gaji</th>
                                <th>Alamat</th>
                                <th>Saran</th>
                                <th>Dibuat</th>
                                <th>Diperbarui</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail -->
    <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="modalDetailLabel"><i class="fa fa-user-circle me-2"></i> Detail Tracer Alumni</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-borderless table-sm">
                        <tbody id="detailContent"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Script -->
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
            searching: false,
            ajax: {
                url: "{{ route('tracer.index') }}",
                data: function(d) {
                    d.searchByName = $('#searchByName').val(); // kirim parameter filter nama
                }
            },
            order: [[0, 'desc']],
            columns: [
                { data: 'id', render: (data, type, row, meta) => meta.row + 1 },
                { data: 'tanggal_isi', render: d => d ? new Date(d).toLocaleDateString('id-ID') : '-' },
                { data: 'alumni.nama_lengkap', name: 'alumni.nama_lengkap' },
                { data: 'nama_perusahaan' },
                { data: 'relevansi_pekerjaan' },
                { data: 'bekerja' },
                { data: 'jabatan' },
                { data: 'gaji' },
                { data: 'alamat_pekerjaan' },
                { data: 'saran' },
                { data: 'created_at' },
                { data: 'updated_at' },
                {
                    data: null,
                    orderable: false,
                    searchable: false,
                    render: function(data) {
                        return `
                        <div class="d-flex justify-content-center gap-2">
                            <button class="btn btn-sm btn-info btn-view"
                                data-tanggal="${data.tanggal_isi || '-'}"
                                data-nama="${data.alumni?.nama_lengkap || '-'}"
                                data-perusahaan="${data.nama_perusahaan || '-'}"
                                data-relevansi="${data.relevansi_pekerjaan || '-'}"
                                data-status="${data.bekerja || '-'}"
                                data-jabatan="${data.jabatan || '-'}"
                                data-gaji="${data.gaji || '-'}"
                                data-alamat="${data.alamat_pekerjaan || '-'}"
                                data-saran="${data.saran || '-'}"
                                data-created="${data.created_at || '-'}"
                                data-updated="${data.updated_at || '-'}">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button class="btn btn-sm btn-danger btn-delete" data-id="${data.id}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>`;
                    }
                }
            ]
        });

        // Filter berdasarkan nama alumni
        $('#searchByName').on('keyup', function() {
            table.ajax.reload();
        });

        // View Detail
        $('#datatable').on('click', '.btn-view', function() {
            const fields = {
                "Tanggal Mengisi": $(this).data('tanggal'),
                "Nama Alumni": $(this).data('nama'),
                "Perusahaan": $(this).data('perusahaan'),
                "Relevansi": $(this).data('relevansi'),
                "Status": $(this).data('status'),
                "Jabatan": $(this).data('jabatan'),
                "Gaji": $(this).data('gaji'),
                "Alamat": $(this).data('alamat'),
                "Saran": $(this).data('saran'),
                "Dibuat": $(this).data('created'),
                "Diperbarui": $(this).data('updated')
            };

            let html = '';
            for (const key in fields) {
                html += `<tr><th class="text-start w-25">${key}</th><td>${fields[key]}</td></tr>`;
            }

            $('#detailContent').html(html);
            $('#modalDetail').modal('show');
        });

        // Delete
        $('#datatable').on('click', '.btn-delete', function() {
            const id = $(this).data('id');
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Data ini akan dihapus permanen.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal',
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d'
            }).then((res) => {
                if (res.isConfirmed) {
                    $.ajax({
                        url: `/admin/tracer/${id}`,
                        type: 'DELETE',
                        success: function() {
                            table.ajax.reload();
                            Swal.fire('Terhapus!', 'Data berhasil dihapus.', 'success');
                        },
                        error: function() {
                            Swal.fire('Gagal!', 'Terjadi kesalahan.', 'error');
                        }
                    });
                }
            });
        });
    });
</script>
</body>
</html>
