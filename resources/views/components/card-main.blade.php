<div class="container py-4">
    <div class="row g-4">
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

        {{-- Status Pengisian Tracer Study --}}
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header fw-bold">STATUS PENGISIAN TRACER STUDY</div>
                <div class="card-body text-center">
                    <i class="fa fa-check-circle fa-3x text-success mb-3"></i>
                    <h5 class="fw-bold text-success">Sudah Mengisi</h5>
                    <p class="text-muted mb-0">Terima kasih telah berpartisipasi dalam tracer study.</p>
                    <a href="/tracer-study/form" class="btn btn-outline-primary btn-sm mt-3">Lihat Jawaban</a>
                </div>
            </div>
        </div>

        {{-- Data Rekap Alumni (Bar Chart) --}}
        <div class="col-lg-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header fw-bold">Data Rekap Alumni</div>
                <div class="card-body">
                    <canvas id="rekapAlumniChart" style="max-height: 420px; max-width: 100%;"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Bar Chart (Rekap Alumni)
    const ctxBar = document.getElementById('rekapAlumniChart').getContext('2d');
    const rekapAlumniChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: ['2021', '2022', '2023', '2024', '2025'],
            datasets: [{
                    label: 'Total Alumni',
                    data: [310, 480, 320, 430, 440],
                    backgroundColor: 'rgba(66,133,244,0.8)'
                },
                {
                    label: 'Mengisi Kuesioner',
                    data: [ 10, 17, 8, 15, 20, 50, 200],
                    backgroundColor: 'rgba(0,200,180,0.8)'
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Jumlah Alumni'
                    }
                }
            },
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        font: {
                            size: 13
                        }
                    }
                },
                tooltip: {
                    mode: 'index',
                    intersect: false
                }
            }
        }
    });
</script>
