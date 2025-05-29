<div class="container py-4">
    <div class="row g-4">

        {{-- Informasi Mahasiswa --}}
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header fw-bold">INFORMASI MAHASISWA</div>
                <div class="card-body d-flex align-items-center">
                    <img src="assets/media/avatars/avatar10.jpg" alt="Foto" width="80" class="me-3 rounded">
                    <div>
                        <h5 class="mb-1">AJI JAGAT SAPUTRA <span class="badge bg-success">Aktif</span></h5>
                        <p class="mb-0">NIM: 21090047</p>
                        <p class="mb-0">D IV Teknik Informatika | Kelas 8A</p>
                        <p class="mb-0">Th. 2024/2025 - Genap</p>
                        <p class="mb-0">SKSk: 148</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kalender Akademik --}}
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header fw-bold">KALENDER AKADEMIK</div>
                <div class="card-body">
                    <h3 class="fw-bold">2024/2025</h3>
                    <p>Semester Genap</p>
                </div>
            </div>
        </div>

        {{-- Aktivitas Alumni --}}
<div class="col-md-6">
    <div class="card shadow-sm">
        <div class="card-header fw-bold d-flex justify-content-between">
            <span>AKTIVITAS ALUMNI TERKINI</span>
            <span class="text-muted small">{{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}</span>
        </div>
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <thead class="table-light">
                    <tr>
                        <th>TANGGAL</th>
                        <th>AKTIVITAS</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Contoh data statis --}}
                    <tr>
                        <td>15 Mei 2025</td>
                        <td>Mengisi Kuesioner Tracer Study</td>
                    </tr>
                    <tr>
                        <td>12 Mei 2025</td>
                        <td>Update Data Alumni</td>
                    </tr>
                    <tr>
                        <td>01 Mei 2025</td>
                        <td>Berpartisipasi dalam Kegiatan Alumni</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


        {{-- Informasi Terbaru --}}
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header fw-bold">INFORMASI TERBARU</div>
                <div class="card-body">
                    <h6 class="text-primary">LAUNCHING APLIKASI MOBILE OASE</h6>
                    <p>Telah Launching aplikasi mobile oase untuk android. Download di Play Store atau gunakan link berikut:
                        <a href="https://play.google.com/store/apps/details?id=id.ac.poltektegal.oase" target="_blank">
                            https://play.google.com/store/apps/details?id=id.ac.poltektegal.oase
                        </a>
                    </p>
                    <p class="small text-muted mb-0">
                        Teknik Elektronika, Teknik Mesin, Akuntansi, Teknik Komputer, Kebidanan, Teknik Informatika, Farmasi, Akuntansi Sektor Publik, Perhotelan, Desain Komunikasi Visual, Keperawatan
                    </p>
                    <p class="small text-muted">2024-02-01 11:06:19</p>
                </div>
            </div>
        </div>

    </div>
</div>

