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
            <p class="mb-0">SKS: 148</p>
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

    {{-- Statistik Status Alumni --}}
    <div class="col-lg-6 col-md-8 mb-4">
      <div class="block block-rounded mx-auto">
        <div class="block-header block-header-default">
          <h3 class="block-title">Statistik Status Alumni</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" onclick="updateAlumniChart()">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>

        <div class="block-content text-center">
          <canvas id="alumniChart" style="max-height: 360px; max-width: 100%;"></canvas>
        </div>

        <div class="block-content">
          <div id="alumni-info" class="row text-center justify-content-center"></div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const alumniData = {
    labels: ['Sudah Bekerja', 'Lanjut Studi', 'Belum Bekerja', 'Wirausaha'],
    values: [40, 25, 20, 15],
    colors: ['#007bff', '#6610f2', '#dc3545', '#fd7e14'],
    icons: ['fa-briefcase', 'fa-graduation-cap', 'fa-user-clock', 'fa-store']
  };

  const ctx = document.getElementById('alumniChart').getContext('2d');
  const alumniChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: alumniData.labels,
      datasets: [{
        data: alumniData.values,
        backgroundColor: alumniData.colors,
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'bottom',
          labels: {
            color: '#555',
            font: { size: 14 }
          }
        },
        tooltip: {
          callbacks: {
            label: context => `${context.label}: ${context.parsed}%`
          }
        }
      }
    }
  });

  function renderInfo(containerId, data) {
    const container = document.getElementById(containerId);
    container.innerHTML = '';
    data.labels.forEach((label, i) => {
      const col = document.createElement('div');
      col.className = 'col-6 col-sm-6 col-lg-4 py-3';
      col.innerHTML = `
        <i class="fa ${data.icons[i]} fa-2x" style="color: ${data.colors[i]}"></i>
        <div class="fw-bold mt-2">${label}</div>
        <div class="text-muted">${data.values[i]}%</div>
      `;
      container.appendChild(col);
    });
  }

  renderInfo('alumni-info', alumniData);

  function updateAlumniChart() {
    alumniData.values = [45, 20, 25, 10]; // misal update data baru
    alumniChart.data.datasets[0].data = alumniData.values;
    alumniChart.update();
    renderInfo('alumni-info', alumniData);
  }
</script>
